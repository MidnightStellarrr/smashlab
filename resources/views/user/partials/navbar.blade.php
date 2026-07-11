<nav class="navbar">

    <div class="nav-left">
        <img src="images/logo.png" class="logo" alt="Logo">
        <ul class="nav-links">
            <li><a href="{{ url('/book_now') }}">Book Now</a></li>
            <li><a href="{{ url('/classes') }}">Classes</a></li>
            <li><a href="{{ url('/shop') }}">Shop</a></li>
            <li><a href="{{ url('/about_us') }}">About Us</a></li>
            <li><a href="{{ url('/contact') }}">Contact</a></li>
        </ul>
    </div>

    <div class="nav-right">
        <button class="theme-btn">
            <i class="fa-solid fa-moon"></i>
        </button>

        <button class="login-btn">
            Login
        </button>

        <button class="signup-btn">
            Sign up
        </button>
    </div>
</nav>