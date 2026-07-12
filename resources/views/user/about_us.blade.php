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

<!-- ======================================
            OUR FACILITIES
======================================= -->

<section class="facilities-section">

    <div class="facilities-header">

        <h2>Our Facilities</h2>

        <p>Premium courts designed for the perfect game every time.</p>

    </div>

    <div class="facilities-grid">

        <!-- Left Large -->

        <div class="facility-card large image-card">

            <img src="/images/badminton_courts.jpg" alt="Court">

            <div class="overlay"></div>

            <div class="facility-content white">

                <h3>4 Premium Courts</h3>

                <p>Tournament-grade dimensions</p>

            </div>

        </div>

        <!-- Small Top -->

        <div class="facility-card text-card">

            <h3>Premium Flooring</h3>

            <p>
                Professional-grade rubber mats for
                optimal grip and safety.
            </p>

        </div>

        <!-- Middle Large -->

        <div class="facility-card tall text-card center">

            <h3>LED Lighting</h3>

            <p>
                LED lighting with no glare and no
                shadows — just clear visibility
                for every shot.
            </p>

        </div>

        <!-- Top Right -->

        <div class="facility-card image-card">

            <img src="/images/locker.jpg" alt="Locker">

            <div class="overlay"></div>

            <div class="facility-content white">

                <h3>Shower & Locker Rooms</h3>

                <p>Freshen up after your games in our amenities.</p>

            </div>

        </div>

        <!-- Bottom Left -->

        <div class="facility-card image-card">

            <img src="/images/Climate-Controlled.jpg" alt="AC">

            <div class="overlay"></div>

            <div class="facility-content white">

                <h3>Climate-Controlled</h3>

                <p>Fully air-conditioned for your comfort.</p>

            </div>

        </div>

        <!-- Bottom Right -->

        <div class="facility-card text-card">

            <h3>Snacks & Drinks</h3>

            <p>
                Grab a drink or a snack at our shop.
            </p>

        </div>

    </div>

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