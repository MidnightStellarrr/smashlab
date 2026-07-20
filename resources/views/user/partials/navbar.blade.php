<!-- navbar.blade.php -->

<!-- navbar css-->
<link rel="stylesheet" href="{{ asset('css/user/partials/navbar.css') }}">

<nav class="navbar">

    <div class="nav-left">

        <img src="{{ asset('images/logo.png') }}" class="logo" alt="Logo">

        <ul class="nav-links">
            <li><a href="{{ url('/') }}">Home</a></li>
            <li><a href="{{ url('/book_now') }}">Book Now</a></li>
            <li><a href="{{ url('/classes') }}">Classes</a></li>
            <li><a href="{{ url('/shop') }}">Shop</a></li>
            <li><a href="{{ url('/about_us') }}">About Us</a></li>
            <li><a href="{{ url('/contact') }}">Contact</a></li>
        </ul>

    </div>

    <div class="nav-right">

        

        @auth
            <!-- ── When Logged In ── -->
            <a href="{{ url('/cart') }}" class="cart-btn">
                <i class="fa-solid fa-cart-shopping"></i>
                <span class="cart-count">0</span>
            </a>

            <a href="{{ route('dashboard') }}" class="dashboard-btn">
                <i class="fa-solid fa-user"></i>
            </a>

            <form method="POST" action="{{ route('logout') }}" style="display:inline;">
                @csrf
                <button type="submit" class="logout-btn">
                    <i class="fa-solid fa-sign-out-alt"></i> Logout
                </button>
            </form>
        @else
            <!-- ── When Logged Out ── -->
            <a href="{{ route('login') }}" class="login-btn">
                Login
            </a>

            <a href="{{ route('register') }}" class="signup-btn">
                Sign up
            </a>
        @endauth

    </div>
</nav>