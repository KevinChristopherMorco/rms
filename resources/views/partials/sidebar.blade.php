<div class="admin-sidebar">
    <ul class="admin-sidebar-items px-4">
        <div class="admin-sidebar-item-group py-2">
            <li class="admin-sidebar-heading text-sm font-bold py-2">Dashboard</li>
            <li class="{{Route::is('admin.dashboard') ? 'admin-sidebar--active' : '' }} admin-sidebar-subheading text-sm py-2"><a href="{{ route('admin') }}"><i
                        class="fa-solid fa-house"></i><span class="list-text">Home</span></a></li>
        </div>
        <div class="admin-sidebar-item-group py-4">
            <li class="admin-sidebar-heading text-sm font-bold py-2">System Management</li>

            <li class="{{Route::is('admin.showUser') ? 'admin-sidebar--active' : '' }} admin-sidebar-subheading text-sm py-2"><a href="{{ route('admin.showUser') }}"><i
                        class="fa-solid fa-users"></i><span class="list-text">User</span></a></li>
            <li class="{{Route::is('admin.showBook') ? 'admin-sidebar--active' : ''}} admin-sidebar-subheading text-sm py-2"><a href="{{ route('admin.showBook') }}"><i
                        class="fa-solid fa-book"></i><span class="list-text">Catalog</span></a></li>
            <li class="{{Route::is('admin.showReservation') ? 'admin-sidebar--active' : ''}}admin-sidebar-subheading text-sm py-2"><a href="{{route('admin.showReservation')}}"><i
                        class="fa-solid fa-people-carry-box"></i><span class="list-text">Reservation</span></a>
            </li>
            <li class="admin-sidebar-subheading text-sm py-2"><a href=""><i
                        class="fa-solid fa-chart-gantt"></i><span class="list-text">Circulation</span></a></li>
            <li class="admin-sidebar-subheading text-sm py-2"><a href=""><i
                        class="fa-solid fa-table-list"></i><span class="list-text">Inventory</span></a></li>
        </div>
        <div class="admin-sidebar-item-group py-4">
            <li class="admin-sidebar-heading text-sm font-bold py-2">Resource Management</li>
            <li class="admin-sidebar-subheading text-sm py-2"><a href=""><i class="fa-solid fa-cloud-arrow-down"></i><span class="list-text">Downloads</span></a></li>
        </div>

        <div class="admin-sidebar-item-group danger-zone py-4">
            <li class="admin-sidebar-heading text-sm font-bold py-2">Danger zone</li>
            <li class="admin-sidebar-subheading text-sm py-2"><a href=""><i class="fa-solid fa-box-archive"></i><span class="list-text">Archive</span></a></li>
        </div>
        
    </ul>
</div>
