<nav class="navbar flex justify-between items-center" style="background-color: #fff;">
    <div class="list-item-container1 flex justify-between items-center md:justify-around">
        <img class="logo sm:justify-center" src="/pictures/book-logo.png" width="75" height="75" alt="RMS">
        <a href="javascript:void(0);" class="hamburger-icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
        </a>
        <ul class="nav-items-authenticated">
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a href="{{ route('user.catalog') }}">Catalog</a></li>
            <li><a href="">Resources</a></li>
            <li><a href="">Forums</a></li>
        </ul>
    </div>
    <div class="list-item-container2-authenticated">
        <ul class="nav-items flex justify-around items-center">
            <li>
                <i class="fa-solid fa-magnifying-glass fa-xl"></i>
            </li>
            <li>
                <i class="fa-solid fa-bell fa-xl" style="cursor: pointer;"></i>
            </li>

            <li class="nav-profile-image">
                <img class="nav-image"
                    src="https://static.vecteezy.com/system/resources/thumbnails/002/002/403/small/man-with-beard-avatar-character-isolated-icon-free-vector.jpg"
                    width="40px" height="40px" alt="">
            </li>
        </ul>
        <div class="profile-contents">
            <ul class="text-center">
                <li class="pt-4">
                    <a href="" class="text-black"> <i class="fa-solid fa-gear"></i>
                        Setting</a>
                </li>
                <li class="pt-3">
                    <form action="/logout" method="POST">
                        @csrf
                        <button
                            class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 border border-red-700 rounded"
                            role="alert"><i class="fa-solid fa-power-off pr-2"></i>Logout</button>
                    </form>
                </li>
            </ul>
        </div>
    </div>

    <script>
        const navImage = document.querySelector('.nav-image')
        const navProfile = document.querySelector('.profile-contents')

        navImage.addEventListener('click', (event) => {

            if (navProfile.style.display === 'none') {
                navProfile.style.display = 'block';
            } else {
                navProfile.style.display = 'none';
            }
        })
    </script>
</nav>
