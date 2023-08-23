<nav class="navbar flex justify-between items-center" style="background-color: #fff;">
    <div class="list-item-container1 flex justify-between items-center md:justify-around">
        <img class="logo sm:justify-center" src="/pictures/book-logo.png" width="75" height="75" alt="RMS">
        <a href="javascript:void(0);" class="hamburger-icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
        </a>
        <ul class="nav-items-authenticated">
            <li><a href="{{ route('home') }}">My home</a></li>
            <li><a href="">Catalog</a></li>
            <li><a href="">Resources</a></li>
            <li><a href="">Forums</a></li>
        </ul>
    </div>
    <div class="list-item-container2-authenticated">
        <ul class="nav-items flex justify-between items-center">
            <li>
                <i class="fa-solid fa-magnifying-glass fa-xl"></i>
            </li>
            <li>
            <li>
                <i class="fa-solid fa-bell fa-xl" style="cursor: pointer;"></i>
            </li>
            </li>
            <li>
                <form action="/logout" method="POST">
                    @csrf
                    <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 border border-red-700 rounded" role="alert"><i class="fa-solid fa-power-off pr-2"></i>Logout</button>
                </form>
            </li>

        </ul>
    </div>
</nav>