<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - SmashLab</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

    <link rel="stylesheet" href="{{ asset('css/user/partials/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/user/about_us.css') }}">
</head>
<body>
    @include('user.partials.navbar')

    <!-- ========================================
            SECTION 1: HERO
    ======================================== -->
    @include('user.partials.hero', [
        'mainHeading' => 'About Us',
        'subHeading' => 'Where passion meets the court — and every player finds their game.'
    ])

    <!-- ========================================
            SECTION 2: OUR STORY
    ======================================== -->

    <section class="our-story">

        <div class="story-container">

            <!-- Left Side -->

            <div class="story-side">

                <p>About us.</p>
                <p>Our Team.</p>
                <p>Values.</p>

            </div>

            <!-- Right Side -->

            <div class="story-content">

                <h2>Our Story.</h2>

                <p>
                    SmashHIT started with a simple observation:
                    booking a badminton court was harder than it
                    needed to be. Players had to call ahead hoping
                    a slot was available or show up only to find
                    all courts taken. Gym-goers faced the same
                    frustration — expensive memberships, long
                    contracts, and confusing policies.
                    We knew there had to be a better way.

                    So we built SmashHIT: a facility where you
                    can book a court in under a minute, pay
                    online, and just show up to play.
                    No phone calls. No guesswork. No hassle.
                </p>

                <br>

                <p>
                    Today SmashHIT has grown into more than just
                    a badminton facility. We now offer a fully-equipped
                    gym designed for all skill levels and regular
                    tournaments for players who want to compete.

                    Our core belief hasn't changed:
                    fitness should be simple, affordable,
                    and built around you.

                    Whether you're booking your first court
                    or your hundredth, we're here to make every
                    experience smooth from start to finish.

                    That's our promise.

                    That's SmashHIT.
                </p>

            </div>

        </div>

    </section>

    <!-- ========================================
            SECTION 3: MISSION & VISION
    ======================================== -->

    <section class="mission-vision">

        <!-- MISSION ROW -->

        <div class="mission-row">

            <div class="mission-text">
                <h2>Our Mission</h2>
                <p>
                    Our mission is to make fitness simple,
                    affordable, and accessible for everyone.
                    We remove the barriers that keep people from
                    staying active—no hidden fees, no complicated
                    booking systems, and no long-term contracts.

                    Every service we offer is built around giving
                    our members the freedom to exercise on their
                    schedule while creating a welcoming environment
                    where everyone feels encouraged to grow.

                    Because staying active should never feel like
                    a chore or a financial burden.
                </p>
            </div>

            <div class="mission-image">
                <img src="/images/about_us_mission.jpg" alt="Our Mission">
            </div>

        </div>

        <!-- VISION ROW -->

        <div class="vision-row">

            <div class="vision-image">
                <img src="/images/about_us_vision.jpg" alt="Our Vision">
            </div>

            <div class="vision-text">
                <h2>Our Vision</h2>
                <p>
                    Our vision is to become the leading destination
                    for badminton and fitness where players of every
                    age and skill level feel welcomed, inspired, and
                    empowered.

                    We strive to build a community where beginners
                    find confidence, experienced players continue to
                    improve, and every member enjoys a modern facility
                    designed to make fitness and recreation part of
                    everyday life.
                </p>
            </div>

        </div>

    </section>

    <!-- ========================================
            SECTION 4: WHAT WE OFFER
    ======================================== -->

    <section class="offer-section">

        <div class="offer-container">

            <div class="offer-header">
                <span class="offer-badge">What We Offer</span>
                <h2>The Smash Lab Experience</h2>
                <p>Everything you need for the perfect game — all in one place.</p>
            </div>

            <div class="offer-grid">

                <div class="offer-card">
                    <div class="offer-icon">
                        <i class="fa-solid fa-court-sport"></i>
                    </div>
                    <h3>Premium Courts</h3>
                    <p>Tournament-grade facilities with professional flooring and lighting.</p>
                </div>

                <div class="offer-card">
                    <div class="offer-icon">
                        <i class="fa-solid fa-chalkboard-user"></i>
                    </div>
                    <h3>Pro Classes</h3>
                    <p>Certified coaches for every skill level — from beginners to pros.</p>
                </div>

                <div class="offer-card">
                    <div class="offer-icon">
                        <i class="fa-solid fa-calendar-check"></i>
                    </div>
                    <h3>Smart Booking</h3>
                    <p>Real-time availability and instant confirmations at your fingertips.</p>
                </div>

                <div class="offer-card">
                    <div class="offer-icon">
                        <i class="fa-solid fa-store"></i>
                    </div>
                    <h3>Gear & Snacks</h3>
                    <p>Rackets, shuttlecocks, snacks, and drinks — all in one place.</p>
                </div>

            </div>

        </div>

    </section>

    <!-- ========================================
            SECTION 5: WHY CHOOSE US
    ======================================== -->

    <section class="why-section">

        <div class="why-container">

            <div class="why-header">
                <span class="why-badge">Why Smash Lab</span>
                <h2>The Smash Lab Difference</h2>
                <p>What sets us apart from the rest.</p>
            </div>

            <div class="why-grid">

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fa-solid fa-award"></i>
                    </div>
                    <h3>10 Premium Courts</h3>
                    <p>World-class facilities designed for every level of play.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fa-solid fa-users"></i>
                    </div>
                    <h3>Welcoming Community</h3>
                    <p>From beginners to pros, everyone belongs at Smash Lab.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fa-solid fa-clock"></i>
                    </div>
                    <h3>Flexible Hours</h3>
                    <p>Open from 9:00 AM to 12:00 AM — play when it suits you.</p>
                </div>

                <div class="why-card">
                    <div class="why-icon">
                        <i class="fa-solid fa-credit-card"></i>
                    </div>
                    <h3>Flexible Payments</h3>
                    <p>GCash, Maya, or front desk payment — choose what works for you.</p>
                </div>

            </div>

        </div>

    </section>

    <!-- ========================================
            SECTION 6: MEET OUR COACHES
    ======================================== -->

    <section class="coaches-section">

        <div class="coaches-container">

            <div class="coaches-header">
                <span class="coaches-badge">Meet Our Team</span>
                <h2>Our Expert Coaches</h2>
                <p>Certified professionals dedicated to helping you improve, compete, and love the game.</p>
            </div>

            <div class="coaches-grid">

                <div class="coach-card">
                    <div class="coach-image">
                        <img src="/images/beginner_class.jpg" alt="Coach Mike">
                    </div>
                    <div class="coach-info">
                        <h3>Coach Mike</h3>
                        <span class="coach-level">Beginner Class</span>
                        <p>5+ Years Experience · Certified Coach · 50+ Students Trained</p>
                        <div class="coach-specialty">
                            <i class="fa-solid fa-star"></i> Specializes in Fundamentals
                        </div>
                    </div>
                </div>

                <div class="coach-card">
                    <div class="coach-image">
                        <img src="/images/intermediate_class.jpg" alt="Coach Sarah">
                    </div>
                    <div class="coach-info">
                        <h3>Coach Sarah</h3>
                        <span class="coach-level">Intermediate Class</span>
                        <p>7+ Years Experience · Certified Coach · Former Tournament Player</p>
                        <div class="coach-specialty">
                            <i class="fa-solid fa-star"></i> Specializes in Shot Precision
                        </div>
                    </div>
                </div>

                <div class="coach-card">
                    <div class="coach-image">
                        <img src="/images/advance_class.jpg" alt="Coach Alex">
                    </div>
                    <div class="coach-info">
                        <h3>Coach Alex</h3>
                        <span class="coach-level">Advanced Class</span>
                        <p>10+ Years Experience · Certified Coach · National Tournament Champion</p>
                        <div class="coach-specialty">
                            <i class="fa-solid fa-star"></i> Specializes in Advanced Techniques
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </section>

    <!-- ========================================
            SECTION 7: STATISTICS
    ======================================== -->

    <section class="stats-section">

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

    <!-- ========================================
            SECTION 8: CTA - READY TO PLAY
    ======================================== -->

    <section class="cta-section">

        <div class="cta-overlay"></div>

        <div class="cta-content">

            <h2>Ready to Smash?</h2>

            <p>
                Join thousands of players who book, train, <br>and
                play at Smash Lab.
            </p>

            <a href="{{ url('/book_now') }}" class="cta-btn">
                Get Started Now
            </a>

        </div>

    </section>

    <!-- ========================================
            FOOTER
    ======================================== -->
    @include('user.partials.footer')

</body>
</html>