<nav class="navbar flex justify-between items-center" id="navbar-guest">
    <div class="navbar__list-item-container1-guest flex justify-between items-center md:justify-around">
        <img class="logo sm:justify-center" src="/pictures/book-logo.png" width="75" height="75" alt="RMS">
        <a href="javascript:void(0);" class="hamburger-icon">
            <i class="fa-regular fa-eye"></i>
         </a>
        <ul class="navbar__nav-items-guest">
            <li><a href="{{ route('guest.browse') }}">Browse Books</a></li>
            <li><a href="/about">Events and Programs</a></li>
            <li><a href="/services">Policies and Guidelines</a></li>
            <li><a href="/contact">Contact</a></li>
        </ul>
    </div>
    <div class="navbar__list-item-container2-guest">
        <ul class="navbar__nav-items-guest flex">
            <li>
                <a class="btn-login" href="{{ route('login') }}"><i class="fa-solid fa-right-to-bracket"></i> Sign
                    In</a>
            </li>
            <li>
                <a class="btn-register" href="{{ route('register') }}"><i class="fa-solid fa-user-plus"></i> Sign Up</a>
            </li>
        </ul>
    </div>
</nav>

<div class="nav-list-phone hidden">
    <ul class="navbar__nav-items-guest text-center py-4">
        <li class="py-2"><a href="{{ route('guest.browse') }}">Browse Books</a></li>
        <li class="py-2"><a href="/about">Events and Programs</a></li>
        <li class="py-2"><a href="/services">Policies and Guidelines</a></li>
        <li class="py-2"><a href="/contact">Contact</a></li>
    </ul>
</div>

<script>

const navContainer = document.querySelectorAll('.nav-list-phone')
const hamburgerIcon = document.querySelectorAll('.hamburger-icon')

hamburgerIcon.forEach((hamburgerIconEl) => {
    hamburgerIconEl.addEventListener('click', (e) => {
        navContainer.forEach((navContainerEl) => {
            navContainerEl.classList.toggle('hidden')
        })
    })
    
})

const navbarGuest = document.getElementById('navbar-guest')
let scroll = 0

window.addEventListener('scroll', (e) => {
    scroll = window.scrollY
    if(scroll > 0){
        navbarGuest.classList.add('navbar-sticky')
    }else{
        navbarGuest.classList.remove('navbar-sticky')
    }
})
</script>


