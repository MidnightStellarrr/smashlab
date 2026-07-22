<!-- navbar.blade.php -->

<!-- navbar css-->
<link rel="stylesheet" href="{{ asset('css/user/partials/navbar.css') }}">

<nav class="navbar" id="mainNavbar">

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

        <!-- Dark Mode Toggle -->
        <button id="darkModeToggle" class="theme-btn" aria-label="Toggle dark mode">
            <i class="fa-solid fa-moon"></i>
        </button>

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

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // ── Dark Mode Toggle ──
        const toggleBtn = document.getElementById('darkModeToggle');
        const icon = toggleBtn.querySelector('i');

        // Check initial state
        if (document.documentElement.classList.contains('dark')) {
            icon.className = 'fa-solid fa-sun';
        }

        toggleBtn.addEventListener('click', function() {
            const isDark = document.documentElement.classList.toggle('dark');
            localStorage.setItem('smashlab-theme', isDark ? 'dark' : 'light');
            icon.className = isDark ? 'fa-solid fa-sun' : 'fa-solid fa-moon';
        });

        // ── Sticky Navbar on Scroll ──
        const navbar = document.getElementById('mainNavbar');
        let lastScrollY = window.scrollY;

        function handleScroll() {
            const currentScrollY = window.scrollY;

            // Add/remove scrolled class based on scroll position
            if (currentScrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }

            // Hide navbar on scroll down, show on scroll up
            if (currentScrollY > lastScrollY && currentScrollY > 100) {
                navbar.classList.add('hidden');
            } else {
                navbar.classList.remove('hidden');
            }

            lastScrollY = currentScrollY;
        }

        // Throttle scroll events for better performance
        let ticking = false;
        window.addEventListener('scroll', function() {
            if (!ticking) {
                window.requestAnimationFrame(function() {
                    handleScroll();
                    ticking = false;
                });
                ticking = true;
            }
        });

        // Initial check
        handleScroll();
    });
</script>