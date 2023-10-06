@extends('layouts.app')
@section('title', 'User Management')
@section('content')

<section class="admin-container">
    <div class="flex h-full">

        <div class="admin-sidebar-container">
            @include('partials.sidebar')
        </div>
        <div class="w-full">
            @include('partials.navAdmin')
            <div class="flex justify-center">
                <div class="table-container p-6">
                    <p class="text-lg font-bold pb-4">User Details</p>
                    <table class="table-auto">
                        <thead>
                            <tr>
                                <th>First Name</th>
                                <th>Middle Name</th>
                                <th>Last Name</th>
                                <th>Library Card Number</th>
                                <th>Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($users as $user)
                            <tr>
                                <td>{{ $user->first_name }}</td>
                                <td>{{ $user->middle_name }}</td>
                                <td>{{ $user->last_name }}</td>
                                <td>{{ $user->card_number }}</td>
                                <td class="action-btn user flex justify-center items-center"><i>
                                        <form class="user-restore" action="{{route('user.restore')}}" method="POST">
                                            @csrf
                                            @method('PUT')
                                            <button> <i class="fa-solid fa-rotate-right px-2"></i></button>
                                            <input type="hidden" name="user_id" value="{{$user->id}}">
                                        </form>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td class="table__no-record" colspan="5"><p class="text-xl font-bold"><i class="fa-solid fa-circle-exclamation"></i> No records found</p></td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                    <div class="py-6">
                        {{ $users->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>

    @if (session('userRestore'))
    <script>
        window.addEventListener('load', () => {
    Swal.fire({
        icon: 'success',
        title: 'User Restored',
        text: 'User account was set to active'

            })
        })   
    </script>
    @endif

    <script>
        const restoreUser = document.querySelectorAll('.user-restore')
        restoreUser.forEach((restoreUserEl) => {
            restoreUserEl.addEventListener('submit', (e) => {
                e.preventDefault()
                    Swal.fire({
                        icon: 'question',
                        title: 'Restore User Account',
                        text: 'Are you sure you want to proceed?!',
                        showCancelButton: true,
                        reverseButtons: true,
                        allowOutsideClick: false,
                        customClass: {
                            confirmButton: 'swal2-confirm-custom',
                            cancelButton: 'swal2-cancel-custom',
                        },
                    })
                    .then((response)=>{
                        if(response.value){
                            restoreUserEl.submit()
                        }
                    })
                })
            })
    </script>
    @endsection