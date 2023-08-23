<nav class="navbar flex justify-between items-center">
            <div class="list-item-container1 flex justify-between items-center md:justify-around">
                <img class="logo sm:justify-center" src="/pictures/book-logo.png" width="75" height="75" alt="RMS">
                <a href="javascript:void(0);" class="hamburger-icon" onclick="myFunction()">
                    <i class="fa fa-bars"></i>
                </a>
                <ul class="nav-items">
                    <li><a href="/">Browse Books</a></li>
                    <li><a href="/about">Events and Programs</a></li>
                    <li><a href="/services">Policies and Guidelines</a></li>
                    <li><a href="/contact">Contact</a></li>
                </ul>
            </div>
            <div class="list-item-container2">
                <ul class="nav-items flex">
                    <li>
                        <a class="btn-login" href="{{ route('login') }}"><i class="fa-solid fa-right-to-bracket"></i> Sign In</a>
                    </li>
                    <li>
                        <a class="btn-register" href="{{ route('register') }}"><i class="fa-solid fa-user-plus"></i> Sign Up</a>
                    </li>
                </ul>
            </div>
        </nav>