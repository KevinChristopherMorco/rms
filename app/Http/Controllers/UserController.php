<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Book;

use App\Models\Client;
use Illuminate\Database\Query\JoinClause;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function guestBrowse()
    {
        $data = array('books' => DB::table('books')->orderBy('created_at')->paginate(5));
        return view('guest.browseBook', $data);
    }
    public function login()
    {
        return view('login');
    }
    public function home()
    {
        $authSessionId = Auth::id();
        // $data = array('books'=> DB::table('books')->join('book_reservations', 'books.id', '=', 'book_reservations.book_id')->where('book_reservations.user_id', '=',  $authSessionId)->select('books.*')->paginate(4));
        // $pending = array('pending'=> DB::table('books')->join('book_reservations', 'books.id', '=', 'book_reservations.book_id')->where('book_reservations.user_id', '=',  $authSessionId, 'and', 'book_reservations.status', '=', 'Pending')->select('books.*')->paginate(4));

        $bookData = Book::join('book_reservations', 'books.id', '=', 'book_reservations.book_id')->where('book_reservations.user_id', '=',  $authSessionId)->select('books.*')->paginate(4);
        $pendingBookData =  Book::join('book_reservations', 'books.id', '=', 'book_reservations.book_id')->where('book_reservations.user_id', '=',  $authSessionId)->where('book_reservations.reservation_status', '=', 'Pending')->select('books.*')->orderBy('book_reservations.created_at', 'desc')->paginate(3, '[*]', 'PendingPage');
        $aprroveBookData =  Book::join('book_reservations', 'books.id', '=', 'book_reservations.book_id')->where('book_reservations.user_id', '=',  $authSessionId)->where('book_reservations.reservation_status', '=', 'Approved')->select('books.*')->orderBy('book_reservations.created_at', 'desc')->paginate(3, '[*]', 'AcceptPage');
        $declineBookData =  Book::join('book_reservations', 'books.id', '=', 'book_reservations.book_id')->where('book_reservations.user_id', '=',  $authSessionId)->where('book_reservations.reservation_status', '=', 'Declined')->select('books.*')->orderBy('book_reservations.created_at', 'desc')->paginate(3, '[*]', 'DeclinePage');
        $confirmBookData =  Book::join('book_reservations', 'books.id', '=', 'book_reservations.book_id')->where('book_reservations.user_id', '=',  $authSessionId)->where('book_reservations.reservation_status', '=', 'Confirmed')->select('books.*')->orderBy('book_reservations.created_at', 'desc')->paginate(3, '[*]', 'ConfirmPage');

        $data = ['books' => $bookData, 'pending' => $pendingBookData, 'approve' => $aprroveBookData, 'decline' => $declineBookData, 'confirm' => $confirmBookData];
        return view('home', $data);
    }

    public function catalog()
    {
        $data = array(
            'books' => DB::table('books')->leftJoin('book_reservations', function (JoinClause $join) {
                $authSessionId = Auth::id();
                $join->on('book_reservations.book_id', '=', 'books.id')->where('book_reservations.user_id', '=', $authSessionId);
            })->whereNull('book_reservations.user_id')->select('books.*')->paginate(10)
        );
        return view('user.catalog', $data);
    }


    public function register()
    {
        return view('register');
    }

    public function resetPassword()
    {
        return view('auth.passwords.email');
    }

    public function show(User $user)
    {
        return view('user.show', compact('user'));
    }

    public function adminHome()
    {
        $userCount = User::count();
        return view('admin.dashboard', compact('userCount'));
    }

    public function showUser()
    {
        $data = array('users' => DB::table('users')->orderBy('created_at')->whereNot('status', 'Suspended') ->paginate(8));
        return view('admin.user.showUser', $data);
    }
    public function showBook()
    {
        $books = array('books' => Book::orderBy('id', 'asc')->paginate(8));
        return view('admin.showBook', $books);
    }

    public function showReservation()
    {
        $bookReservation = array('reservations' => DB::table('books')->join('book_reservations', 'books.id', '=', "book_reservations.book_id")->join('users', 'book_reservations.user_id', '=', 'users.id')->select('books.*', 'book_reservations.*', 'users.*')->paginate(10));
        return view('admin.showReservation', $bookReservation);
    }

    public function findUserId($id)
    {
        $user = User::findOrFail($id);
        return response()->json($user);
    }

    public function editUser(Request $request)
    {
        $id = $request->input('user_id');
        $user = User::findOrFail($id);

        $validateData = $request->validate([
            'status' => 'required',
        ]);

        $user->update($validateData);
        return redirect()->route('admin.showUser');
    }

    public function suspendUser(Request $request)
    {
        $id = $request->input('user_id');
        $user = User::findOrFail($id);
        $user->update(['status' => 'Suspended']);
        return redirect()->route('admin.showUser')->with('userSuspend', 'User Suspended');
    }

    public function showSuspended()
    {
        $user = array('users' => User::where('status', 'Suspended')->orderBy('last_name','asc')->paginate(8));
        return view('admin.user.showSuspended', $user);
    }
    public function restoreUser(Request $request)
    {
        $id = $request->input('user_id');
        $user = User::findOrFail($id);
        $user->update(['status' => 'Active']);
        return redirect()->route('admin.suspend')->with('userRestore','User Restored Successfully');
    }
}
