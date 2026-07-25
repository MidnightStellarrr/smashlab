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
    <link rel="stylesheet" href="{{ asset('css/front-desk/layout.css') }}">

    <!-- Dark Mode Initialization -->
    <script>
        (function() {
            const storedTheme = localStorage.getItem('smashlab-theme');
            if (storedTheme === 'dark') {
                document.documentElement.classList.add('dark');
            } else if (storedTheme === 'light') {
                document.documentElement.classList.remove('dark');
            } else {
                const prefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
                if (prefersDark) {
                    document.documentElement.classList.add('dark');
                }
            }
        })();
    </script>

    @stack('styles')
</head>
<body class="bg-gray-100 dark:bg-black transition-colors duration-300">

    <!-- ── Sidebar ── -->
    <aside class="sidebar" id="sidebar">
        <div class="sidebar-logo">
            <div class="flex items-center border-b border-white/10 px-4 py-4">
                <a href="/" class="flex items-center gap-2">
                    <img src="{{ asset('images/logo.png') }}" class="h-10 w-auto" alt="SmashLab">
                </a>
                <span class="text-xl font-bold text-white ml-2">SmashLab</span>
            </div>
            <span class="subtitle" style="display: block; margin-top: 4px; font-size: 11px; color: rgba(255,255,255,0.4); text-align: center;">Front Desk</span>
        </div>

        <nav class="sidebar-menu">
            <div class="menu-label">Main</div>
            <a href="{{ route('frontdesk.dashboard') }}" class="flex items-center gap-3 rounded-lg px-3 py-2 text-sm font-medium transition {{ request()->routeIs('frontdesk.dashboard') ? 'active' : '' }}">
                <i class="fa-solid fa-chart-pie w-5 text-center"></i> Dashboard
            </a>
            <a href="{{ route('frontdesk.bookings') }}" class="flex items-center gap-3 rounded-lg px-3 py-2 text-sm font-medium transition {{ request()->routeIs('frontdesk.bookings') ? 'active' : '' }}">
                <i class="fa-solid fa-calendar-check w-5 text-center"></i> Bookings
                <span class="badge">12</span>
            </a>
            <a href="{{ route('frontdesk.customers') }}" class="flex items-center gap-3 rounded-lg px-3 py-2 text-sm font-medium transition {{ request()->routeIs('frontdesk.customers') ? 'active' : '' }}">
                <i class="fa-solid fa-users w-5 text-center"></i> Customers
            </a>
            <a href="{{ route('frontdesk.classes') }}" class="flex items-center gap-3 rounded-lg px-3 py-2 text-sm font-medium transition {{ request()->routeIs('frontdesk.classes') ? 'active' : '' }}">
                <i class="fa-solid fa-chalkboard-user w-5 text-center"></i> Classes
                <span class="badge">3</span>
            </a>
            <a href="{{ route('frontdesk.shop') }}" class="flex items-center gap-3 rounded-lg px-3 py-2 text-sm font-medium transition {{ request()->routeIs('frontdesk.shop') ? 'active' : '' }}">
                <i class="fa-solid fa-store w-5 text-center"></i> Shop
            </a>
        </nav>

        <div class="sidebar-footer">
            <div class="user-info">
                <div class="flex h-8 w-8 items-center justify-center rounded-full bg-white/10 text-white text-sm">
                    {{ auth()->guard('frontdesk')->user()->name[0] ?? 'A' }}
                </div>
                <div>
                    <div class="user-name">{{ auth()->guard('frontdesk')->user()->name ?? 'Admin' }}</div>
                    <div class="user-role">Front Desk Staff</div>
                </div>
            </div>
            <form method="POST" action="{{ route('frontdesk.logout') }}">
                @csrf
                <button type="submit" class="mt-2 flex w-full items-center justify-center gap-2 rounded-lg bg-white/10 px-3 py-1.5 text-sm font-medium text-white transition hover:bg-white/20">
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
                <!-- Dark Mode Toggle -->
                <button class="theme-toggle" id="darkModeToggle">
                    <i class="fa-solid fa-moon" id="darkModeIcon"></i>
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

        // ── Dark Mode Toggle ──
        const toggleBtn = document.getElementById('darkModeToggle');
        const icon = document.getElementById('darkModeIcon');

        // Check initial state
        if (document.documentElement.classList.contains('dark')) {
            icon.className = 'fa-solid fa-sun';
        }

        toggleBtn.addEventListener('click', function() {
            const isDark = document.documentElement.classList.toggle('dark');
            localStorage.setItem('smashlab-theme', isDark ? 'dark' : 'light');
            icon.className = isDark ? 'fa-solid fa-sun' : 'fa-solid fa-moon';
        });
    </script>

    @stack('scripts')
</body>
</html>