<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Front Desk - SmashLab')</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

    <!-- Front Desk Layout CSS -->
    <link rel="stylesheet" href="{{ asset('css/frontdesk/layout.css') }}">

    @stack('styles')
</head>
<body>

    <!-- ── Sidebar ── -->
    <aside class="sidebar" id="sidebar">
        <div class="sidebar-logo">
            <img src="{{ asset('images/logo.png') }}" alt="SmashLab">
            <span>SmashLab</span>
            <span class="subtitle">Front Desk</span>
        </div>

        <nav class="sidebar-menu">
            <div class="menu-label">Main</div>
            <a href="{{ route('frontdesk.dashboard') }}" class="{{ request()->routeIs('frontdesk.dashboard') ? 'active' : '' }}">
                <i class="fa-solid fa-chart-pie"></i> Dashboard
            </a>
            <a href="{{ route('frontdesk.bookings') }}" class="{{ request()->routeIs('frontdesk.bookings') ? 'active' : '' }}">
                <i class="fa-solid fa-calendar-check"></i> Bookings
                <span class="badge">12</span>
            </a>
            <a href="{{ route('frontdesk.customers') }}" class="{{ request()->routeIs('frontdesk.customers') ? 'active' : '' }}">
                <i class="fa-solid fa-users"></i> Customers
            </a>
            <a href="{{ route('frontdesk.classes') }}" class="{{ request()->routeIs('frontdesk.classes') ? 'active' : '' }}">
                <i class="fa-solid fa-chalkboard-user"></i> Classes
                <span class="badge">3</span>
            </a>
            <a href="{{ route('frontdesk.shop') }}" class="{{ request()->routeIs('frontdesk.shop') ? 'active' : '' }}">
                <i class="fa-solid fa-store"></i> Shop
            </a>
        </nav>

        <div class="sidebar-footer">
            <div class="user-info">
                <div class="avatar">{{ auth()->guard('frontdesk')->user()->name[0] ?? 'A' }}</div>
                <div>
                    <div class="user-name">{{ auth()->guard('frontdesk')->user()->name ?? 'Admin' }}</div>
                    <div class="user-role">Front Desk Staff</div>
                </div>
            </div>
            <form method="POST" action="{{ route('frontdesk.logout') }}">
                @csrf
                <button type="submit" class="logout-btn">
                    <i class="fa-solid fa-right-from-bracket"></i> Logout
                </button>
            </form>
        </div>
    </aside>

    <!-- ── Main Content ── -->
    <div class="main-content">

        <!-- ── Top Bar ── -->
        <header class="topbar">
            <div class="topbar-left">
                <button class="menu-toggle" id="menuToggle">
                    <i class="fa-solid fa-bars"></i>
                </button>
                <h1>@yield('header', 'Dashboard')</h1>
            </div>
            <div class="topbar-right">
                <span class="datetime" id="currentDateTime"></span>
                <button class="notification-btn">
                    <i class="fa-regular fa-bell"></i>
                    <span class="dot"></span>
                </button>
            </div>
        </header>

        <!-- ── Page Content ── -->
        <div class="page-content">
            @yield('content')
        </div>

    </div>

    <script>
        // ── Mobile Menu Toggle ──
        document.getElementById('menuToggle')?.addEventListener('click', function() {
            document.getElementById('sidebar').classList.toggle('open');
        });

        // ── Current DateTime ──
        function updateDateTime() {
            const now = new Date();
            const options = { 
                weekday: 'short', 
                year: 'numeric', 
                month: 'short', 
                day: 'numeric',
                hour: '2-digit',
                minute: '2-digit',
                second: '2-digit'
            };
            document.getElementById('currentDateTime').textContent = now.toLocaleDateString('en-US', options);
        }
        updateDateTime();
        setInterval(updateDateTime, 1000);
    </script>

    @stack('scripts')
</body>
</html>