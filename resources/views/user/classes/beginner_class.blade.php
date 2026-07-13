<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smash Lab - Beginner Class</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

    <link rel="stylesheet" href="{{ asset('css/user/beginner_class.css') }}">
</head>
<body>
    @include('user.partials.navbar')

    <!-- ========================================
            SECTION 1: HERO
    ======================================== -->
    @include('user.classes.partials.class_hero', [
        'mainHeading' => 'Beginner Class',
        'subHeading' => 'Learn the fundamentals of badminton in a fun and supportive environment. No experience needed.',
        'classBadge' => 'Beginner',
        'buttonText' => 'Enroll Now',
        'buttonLink' => url('/enroll/beginner')
    ])

    
</body>
</html>