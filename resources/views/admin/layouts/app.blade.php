<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Panel')</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <style>
        /* Basic admin layout styles */
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: 'Poppins', sans-serif; background: #f3f4f6; }
        .admin-wrapper { display: flex; min-height: 100vh; }
        .sidebar { width: 250px; background: #111827; padding: 24px; color: white; }
        .main-content { flex: 1; padding: 24px; }
        .stats-grid { display: grid; grid-template-columns: repeat(4, 1fr); gap: 20px; margin-bottom: 24px; }
        .stat-card { background: white; border-radius: 16px; padding: 20px 24px; border: 1px solid #e5e7eb; }
        .stat-card .stat-header { display: flex; justify-content: space-between; align-items: flex-start; }
        .stat-card .stat-label { color: #6b7280; font-size: 13px; text-transform: uppercase; }
        .stat-card .stat-value { font-size: 30px; font-weight: 700; color: #111827; }
        .stat-card .stat-icon { width: 44px; height: 44px; border-radius: 50%; border: 2px solid #e5e7eb; display: flex; align-items: center; justify-content: center; }
        .stat-card.blue .stat-icon { border-color: #1f47d8; color: #1f47d8; }
        .stat-card.green .stat-icon { border-color: #22c55e; color: #22c55e; }
        .stat-card.yellow .stat-icon { border-color: #f59e0b; color: #f59e0b; }
        .stat-card.red .stat-icon { border-color: #ef4444; color: #ef4444; }
    </style>
</head>
<body>
    <div class="admin-wrapper">
        <div class="sidebar">
            <h2 style="margin-bottom: 24px;">Admin Panel</h2>
            <nav>
                <a href="{{ route('admin.dashboard') }}" style="display: block; padding: 10px; color: #9ca3af; text-decoration: none; border-radius: 8px; margin-bottom: 4px;">Dashboard</a>
                <a href="#" style="display: block; padding: 10px; color: #9ca3af; text-decoration: none; border-radius: 8px; margin-bottom: 4px;">Users</a>
                <a href="#" style="display: block; padding: 10px; color: #9ca3af; text-decoration: none; border-radius: 8px; margin-bottom: 4px;">Settings</a>
                <form method="POST" action="{{ route('admin.logout') }}" style="margin-top: 20px;">
                    @csrf
                    <button type="submit" style="width: 100%; padding: 10px; background: #dc2626; color: white; border: none; border-radius: 8px; cursor: pointer;">Logout</button>
                </form>
            </nav>
        </div>
        <div class="main-content">
            @yield('content')
        </div>
    </div>
</body>
</html>