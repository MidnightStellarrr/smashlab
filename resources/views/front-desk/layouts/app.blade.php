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
<body class="bg-gray-100 dark:bg-[#111827] transition-colors duration-300">

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
        <header class="topbar" id="topbar">
            <div class="topbar-left">
                <button class="menu-toggle" id="menuToggle">
                    <i class="fa-solid fa-bars"></i>
                </button>
                <h1>@yield('header', 'Dashboard')</h1>
            </div>
            <div class="topbar-right">
                <span class="datetime" id="currentDateTime"></span>
                <div class="notification-wrapper">
                    <button class="notification-btn" id="notificationToggle">
                        <i class="fa-regular fa-bell"></i>
                        <span class="dot" id="notificationDot"></span>
                    </button>
                    <!-- ── Notification Dropdown ── -->
                    <div class="notification-dropdown" id="notificationDropdown">
                        <div class="notification-header">
                            <div>
                                <h3>Notifications</h3>
                                <span class="notification-subtext">You have 6 new notifications</span>
                            </div>
                            <button class="mark-all-btn" id="markAllBtn">Mark all as read</button>
                        </div>

                        <div class="notification-body" id="notificationBody">
                            <!-- Notification Item 1 -->
                            <div class="notification-item unread">
                                <div class="notification-icon blue">
                                    <i class="fa-solid fa-calendar-check"></i>
                                </div>
                                <div class="notification-content">
                                    <p class="notification-text"><strong>New Booking</strong> - Court 2 reserved by John Doe for today at 2:00 PM</p>
                                    <span class="notification-time">2 min ago</span>
                                </div>
                                <button class="notification-dismiss" data-id="1">
                                    <i class="fa-solid fa-xmark"></i>
                                </button>
                            </div>

                            <!-- Notification Item 2 -->
                            <div class="notification-item unread">
                                <div class="notification-icon green">
                                    <i class="fa-solid fa-user-check"></i>
                                </div>
                                <div class="notification-content">
                                    <p class="notification-text"><strong>Check-in</strong> - Maria Santos checked in for Beginner Class on Court 1</p>
                                    <span class="notification-time">15 min ago</span>
                                </div>
                                <button class="notification-dismiss" data-id="2">
                                    <i class="fa-solid fa-xmark"></i>
                                </button>
                            </div>

                            <!-- Notification Item 3 -->
                            <div class="notification-item unread">
                                <div class="notification-icon orange">
                                    <i class="fa-solid fa-clock"></i>
                                </div>
                                <div class="notification-content">
                                    <p class="notification-text"><strong>Rental Due</strong> - Racket #3 rental is due in 30 minutes</p>
                                    <span class="notification-time">45 min ago</span>
                                </div>
                                <button class="notification-dismiss" data-id="3">
                                    <i class="fa-solid fa-xmark"></i>
                                </button>
                            </div>

                            <!-- Notification Item 4 -->
                            <div class="notification-item">
                                <div class="notification-icon red">
                                    <i class="fa-solid fa-circle-exclamation"></i>
                                </div>
                                <div class="notification-content">
                                    <p class="notification-text"><strong>Alert</strong> - Court 4 maintenance scheduled for tomorrow</p>
                                    <span class="notification-time">1 hour ago</span>
                                </div>
                                <button class="notification-dismiss" data-id="4">
                                    <i class="fa-solid fa-xmark"></i>
                                </button>
                            </div>

                            <!-- Notification Item 5 -->
                            <div class="notification-item">
                                <div class="notification-icon purple">
                                    <i class="fa-solid fa-chalkboard-user"></i>
                                </div>
                                <div class="notification-content">
                                    <p class="notification-text"><strong>Class Reminder</strong> - Intermediate Class starts in 2 hours on Court 3</p>
                                    <span class="notification-time">2 hours ago</span>
                                </div>
                                <button class="notification-dismiss" data-id="5">
                                    <i class="fa-solid fa-xmark"></i>
                                </button>
                            </div>

                            <!-- Notification Item 6 -->
                            <div class="notification-item">
                                <div class="notification-icon teal">
                                    <i class="fa-solid fa-store"></i>
                                </div>
                                <div class="notification-content">
                                    <p class="notification-text"><strong>Shop Order</strong> - New order #ORD-2026-042 placed for premium racket</p>
                                    <span class="notification-time">3 hours ago</span>
                                </div>
                                <button class="notification-dismiss" data-id="6">
                                    <i class="fa-solid fa-xmark"></i>
                                </button>
                            </div>
                        </div>

                        <div class="notification-footer">
                            <a href="#" class="view-all-link">View all notifications</a>
                        </div>
                    </div>
                </div>
                <!-- Dark Mode Toggle -->
                <button class="theme-toggle" id="darkModeToggle">
                    <i class="fa-solid fa-moon" id="darkModeIcon"></i>
                </button>
            </div>
        </header>

        <!-- ── Page Content ── -->
        <div class="page-content-wrapper" id="pageContentWrapper">
            <div class="page-content" id="pageContent">
                @yield('content')
            </div>
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

        if (document.documentElement.classList.contains('dark')) {
            icon.className = 'fa-solid fa-sun';
        }

        toggleBtn.addEventListener('click', function() {
            const isDark = document.documentElement.classList.toggle('dark');
            localStorage.setItem('smashlab-theme', isDark ? 'dark' : 'light');
            icon.className = isDark ? 'fa-solid fa-sun' : 'fa-solid fa-moon';
        });

        // ── Notification Dropdown ──
        const notificationToggle = document.getElementById('notificationToggle');
        const notificationDropdown = document.getElementById('notificationDropdown');
        const pageContentWrapper = document.getElementById('pageContentWrapper');
        let isNotificationOpen = false;

        function updateNotificationCount() {
            const unread = document.querySelectorAll('.notification-item.unread').length;
            const countEl = document.getElementById('notificationCount');
            const dot = document.getElementById('notificationDot');
            
            if (countEl) countEl.textContent = unread;
            
            if (unread > 0) {
                dot.style.display = 'block';
            } else {
                dot.style.display = 'none';
            }
        }

        function toggleNotification() {
            isNotificationOpen = !isNotificationOpen;
            notificationDropdown.classList.toggle('active', isNotificationOpen);
            pageContentWrapper.classList.toggle('blurred', isNotificationOpen);
            
            if (isNotificationOpen) {
                document.body.style.overflow = 'hidden';
            } else {
                document.body.style.overflow = '';
            }
        }

        notificationToggle?.addEventListener('click', function(e) {
            e.stopPropagation();
            toggleNotification();
        });

        // Close when clicking outside
        document.addEventListener('click', function(e) {
            const wrapper = document.querySelector('.notification-wrapper');
            if (isNotificationOpen && wrapper && !wrapper.contains(e.target)) {
                toggleNotification();
            }
        });

        // Close with Escape key
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape' && isNotificationOpen) {
                toggleNotification();
            }
        });

        // ── Mark All as Read ──
        document.getElementById('markAllBtn')?.addEventListener('click', function() {
            document.querySelectorAll('.notification-item').forEach(item => {
                item.classList.remove('unread');
            });
            updateNotificationCount();
            this.textContent = '✓ All marked as read';
            setTimeout(() => {
                this.textContent = 'Mark all as read';
            }, 2000);
        });

        // ── Dismiss Individual Notification ──
        document.querySelectorAll('.notification-dismiss').forEach(btn => {
            btn.addEventListener('click', function(e) {
                e.stopPropagation();
                const item = this.closest('.notification-item');
                item.style.animation = 'slideOut 0.3s ease forwards';
                setTimeout(() => {
                    item.remove();
                    updateNotificationCount();
                    const remaining = document.querySelectorAll('.notification-item').length;
                    if (remaining === 0) {
                        document.getElementById('notificationBody').innerHTML = `
                            <div class="empty-notifications">
                                <i class="fa-regular fa-bell-slash"></i>
                                <p>No notifications</p>
                                <span>You're all caught up!</span>
                            </div>
                        `;
                    }
                }, 300);
            });
        });

        // Initialize count
        updateNotificationCount();
    </script>

    @stack('scripts')
</body>
</html>