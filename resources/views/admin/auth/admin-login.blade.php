<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login - SmashLab</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body {
            font-family: 'Poppins', sans-serif;
            background: #0a1628;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            background: linear-gradient(180deg, #0a1628 0%, #1a2a4a 100%);
        }
        .login-container {
            width: 100%;
            max-width: 420px;
            padding: 20px;
        }
        .login-card {
            background: #111827;
            border-radius: 24px;
            padding: 40px;
            border: 1px solid #2a3a5a;
            box-shadow: 0 20px 60px rgba(0,0,0,0.5);
        }
        .login-logo {
            text-align: center;
            margin-bottom: 30px;
        }
        .login-logo img {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            margin-bottom: 12px;
            border: 3px solid #1f47d8;
        }
        .login-logo h1 {
            color: #ffffff;
            font-size: 22px;
            font-weight: 700;
        }
        .login-logo p {
            color: #9ca3af;
            font-size: 14px;
        }
        .login-badge {
            display: inline-block;
            background: #1f47d8;
            color: white;
            padding: 4px 16px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 600;
            margin-top: 8px;
        }
        .alert {
            padding: 12px 16px;
            border-radius: 8px;
            margin-bottom: 16px;
            font-size: 14px;
            display: flex;
            align-items: center;
            gap: 8px;
        }
        .alert-danger {
            background: #7f1d1d;
            color: #f87171;
        }
        .alert-success {
            background: #065f46;
            color: #34d399;
        }
        .form-group {
            margin-bottom: 16px;
        }
        .form-group label {
            display: block;
            color: #d1d5db;
            font-size: 13px;
            font-weight: 600;
            margin-bottom: 4px;
        }
        .input-wrapper {
            position: relative;
        }
        .input-wrapper i {
            position: absolute;
            left: 14px;
            top: 50%;
            transform: translateY(-50%);
            color: #6b7280;
        }
        .form-input {
            width: 100%;
            padding: 12px 14px 12px 44px;
            background: #0a1628;
            border: 1px solid #2a3a5a;
            border-radius: 8px;
            color: #d1d5db;
            font-size: 14px;
            font-family: 'Poppins', sans-serif;
            outline: none;
            transition: all 0.3s ease;
        }
        .form-input:focus {
            border-color: #4a7a9c;
            box-shadow: 0 0 0 4px rgba(74, 122, 156, 0.15);
        }
        .password-wrapper {
            position: relative;
        }
        .password-wrapper i {
            position: absolute;
            left: 14px;
            top: 50%;
            transform: translateY(-50%);
            color: #6b7280;
        }
        .password-input {
            width: 100%;
            padding: 12px 44px 12px 44px;
            background: #0a1628;
            border: 1px solid #2a3a5a;
            border-radius: 8px;
            color: #d1d5db;
            font-size: 14px;
            font-family: 'Poppins', sans-serif;
            outline: none;
            transition: all 0.3s ease;
        }
        .password-input:focus {
            border-color: #4a7a9c;
            box-shadow: 0 0 0 4px rgba(74, 122, 156, 0.15);
        }
        .toggle-password {
            position: absolute;
            right: 14px;
            top: 50%;
            transform: translateY(-50%);
            background: none;
            border: none;
            color: #6b7280;
            cursor: pointer;
            font-size: 18px;
        }
        .toggle-password:hover {
            color: #d1d5db;
        }
        .remember-group {
            display: flex;
            align-items: center;
            gap: 8px;
            margin-bottom: 16px;
        }
        .remember-group input {
            width: 18px;
            height: 18px;
            accent-color: #1f47d8;
            cursor: pointer;
        }
        .remember-group label {
            color: #9ca3af;
            font-size: 14px;
            cursor: pointer;
        }
        .login-btn {
            width: 100%;
            padding: 12px;
            background: #1f47d8;
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            font-weight: 600;
            font-family: 'Poppins', sans-serif;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        .login-btn:hover {
            background: #2a5ae8;
            transform: translateY(-2px);
            box-shadow: 0 4px 15px rgba(31, 71, 216, 0.3);
        }
        .login-footer {
            text-align: center;
            margin-top: 20px;
            color: #6b7280;
            font-size: 13px;
        }
        .login-footer i {
            color: #4a7a9c;
        }
        .login-footer span {
            color: #4a7a9c;
        }
        .switch-link {
            text-align: center;
            margin-top: 16px;
            font-size: 14px;
            color: #9ca3af;
        }
        .switch-link a {
            color: #4a7a9c;
            text-decoration: none;
            font-weight: 600;
        }
        .switch-link a:hover {
            color: #60a5fa;
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <div class="login-container">
        <div class="login-card">

            <!-- Logo -->
            <div class="login-logo">
                <img src="{{ asset('images/logo.jpg') }}" alt="SmashLab">
                <h1>ADMIN ACCESS</h1>
                <p>System Administrator Login</p>
                <span class="login-badge"><i class="fa-solid fa-shield-halved"></i> Admin Only</span>
            </div>

            <!-- Error Messages -->
            @if ($errors->any())
                <div class="alert alert-danger">
                    <i class="fa-solid fa-circle-exclamation"></i>
                    {{ $errors->first() }}
                </div>
            @endif

            @if (session('success'))
                <div class="alert alert-success">
                    <i class="fa-solid fa-check-circle"></i>
                    {{ session('success') }}
                </div>
            @endif

            <!-- Login Form -->
            <form method="POST" action="{{ route('admin.login.post') }}">
                @csrf

                <div class="form-group">
                    <label>Email Address</label>
                    <div class="input-wrapper">
                        <i class="fa-regular fa-envelope"></i>
                        <input type="email" name="email" class="form-input" value="{{ old('email') }}" placeholder="admin@smashlab.com" required autofocus>
                    </div>
                </div>

                <div class="form-group">
                    <label>Password</label>
                    <div class="password-wrapper">
                        <i class="fa-solid fa-lock"></i>
                        <input type="password" name="password" id="passwordInput" class="password-input" placeholder="••••••••" required>
                        <button type="button" id="togglePassword" class="toggle-password">
                            <i class="fa-regular fa-eye" id="eyeIcon"></i>
                        </button>
                    </div>
                </div>

                <div class="remember-group">
                    <input type="checkbox" name="remember" id="remember">
                    <label for="remember">Remember me</label>
                </div>

                <button type="submit" class="login-btn">
                    <i class="fa-solid fa-right-to-bracket"></i> Sign In
                </button>

            </form>

            <div class="switch-link">
                <a href="{{ route('frontdesk.login') }}">← Front Desk Login</a>
            </div>

            <div class="login-footer">
                <i class="fa-solid fa-shield-halved"></i> Secure Admin Access · <span>SmashLab</span>
            </div>

        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const passwordInput = document.getElementById('passwordInput');
            const toggleBtn = document.getElementById('togglePassword');
            const eyeIcon = document.getElementById('eyeIcon');

            toggleBtn.addEventListener('click', function() {
                if (passwordInput.type === 'password') {
                    passwordInput.type = 'text';
                    eyeIcon.className = 'fa-regular fa-eye-slash';
                } else {
                    passwordInput.type = 'password';
                    eyeIcon.className = 'fa-regular fa-eye';
                }
            });
        });
    </script>

</body>
</html>