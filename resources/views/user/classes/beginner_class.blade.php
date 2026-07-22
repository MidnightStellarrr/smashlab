<!DOCTYPE html>
<html lang="en" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smash Lab - Beginner Class</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

    <link rel="stylesheet" href="{{ asset('css/user/partials/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/user/beginner_class.css') }}">

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
    @include('user.classes.partials.class_hero', [
        'mainHeading' => 'Beginner Class',
        'subHeading' => 'Learn the fundamentals of badminton in a fun and supportive environment. No experience needed.',
        'classBadge' => 'Beginner',
        'buttonText' => 'Enroll Now',
        'buttonLink' => url('/classes/enroll/beginner')
    ])

    <!-- ========================================
            SECTION 2: CLASS OVERVIEW
    ======================================== -->

    <section class="class-overview">
        <div class="overview-container">
            <div class="overview-text">
                <span class="section-badge">Class Overview</span>
                <h2>Start Your Badminton Journey</h2>
                <p>
                    Our Beginner Class is designed for players with little to no
                    experience. You'll learn the essential skills, rules, and
                    techniques to start playing with confidence in a fun and
                    supportive group environment.
                </p>
                <div class="overview-features">
                    <div class="feature-item">
                        <i class="fa-solid fa-check-circle"></i>
                        <span>No experience needed</span>
                    </div>
                    <div class="feature-item">
                        <i class="fa-solid fa-check-circle"></i>
                        <span>All equipment provided</span>
                    </div>
                    <div class="feature-item">
                        <i class="fa-solid fa-check-circle"></i>
                        <span>Certified coach</span>
                    </div>
                    <div class="feature-item">
                        <i class="fa-solid fa-check-circle"></i>
                        <span>Small class size (max 8)</span>
                    </div>
                </div>
            </div>
            <div class="overview-stats">
                <div class="stat-box">
                    <h3>6</h3>
                    <p>Weeks Program</p>
                </div>
                <div class="stat-box">
                    <h3>1hr</h3>
                    <p>Per Session</p>
                </div>
                <div class="stat-box">
                    <h3>8</h3>
                    <p>Students Max</p>
                </div>
                <div class="stat-box">
                    <h3>₱500</h3>
                    <p>Per Month</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ========================================
            SECTION 3: WHAT YOU'LL LEARN
    ======================================== -->

    <section class="learn-section">
        <div class="learn-container">
            <div class="learn-header">
                <span class="section-badge">Curriculum</span>
                <h2>What You'll Learn</h2>
                <p>6-week progressive program designed for beginners.</p>
            </div>

            <div class="learn-grid">

                <div class="learn-card">
                    <div class="learn-number">01</div>
                    <h3>Proper Grip & Stance</h3>
                    <p>Learn the correct way to hold the racket and position your body for optimal control and power.</p>
                </div>

                <div class="learn-card">
                    <div class="learn-number">02</div>
                    <h3>Basic Footwork</h3>
                    <p>Master movement patterns to cover the court efficiently and reach every shot with ease.</p>
                </div>

                <div class="learn-card">
                    <div class="learn-number">03</div>
                    <h3>Serving Techniques</h3>
                    <p>Learn the rules and techniques for different types of serves — short, long, and flick.</p>
                </div>

                <div class="learn-card">
                    <div class="learn-number">04</div>
                    <h3>Forehand & Backhand</h3>
                    <p>Develop basic strokes for both forehand and backhand shots with proper form and technique.</p>
                </div>

                <div class="learn-card">
                    <div class="learn-number">05</div>
                    <h3>Rallying Drills</h3>
                    <p>Practice rallying with partners to build consistency, control, and confidence on the court.</p>
                </div>

                <div class="learn-card">
                    <div class="learn-number">06</div>
                    <h3>Game Rules & Matches</h3>
                    <p>Understand the official rules and play friendly matches to apply your skills in real game situations.</p>
                </div>

            </div>
        </div>
    </section>

    <!-- ========================================
            SECTION 4: MEET YOUR COACH
    ======================================== -->

    <section class="coach-section">
        <div class="coach-container">
            <div class="coach-image">
                <img src="/images/beginner_class.jpg" alt="Coach Mike">
            </div>
            <div class="coach-info">
                <span class="section-badge">Meet Your Coach</span>
                <h2>Coach Mike</h2>
                <div class="coach-credentials">
                    <span><i class="fa-solid fa-certificate"></i> Certified Coach</span>
                    <span><i class="fa-solid fa-clock"></i> 5+ Years Experience</span>
                    <span><i class="fa-solid fa-users"></i> 50+ Students Trained</span>
                </div>
                <p>
                    Coach Mike specializes in teaching beginners the fundamentals
                    of badminton. His patient and encouraging approach helps new
                    players build confidence and develop proper techniques from
                    day one.
                </p>
                <blockquote>
                    "I love helping beginners discover the joy of badminton.
                    Every student has the potential to improve — I'm here to
                    guide them every step of the way."
                </blockquote>
                <a href="{{ url('/classes/enroll') }}" class="enroll-btn secondary">
                    Enroll Now <i class="fa-solid fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- ========================================
            SECTION 5: PRICING & PACKAGES
    ======================================== -->

    <section class="pricing-section">

        <div class="pricing-bg-overlay"></div>

        <div class="pricing-container">

            <div class="pricing-header">
                <span class="section-badge">Pricing</span>
                <h2>Choose Your Package</h2>
                <p>Flexible options to fit your schedule and budget.</p>
            </div>

            <div class="pricing-grid">

                <div class="pricing-card">
                    <div class="pricing-card-header">
                        <h3>Drop-in</h3>
                        <span class="pricing-price">₱150</span>
                        <p>per session</p>
                    </div>
                    <ul class="pricing-features">
                        <li><i class="fa-solid fa-check"></i> Pay per session</li>
                        <li><i class="fa-solid fa-check"></i> Flexible schedule</li>
                        <li><i class="fa-solid fa-check"></i> No commitment</li>
                        <li><i class="fa-solid fa-check"></i> Try before you commit</li>
                    </ul>
                    <a href="{{ url('/classes/enroll/beginner?package=drop-in') }}" class="pricing-btn">Choose Drop-in</a>
                </div>

                <div class="pricing-card popular">
                    <div class="popular-badge">Most Popular</div>
                    <div class="pricing-card-header">
                        <h3>Monthly</h3>
                        <span class="pricing-price">₱500</span>
                        <p>per month</p>
                    </div>
                    <ul class="pricing-features">
                        <li><i class="fa-solid fa-check"></i> 4 sessions included</li>
                        <li><i class="fa-solid fa-check"></i> Progress tracking</li>
                        <li><i class="fa-solid fa-check"></i> Best value</li>
                        <li><i class="fa-solid fa-check"></i> Consistent training</li>
                    </ul>
                    <a href="{{ url('/classes/enroll/beginner?package=monthly') }}" class="pricing-btn">Choose Monthly</a>
                </div>

                <div class="pricing-card">
                    <div class="pricing-card-header">
                        <h3>Quarterly</h3>
                        <span class="pricing-price">₱1,350</span>
                        <p>per quarter</p>
                    </div>
                    <ul class="pricing-features">
                        <li><i class="fa-solid fa-check"></i> 12 sessions included</li>
                        <li><i class="fa-solid fa-check"></i> Save 10%</li>
                        <li><i class="fa-solid fa-check"></i> Priority booking</li>
                        <li><i class="fa-solid fa-check"></i> Certificate upon completion</li>
                    </ul>
                    <a href="{{ url('/classes/enroll/beginner?package=quarterly') }}" class="pricing-btn">Choose Quarterly</a>
                </div>

            </div>

        </div>

    </section>

    <!-- ========================================
            SECTION 6: FAQ
    ======================================== -->

    <section class="faq-section">
        <div class="faq-container">
            <div class="faq-header">
                <span class="section-badge">FAQ</span>
                <h2>Frequently Asked Questions</h2>
            </div>

            <div class="faq-grid">

                <div class="faq-item">
                    <h3>Do I need to bring my own racket?</h3>
                    <p>No — rackets and shuttlecocks are available for rent at the front desk.</p>
                </div>

                <div class="faq-item">
                    <h3>What should I wear?</h3>
                    <p>Comfortable athletic clothing and indoor court shoes.</p>
                </div>

                <div class="faq-item">
                    <h3>Is this class for adults only?</h3>
                    <p>All ages are welcome. Students under 18 require guardian consent.</p>
                </div>

                <div class="faq-item">
                    <h3>What if I miss a session?</h3>
                    <p>Make-up sessions are available subject to schedule availability.</p>
                </div>

                <div class="faq-item">
                    <h3>Can I join mid-term?</h3>
                    <p>Yes — classes are ongoing and you can join at any time.</p>
                </div>

                <div class="faq-item">
                    <h3>Do you offer free trials?</h3>
                    <p>Yes! Contact us to schedule a free trial session.</p>
                </div>

            </div>
        </div>
    </section>

<!-- ========================================
            SECTION 7: CTA - READY TO PLAY
    ======================================== -->

    <section class="ready-section">

        <div class="ready-overlay"></div>

        <div class="ready-content">

            <h2>Ready to Start Your Journey?</h2>

            <p>
                Join the Beginner Class today and take your first step<br>
                toward becoming a better player.
            </p>

            <a href="{{ url('/classes/enroll/beginner') }}" class="ready-btn">
                Enroll Now <i class="fa-solid fa-arrow-right"></i>
            </a>

        </div>

    </section>

    <!-- ========================================
            FOOTER
    ======================================== -->
    @include('user.partials.footer')

</body>
</html>