<nav class="navbar flex justify-around items-center" style="background-color: #fff;">
    <div class="navbar__list-item-container1-auth flex justify-between items-center md:justify-around">
        <ul class="navbar__nav-items-auth flex justify-around items-center">
            <div>
                <img class="logo sm:justify-center" src="/pictures/book-logo.png" width="75" height="75"
                    alt="RMS">
            </div>
            <li class="md:hidden"> 
                <i class="eye-icon-auth fa-regular fa-eye text-black md:hidden"></i>
            </li>
            <div class="nav-links-desktop hidden md:flex">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('user.catalog') }}">Catalog</a></li>
                <li><a href="">Resources</a></li>
                <li><a href="">Forums</a></li>
            </div>
            <div class="flex justify-center navbar__nav-profile-image">
                <img class="navbar__nav-image"
                    src="https://static.vecteezy.com/system/resources/thumbnails/002/002/403/small/man-with-beard-avatar-character-isolated-icon-free-vector.jpg"
                    width="40px" height="40px" alt="">
            </div>
        </ul>
    </div>
</nav>

<div class="navbar__nav-links-phone hidden">
    <li class="navbar__nav-links-list-phone"><a class="navbar__nav-links-anchor-phone"
            href="{{ route('home') }}">Home</a></li>
    <li class="navbar__nav-links-list-phone"><a class="navbar__nav-links-anchor-phone"
            href="{{ route('user.catalog') }}">Catalog</a></li>
    <li class="navbar__nav-links-list-phone"><a class="navbar__nav-links-anchor-phone" href="">Resources</a></li>
    <li class="navbar__nav-links-list-phone"><a class="navbar__nav-links-anchor-phone" href="">Forums</a></li>
</div>

<div class="navbar__list-hidden-container-auth hidden">
    <ul class="text-center">
        <li class="pt-4">
            <a href="" class="text-black"> <i class="fa-solid fa-gear"></i>
                Setting</a>
        </li>
        <li class="pt-3">
            <form action="/logout" method="POST">
                @csrf
                <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 border border-red-700 rounded"
                    role="alert"><i class="fa-solid fa-power-off pr-2"></i>Logout</button>
            </form>
        </li>
    </ul>
</div>
<script>
    const navImage = document.querySelector('.navbar__nav-image')
    const navProfile = document.querySelectorAll('.navbar__list-hidden-container-auth')
    const navLinkPhoneAuth = document.querySelectorAll('.nav-links-phone')
    const eyeIconPhoneAuth = document.querySelectorAll('.eye-icon-auth')

    eyeIconPhoneAuth.forEach((eyeIconPhoneAuthEl) => {
        eyeIconPhoneAuthEl.addEventListener('click', (event) => {
            navLinkPhoneAuth.forEach((navLinkPhoneAuthEl) => {
                navLinkPhoneAuthEl.classList.toggle('hidden')

            })

        })
    })

    navProfile.forEach((navProfileEl) => {
        navImage.addEventListener('click', (event) => {
            navProfileEl.classList.toggle('hidden')
        })
    })
</script>
