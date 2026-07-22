<!DOCTYPE html>
<html lang="en" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - SmashLab</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <link rel="stylesheet" href="{{ asset('css/user/partials/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/user/contact.css') }}">

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

    <!-- Hero Section -->
    @include('user.partials.hero', [
        'mainHeading' => 'Contact',
        'subHeading' => 'Have questions? We\'d love to hear from you.'
    ])

<!-- ===========================
        CONTACT SECTION
============================ -->

<section class="contact-section">

    <div class="contact-container">

        <!-- LEFT SIDE - FORM -->

        <div class="contact-form-card">

            <div class="form-header">
                <h2>Send Us a Message</h2>
                <p>We'll get back to you as soon as possible.</p>
            </div>

            <form>

                <div class="form-row">
                    <div class="form-group">
                        <label>Full Name</label>
                        <input type="text" placeholder="e.g. Juan Dela Cruz">
                    </div>

                    <div class="form-group">
                        <label>Email Address</label>
                        <input type="email" placeholder="e.g. juan@email.com">
                    </div>
                </div>

                <div class="form-group">
                    <label>Phone Number</label>
                    <input type="text" placeholder="e.g. +63 912 345 6789">
                </div>

                <div class="form-group">
                    <label>Message</label>
                    <textarea placeholder="How can we help you?"></textarea>
                </div>

                <button type="submit" class="contact-btn">
                    Send Message <i class="fa-solid fa-arrow-right"></i>
                </button>

            </form>

        </div>

        <!-- RIGHT SIDE - INFO -->

        <div class="contact-info">
            <h2>Let's Talk</h2>

            <p class="contact-description">
                Reach out and let us know how we can help you play your best.
                Our team is ready to assist with bookings, classes, or any
                questions you may have.
            </p>

            <div class="contact-grid">

                <!-- Phone -->

                <div class="info-card">

                    <div class="info-icon">
                        <i class="fa-solid fa-phone"></i>
                    </div>

                    <h3>Phone</h3>

                    <p>+63 912 345 6789</p>

                </div>

                <!-- Email -->

                <div class="info-card">

                    <div class="info-icon">
                        <i class="fa-solid fa-envelope"></i>
                    </div>

                    <h3>Email</h3>

                    <p>smashlab@gmail.com</p>

                </div>

                <!-- Telegram -->

                <div class="info-card">

                    <div class="info-icon">
                        <i class="fa-brands fa-telegram"></i>
                    </div>

                    <h3>Telegram</h3>

                    <p>@SmashLabOfficial</p>

                </div>

                <!-- Location -->

                <div class="info-card">

                    <div class="info-icon">
                        <i class="fa-solid fa-location-dot"></i>
                    </div>

                    <h3>Location</h3>

                    <p>
                        456 Courtside Ave,<br>
                        Quezon City, Philippines
                    </p>

                </div>

            </div>

        </div>

    </div>

</section>

<!-- ===========================
        MAP SECTION - FULL WIDTH
============================ -->

<section class="map-section">
    <div class="map-container">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30880.60284265476!2d121.03560675!3d14.6760414!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397b7e13f1c0f0d%3A0xd5b75d0a3e8f2e3!2sQuezon%20City%2C%20Metro%20Manila!5e0!3m2!1sen!2sph!4v1700000000000"
            width="100%"
            height="400"
            style="border:0; display:block;"
            loading="lazy"
            allowfullscreen>
        </iframe>
    </div>
</section>

<!-- ===========================
        FOOTER
============================ -->
@include('user.partials.footer')

</body>
</html>