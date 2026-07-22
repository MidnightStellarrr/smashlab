<!DOCTYPE html>
<html lang="en" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smashlab - Class</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

    <link rel="stylesheet" href="{{ asset('css/user/partials/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/user/classes.css') }}">

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
</head>
<body class="bg-white dark:bg-black transition-colors duration-300">
    @include('user.partials.navbar')

    <!-- ========================================
            SECTION 1: HERO
    ======================================== -->
    @include('user.partials.hero', [
        'mainHeading' => 'Smash Lab
        Classes',
        'subHeading' => 'Elevate your game with elite coaching and high-energy training.'
    ])

    <!-- Train Like a Pro -->

<section class="train-pro">

    <div class="section-heading">
        <h2>Train Like a Pro</h2>
        <p>
            Book your spot and start training with Smash Lab's certified coaches
            today.
        </p>
    </div>

    <div class="train-cards">

        <div class="train-card beginner-card">
            <div class="train-card-img"></div>
            <div class="train-card-body">
                <div>
                    <h3>Beginner Class.</h3>
                    <p>
                        Perfect for first-timers. Learn basic
                        strokes, footwork, and game rules
                        in a supportive group setting.
                    </p>
                </div>

                <a class="learn-more-btn" href="{{ url('/classes/beginner_class') }}">
                    Learn More <i class="fa-solid fa-arrow-right"></i>
                </a>
            </div>
        </div>

        <div class="train-card intermediate-card">
            <div class="train-card-img"></div>
            <div class="train-card-body">
                <div>
                    <h3>Intermediate Class.</h3>
                    <p>
                        Refine your techniques and learn
                        smarter plays. Perfect for players
                        ready to compete.
                    </p>
                </div>

                <a class="learn-more-btn" href="{{ url('/classes/intermediate_class') }}">
                    Learn More <i class="fa-solid fa-arrow-right"></i>
                </a>
            </div>
        </div>

        <div class="train-card advanced-card">
            <div class="train-card-img"></div>
            <div class="train-card-body">
                <div>
                    <h3>Advanced Class.</h3>
                    <p>
                        Train like a champion. Master the
                        techniques and tactics used by
                        professional players.
                    </p>
                </div>

                <a class="learn-more-btn" href="{{ url('/classes/advanced_class') }}">
                    Learn More <i class="fa-solid fa-arrow-right"></i>
                </a>
            </div>
        </div>

    </div>

</section>

    <!-- ========================================
            FOOTER
    ======================================== -->
    @include('user.partials.footer')
</body>
</html>