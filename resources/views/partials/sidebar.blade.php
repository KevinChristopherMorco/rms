<div class="admin-sidebar">
    <ul class="admin-sidebar-items">
        <li><a href="{{route('admin')}}"><i class="fa-solid fa-house"></i>Home</a></li>
        <li><a href="{{ route('admin.showUser') }}"><i class="fa-solid fa-users"></i>User Management</a><i class="fa-solid fa-arrow-right"></i></li>
        <li><a href="{{route('admin.showBook')}}"><i class="fa-solid fa-book"></i>Catalog Management</a><i class="fa-solid fa-arrow-right"></i></li>
        <li><a href=""><i class="fa-solid fa-people-carry-box"></i>Patron Management</a><i class="fa-solid fa-arrow-right"></i></li>
        <li><a href=""><i class="fa-solid fa-chart-gantt"></i>Circulation Management</a><i class="fa-solid fa-arrow-right"></i></li>
        <li><a href=""><i class="fa-solid fa-table-list"></i>Inventory Management</a><i class="fa-solid fa-arrow-right"></i></li>
        <li>
            <form action="/logout" method="POST">
                @csrf
                <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 border border-red-700 rounded" role="alert"><i class="fa-solid fa-power-off pr-2"></i>Logout</button>
            </form>
        </li>
    </ul>
</div>