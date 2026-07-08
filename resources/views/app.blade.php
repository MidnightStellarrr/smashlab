<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SmashLab</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

    <link rel="stylesheet" href="{{ asset('css/homepage.css') }}">
</head>
<body>

<header class="hero">

    <!-- Overlay -->
    <div class="overlay"></div>

    <!-- Navigation -->
    <nav class="navbar">

        <div class="nav-left">

            <img src="images/logo.png" class="logo" alt="Logo">

            <ul class="nav-links">
                <li><a href="#">Book Now</a></li>
                <li><a href="#">Classes</a></li>
                <li><a href="#">Shop</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Contact</a></li>
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


    <!-- Hero Content -->

    <div class="hero-content">

        <div class="left-content">

            <h1>
                Let the Smashing <br>
                Begin
            </h1>

        </div>

        <div class="right-content">

            <p>
                Feel the rush of the game, the
                energy of the crowd, and the thrill
                of every smash.
            </p>

            <div class="buttons">

                <a href="#" class="learn-btn">
                    Learn more
                </a>

                <a href="#" class="book-btn">
                    Book now
                </a>

            </div>

        </div>

    </div>

</header>

</body>
</html>