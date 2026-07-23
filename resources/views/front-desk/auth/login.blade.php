<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Front Desk Login - SmashLab</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

    <!-- Front Desk Login CSS -->
    <link rel="stylesheet" href="{{ asset('css/front-desk/login.css') }}">
</head>
<body>

    <div class="login-container">
        <div class="login-card">

            <!-- Logo -->
            <div class="login-logo">
                <img src="{{ asset('images/logo.png') }}" alt="SmashLab">
                <h1>WELCOME BACK!</h1>
                <p>Front Desk Staff Login</p>
                <span class="login-badge">Staff Only</span>
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
            <form method="POST" action="{{ route('frontdesk.login.post') }}">
                @csrf

                <!-- Email -->
                <div class="form-group">
                    <label>Email Address</label>
                    <div class="input-wrapper">
                        <i class="fa-regular fa-envelope"></i>
                        <input
                            type="email"
                            name="email"
                            class="form-input"
                            value="{{ old('email') }}"
                            placeholder="frontdesk@smashlab.com"
                            required
                            autofocus
                        >
                    </div>
                    @error('email')
                        <div class="error-text">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Password with Eye Button -->
                <div class="form-group">
                    <label>Password</label>
                    <div class="password-wrapper">
                        <i class="fa-solid fa-lock"></i>
                        <input
                            type="password"
                            name="password"
                            id="passwordInput"
                            class="password-input"
                            placeholder="••••••••"
                            required
                        >
                        <button
                            type="button"
                            id="togglePassword"
                            class="toggle-password"
                            aria-label="Toggle password visibility"
                        >
                            <i class="fa-regular fa-eye" id="eyeIcon"></i>
                        </button>
                    </div>
                    @error('password')
                        <div class="error-text">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Login Button -->
                <button type="submit" class="login-btn">
                    Sign In
                </button>

            </form>

            <!-- Footer -->
            <div class="login-footer">
                <i class="fa-solid fa-shield-halved"></i> Secure Staff Access · <span>SmashLab</span>
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