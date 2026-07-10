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

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

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
                <li><a href="{{ url('/book_now') }}">Book Now</a></li>
                <li><a href="{{ url('/classes') }}">Classes</a></li>
                <li><a href="{{ url('/shop') }}">Shop</a></li>
                <li><a href="{{ url('/about_us') }}">About Us</a></li>
                <li><a href="{{ url('/contact') }}">Contact</a></li>
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

                <a href="{{ url('/services') }}" class="learn-btn">
                    Learn more
                </a>

                <a href="{{ url('/book_now') }}" class="book-btn">
                    Book now
                </a>

            </div>

        </div>

    </div>

</header>

<!-- Announcement Bar -->

<section class="announcement-bar">

    <div class="announcement-track">

        <div class="announcement-content">

            <span class="dot"></span>
            <span>Level up your game</span>

            <span class="dot"></span>
            <span>Level up your game</span>

            <span class="dot"></span>
            <span>Level up your game</span>

            <span class="dot"></span>
            <span>Level up your game</span>

            <span class="dot"></span>
            <span>Level up your game</span>

            <span class="dot"></span>
            <span>Level up your game</span>

            <span class="dot"></span>
            <span>Level up your game</span>

            <span class="dot"></span>
            <span>Level up your game</span>

        </div>

        <!-- Duplicate for seamless looping -->

        <div class="announcement-content">

            <span class="dot"></span>
            <span>Level up your game</span>

            <span class="dot"></span>
            <span>Level up your game</span>

            <span class="dot"></span>
            <span>Level up your game</span>

            <span class="dot"></span>
            <span>Level up your game</span>

            <span class="dot"></span>
            <span>Level up your game</span>

            <span class="dot"></span>
            <span>Level up your game</span>

            <span class="dot"></span>
            <span>Level up your game</span>

            <span class="dot"></span>
            <span>Level up your game</span>

        </div>

    </div>

</section>

<section class="available-courts">

    <div class="section-title">
        <h2>Available Courts</h2>
        <p>Pick the perfect court for your game.</p>
    </div>

    <div class="booking-container">

        <!-- Calendar -->

        <div class="calendar">
            <div class="calendar-header">

            <div class="month">
                <h3 id="monthDisplay">December</h3>
                <span id="yearDisplay">2026</span>
            </div>

            <select id="monthSelect">
                <option value="0">January</option>
                <option value="1">February</option>
                <option value="2">March</option>
                <option value="3">April</option>
                <option value="4">May</option>
                <option value="5">June</option>
                <option value="6">July</option>
                <option value="7">August</option>
                <option value="8">September</option>
                <option value="9">October</option>
                <option value="10">November</option>
                <option value="11" selected>December</option>
            </select>

        </div>

        <div class="weekdays">
            <span>SUN</span>
            <span>MON</span>
            <span>TUE</span>
            <span>WED</span>
            <span>THU</span>
            <span>FRI</span>
            <span>SAT</span>
        </div>

        <div class="days" id="daysContainer">
            <!-- Days will be generated by JavaScript -->
        </div>

    </div>

        <!-- Table -->

    <div class="court-table">
        
        <div class="table-wrapper">
            <table>

                <thead>
                    <tr>
                        <th>Time Slot</th>
                        <th>Court 1</th>
                        <th>Court 2</th>
                        <th>Court 3</th>
                        <th>Court 4</th>
                    </tr>
                </thead>

                <tbody>
                    <div class="scrollable-body">
                        <tr>
                            <td>10:00 AM</td>
                            <td><span class="available">Available</span></td>
                            <td><span class="available">Available</span></td>
                            <td><span class="reserved">Reserved</span></td>
                            <td><span class="available">Available</span></td>
                        </tr>
                        <tr>
                            <td>11:00 AM</td>
                            <td><span class="available">Available</span></td>
                            <td><span class="reserved">Reserved</span></td>
                            <td><span class="available">Available</span></td>
                            <td><span class="reserved">Reserved</span></td>
                        </tr>
                        <tr>
                            <td>12:00 PM</td>
                            <td><span class="available">Available</span></td>
                            <td><span class="available">Available</span></td>
                            <td><span class="available">Available</span></td>
                            <td><span class="reserved">Reserved</span></td>
                        </tr>
                        <tr>
                            <td>1:00 PM</td>
                            <td><span class="reserved">Reserved</span></td>
                            <td><span class="available">Available</span></td>
                            <td><span class="reserved">Reserved</span></td>
                            <td><span class="available">Available</span></td>
                        </tr>
                        <tr>
                            <td>2:00 PM</td>
                            <td><span class="available">Available</span></td>
                            <td><span class="reserved">Reserved</span></td>
                            <td><span class="available">Available</span></td>
                            <td><span class="reserved">Reserved</span></td>
                        </tr>
                        <tr>
                            <td>3:00 PM</td>
                            <td><span class="reserved">Reserved</span></td>
                            <td><span class="reserved">Reserved</span></td>
                            <td><span class="maintenance">Maintenance</span></td>
                            <td><span class="available">Available</span></td>
                        </tr>
                        <tr>
                            <td>4:00 PM</td>
                            <td><span class="reserved">Reserved</span></td>
                            <td><span class="available">Available</span></td>
                            <td><span class="reserved">Reserved</span></td>
                            <td><span class="reserved">Reserved</span></td>
                        </tr>
                        <tr>
                            <td>5:00 PM</td>
                            <td><span class="reserved">Reserved</span></td>
                            <td><span class="available">Available</span></td>
                            <td><span class="available">Available</span></td>
                            <td><span class="reserved">Reserved</span></td>
                        </tr>
                        <tr>
                            <td>6:00 PM</td>
                            <td><span class="available">Available</span></td>
                            <td><span class="reserved">Reserved</span></td>
                            <td><span class="available">Available</span></td>
                            <td><span class="available">Available</span></td>
                        </tr>
                        <tr>
                            <td>7:00 PM</td>
                            <td><span class="reserved">Reserved</span></td>
                            <td><span class="available">Available</span></td>
                            <td><span class="reserved">Reserved</span></td>
                            <td><span class="available">Available</span></td>
                        </tr>
                        <tr>
                            <td>8:00 PM</td>
                            <td><span class="available">Available</span></td>
                            <td><span class="available">Available</span></td>
                            <td><span class="reserved">Reserved</span></td>
                            <td><span class="reserved">Reserved</span></td>
                        </tr>
                        <tr>
                            <td>9:00 PM</td>
                            <td><span class="reserved">Reserved</span></td>
                            <td><span class="available">Available</span></td>
                            <td><span class="available">Available</span></td>
                            <td><span class="reserved">Reserved</span></td>
                        </tr>
                        <tr>
                            <td>10:00 PM</td>
                            <td><span class="available">Available</span></td>
                            <td><span class="reserved">Reserved</span></td>
                            <td><span class="available">Available</span></td>
                            <td><span class="available">Available</span></td>
                        </tr>
                    </div>
                </tbody>
            </table>
        </div>

            <div class="legend">

                <div><span class="circle green"></span>Available</div>
                <div><span class="circle red"></span>Reserved</div>
                <div><span class="circle yellow"></span>Under Maintenance</div>

            </div>

        </div>

    </div>

    <a href="{{ url('/book_now') }}" class="book-now-btn">
        + Book now
    </a>

</section>

<!-- What We Offer -->

<section class="what-we-offer">

    <div class="owo-top">

        <div class="owo-left">
            <span class="owo-badge">What We Offer</span>
            <h2>THE SMASH LAB <br> EXPERIENCE</h2>
        </div>

        <div class="owo-right">
            <p>
                Everything you need for the perfect game. From
                finding an open court to renting a racket and grabbing
                a drink. We handle it all.
            </p>

            <a class="owo-arrow-btn" href="{{ url('/services') }}">
                <i class="fa-solid fa-arrow-right"></i>
            </a>
        </div>

    </div>

    <div class="offer-cards">

        <div class="offer-card court-card">
            <div class="card-overlay blue-overlay"></div>
            <div class="card-content">
                <h3>Premium Courts</h3>
                <p>
                    Well-maintained courts with professional
                    flooring, tournament-grade dimensions,
                    premium lighting, and real-time online
                    booking for a seamless playing experience.
                </p>
            </div>
        </div>

        <div class="offer-card class-card">
            <div class="card-overlay grey-overlay"></div>
            <div class="card-content bottom">
                <h3>Pro Classes</h3>
                <p>
                    Learn from certified coaches — beginners to
                    advanced.
                </p>
            </div>
        </div>

        <div class="offer-card gear-card">
            <div class="card-overlay grey-overlay"></div>
            <div class="card-content bottom">
                <h3>Gears and Snacks</h3>
                <p>
                    Gears and snacks available for purchase.
                </p>
            </div>
        </div>

        <div class="offer-card booking-card">
            <div class="card-overlay grey-overlay"></div>
            <div class="card-content bottom">
                <h3>Smart Booking</h3>
                <p>
                    Book, manage, and track everything from
                    your dashboard.
                </p>
            </div>
        </div>

    </div>

</section>

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

<!-- Statistics -->

<section class="stats">

    <div class="stats-container">

        <div class="stat-item">
            <h3>500+</h3>
            <p>Active Members</p>
        </div>

        <div class="stat-item">
            <h3>10</h3>
            <p>Pro Coaches</p>
        </div>

        <div class="stat-item">
            <h3>2,000+</h3>
            <p>Monthly Bookings</p>
        </div>

        <div class="stat-item">
            <h3>4.5</h3>
            <p>Avg. Rating</p>
        </div>

    </div>

</section>

<!-- Testimonials -->
<section class="testimonials">

    <div class="testimonial-header">
        <span>Testimonials</span>
        <h2>What Our Players Say</h2>
    </div>

    <div class="testimonial-wrapper">

        <button class="testimonial-prev">
            <i class="fa-solid fa-chevron-left"></i>
        </button>

        <div class="swiper testimonialSwiper">

            <div class="swiper-wrapper">

                <!-- SLIDE 1 -->
                <div class="swiper-slide">
                    <div class="testimonial-card">
                        <div class="quote">
                            <i class="fa-solid fa-quote-left"></i>
                        </div>
                        <p>
                            The courts are world-class and the community
                            is incredible. I've improved so much since
                            joining Smash Lab. The coaches really care
                            about your progress and the booking system
                            makes everything so convenient.
                        </p>
                        <div class="author">
                            <div class="avatar"></div>
                            <div>
                                <h4>John Doe</h4>
                                <span>Active Member — 2 Years</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- SLIDE 2 -->
                <div class="swiper-slide">
                    <div class="testimonial-card">
                        <div class="quote">
                            <i class="fa-solid fa-quote-left"></i>
                        </div>
                        <p>
                            Booking is so easy now. I play twice a week
                            without any hassle. The dashboard tells me
                            exactly which courts are free. No more calling
                            the front desk or guessing.
                        </p>
                        <div class="author">
                            <div class="avatar"></div>
                            <div>
                                <h4>Carlo Villanueva</h4>
                                <span>Class Student — 1 Year</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- SLIDE 3 -->
                <div class="swiper-slide">
                    <div class="testimonial-card">
                        <div class="quote">
                            <i class="fa-solid fa-quote-left"></i>
                        </div>
                        <p>
                            Coach Sarah transformed my game completely.
                            I went from intermediate to advanced in just
                            three months. Her attention to detail pushed
                            me further than I ever imagined.
                        </p>
                        <div class="author">
                            <div class="avatar"></div>
                            <div>
                                <h4>Juan Dela Cruz</h4>
                                <span>Advanced Class — 6 Months</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- SLIDE 4 -->
                <div class="swiper-slide">
                    <div class="testimonial-card">
                        <div class="quote">
                            <i class="fa-solid fa-quote-left"></i>
                        </div>
                        <p>
                            The booking process is seamless and the
                            facilities are excellent. I highly recommend
                            Smash Lab to anyone looking to improve their
                            badminton skills.
                        </p>
                        <div class="author">
                            <div class="avatar"></div>
                            <div>
                                <h4>Maria Santos</h4>
                                <span>Premium Member</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- SLIDE 5 -->
                <div class="swiper-slide">
                    <div class="testimonial-card">
                        <div class="quote">
                            <i class="fa-solid fa-quote-left"></i>
                        </div>
                        <p>
                            Smash Lab is the best place to train. The
                            coaches are experienced, the courts are
                            top-notch, and the community is very
                            welcoming. Highly recommended!
                        </p>
                        <div class="author">
                            <div class="avatar"></div>
                            <div>
                                <h4>Mark Rivera</h4>
                                <span>Competitive Player — 1 Year</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

        <button class="testimonial-next">
            <i class="fa-solid fa-chevron-right"></i>
        </button>

    </div>

    <div class="swiper-pagination"></div>

</section>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- Ready To Play CTA Section -->
<section class="ready-section">

    <div class="ready-overlay"></div>

    <div class="ready-content">

        <h2>Ready to Smash?</h2>

        <p>
            Join thousands of players who book, train, <br>and
            play at Smash Lab.
        </p>

        <a href="{{ url('/book_now') }}" class="ready-btn">
            Get Started Now
        </a>

    </div>

</section>

<!-- =========================
        FOOTER
========================= -->

<footer class="footer">

    <div class="footer-container">

        <!-- LEFT -->

        <div class="footer-brand">

            <h2>Smash Lab</h2>

            <p>
                Welcome to Smash Lab — where you
                can play badminton, hit the gym,
                or do both.
            </p>

            <div class="footer-socials">

                <a href="https://www.tiktok.com/@smashlab" target="_blank"><i class="fa-brands fa-tiktok"></i></a>

                <a href="https://www.facebook.com/smashlab" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>

                <a href="https://www.instagram.com/smashlab" target="_blank"><i class="fa-brands fa-instagram"></i></a>

            </div>

            <div class="footer-contact">

                <p>smashlab@gmail.com</p>

                <p>097361274809</p>

                <p>
                    BARANGAY, Quezon St,
                    New Pandan, Panabo, 8105
                    Davao del Norte
                </p>

            </div>

        </div>

        <!-- MAIN -->
        <div class="footer-links">
            <h4>MAIN</h4>
            <ul>
                <li><a href="{{ url('/app') }}">Home</a></li>
                <li><a href="{{ url('/book_now') }}">Book now</a></li>
                <li><a href="{{ url('/classes') }}">Classes</a></li>
                <li><a href="{{ url('/shop') }}">Shop</a></li>
                <li><a href="{{ url('/about_us') }}">About Us</a></li>
            </ul>
        </div>

        <!-- SUPPORT -->

        <div class="footer-links">
            <h4>SUPPORT</h4>
            <ul>
                <li><a href="{{ url('/contact') }}">Contact</a></li>
                <li><a href="{{ url('/services') }}">FAQ</a></li>
            </ul>
        </div>

        <!-- RIGHT -->

        <div class="footer-newsletter">
            <input
                type="email"
                placeholder="Enter e-mail address"
            >

            <div class="footer-buttons">

                <a href="#" class="footer-login">
                    Login
                </a>

                <a href="#" class="footer-signup">
                    Sign Up
                </a>

            </div>

        </div>

    </div>

    <div class="footer-bottom">

        © 2026 SmashHIT Badminton Facility —
        Move your way.

    </div>

</footer>

<script>
    document.addEventListener('DOMContentLoaded', function () {

        const monthSelect = document.getElementById('monthSelect');
        const monthDisplay = document.getElementById('monthDisplay');
        const yearDisplay = document.getElementById('yearDisplay');
        const daysContainer = document.getElementById('daysContainer');

        const monthNames = [
            'January', 'February', 'March', 'April', 'May', 'June',
            'July', 'August', 'September', 'October', 'November', 'December'
        ];

        let currentMonth = 11; // December (0-based)
        let currentYear = 2026;

        function renderCalendar(month, year) {
            // Update month and year display
            monthDisplay.textContent = monthNames[month];
            yearDisplay.textContent = year;

            // Get first day of month (0 = Sunday, 1 = Monday, etc.)
            const firstDay = new Date(year, month, 1).getDay();

            // Get number of days in month
            const daysInMonth = new Date(year, month + 1, 0).getDate();

            // Get number of days in previous month
            const daysInPrevMonth = new Date(year, month, 0).getDate();

            // Build days HTML
            let html = '';

            // Previous month's trailing days
            const prevMonthStart = daysInPrevMonth - firstDay + 1;
            for (let i = prevMonthStart; i <= daysInPrevMonth; i++) {
                html += `<div class="inactive">${i}</div>`;
            }

            // Current month's days
            for (let i = 1; i <= daysInMonth; i++) {
                // Highlight today's date (optional)
                const today = new Date();
                const isToday = (i === today.getDate() && month === today.getMonth() && year === today.getFullYear());
                const activeClass = isToday ? 'active' : '';
                html += `<div class="${activeClass}">${i}</div>`;
            }

            // Next month's leading days
            const totalDays = firstDay + daysInMonth;
            const remainingDays = 42 - totalDays; // 6 rows of 7 days
            for (let i = 1; i <= remainingDays; i++) {
                html += `<div class="inactive">${i}</div>`;
            }

            daysContainer.innerHTML = html;
        }

        // Initial render
        renderCalendar(currentMonth, currentYear);

        // Handle month change
        monthSelect.addEventListener('change', function () {
            currentMonth = parseInt(this.value);

            // Update year if needed (optional: you can add year logic here)
            // For simplicity, we keep year as 2026

            renderCalendar(currentMonth, currentYear);
        });

    });

document.addEventListener("DOMContentLoaded", function () {

    const testimonialSwiper = new Swiper(".testimonialSwiper", {

        /* ── General ── */
        loop: true,
        centeredSlides: true,
        grabCursor: true,
        speed: 800,
        autoplay: {
            delay: 4000,
            disableOnInteraction: false,
            pauseOnMouseEnter: true
        },

        /* ── Slides ── */
        slidesPerView: 1,
        spaceBetween: 0,

        /* ── Navigation ── */
        navigation: {
            nextEl: ".testimonial-next",
            prevEl: ".testimonial-prev",
        },

        /* ── Pagination ── */
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
            dynamicBullets: true,
        },

        /* ── Responsive ── */
        breakpoints: {

            640: {
                slidesPerView: 1,
                centeredSlides: true,
                spaceBetween: 0,
            },

            768: {
                slidesPerView: 2,
                centeredSlides: true,
                spaceBetween: 0,
            },

            1024: {
                slidesPerView: 3,
                centeredSlides: true,
                spaceBetween: 0,
            }

        }

    });

});
</script>

</body>
</html>