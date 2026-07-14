<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smash Lab - Intermediate Class</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

    <link rel="stylesheet" href="{{ asset('css/user/partials/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/user/intermediate_class.css') }}">
</head>
<body>
    @include('user.partials.navbar')

    <!-- ========================================
            SECTION 1: HERO
    ======================================== -->
    @include('user.classes.partials.class_hero', [
        'mainHeading' => 'Intermediate Class',
        'subHeading' => 'Take your badminton skills to the next level with our intermediate class. Build on your fundamentals and learn advanced techniques.',
        'classBadge' => 'Intermediate',
        'buttonText' => 'Enroll Now',
        'buttonLink' => url('/classes/enroll/intermediate')
    ])

    <!-- ========================================
            SECTION 2: CLASS OVERVIEW
    ======================================== -->

    <section class="class-overview">
        <div class="overview-container">
            <div class="overview-text">
                <span class="section-badge">Class Overview</span>
                <h2>Take Your Game to the Next Level</h2>
                <p>
                    Our Intermediate Class is designed for players who have mastered the basics
                    and are ready to refine their techniques. You'll learn advanced footwork,
                    shot variations, and game strategies to outsmart your opponents and play
                    with more confidence.
                </p>
                <div class="overview-features">
                    <div class="feature-item">
                        <i class="fa-solid fa-check-circle"></i>
                        <span>Basic skills required</span>
                    </div>
                    <div class="feature-item">
                        <i class="fa-solid fa-check-circle"></i>
                        <span>Advanced techniques</span>
                    </div>
                    <div class="feature-item">
                        <i class="fa-solid fa-check-circle"></i>
                        <span>Match play & strategy</span>
                    </div>
                    <div class="feature-item">
                        <i class="fa-solid fa-check-circle"></i>
                        <span>Small class size (max 6)</span>
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
                    <h3>6</h3>
                    <p>Students Max</p>
                </div>
                <div class="stat-box">
                    <h3>₱600</h3>
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
                <p>6-week progressive program designed for intermediate players.</p>
            </div>

            <div class="learn-grid">

                <div class="learn-card">
                    <div class="learn-number">01</div>
                    <h3>Advanced Footwork</h3>
                    <p>Master efficient movement patterns to cover the court faster and conserve energy during rallies.</p>
                </div>

                <div class="learn-card">
                    <div class="learn-number">02</div>
                    <h3>Shot Variation</h3>
                    <p>Learn to mix up your shots — smashes, drops, clears, and net play — to keep opponents guessing.</p>
                </div>

                <div class="learn-card">
                    <div class="learn-number">03</div>
                    <h3>Deceptive Net Play</h3>
                    <p>Develop deceptive net shots and spinning techniques to force weak returns from opponents.</p>
                </div>

                <div class="learn-card">
                    <div class="learn-number">04</div>
                    <h3>Defensive & Offensive Tactics</h3>
                    <p>Understand when to attack and when to defend — and how to transition between the two.</p>
                </div>

                <div class="learn-card">
                    <div class="learn-number">05</div>
                    <h3>Match Strategy</h3>
                    <p>Learn to read opponents, exploit weaknesses, and make smart shot decisions under pressure.</p>
                </div>

                <div class="learn-card">
                    <div class="learn-number">06</div>
                    <h3>Competitive Match Play</h3>
                    <p>Apply your skills in competitive match simulations and prepare for tournament play.</p>
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
                <img src="/images/intermediate_class.jpg" alt="Coach Sarah">
            </div>
            <div class="coach-info">
                <span class="section-badge">Meet Your Coach</span>
                <h2>Coach Sarah</h2>
                <div class="coach-credentials">
                    <span><i class="fa-solid fa-certificate"></i> Certified Coach</span>
                    <span><i class="fa-solid fa-clock"></i> 7+ Years Experience</span>
                    <span><i class="fa-solid fa-trophy"></i> Former Tournament Player</span>
                </div>
                <p>
                    Coach Sarah brings years of competitive experience to every session.
                    Her focus on precision, strategy, and mental toughness helps players
                    elevate their game and perform consistently under pressure.
                </p>
                <blockquote>
                    "I believe that strategy and precision win games. My goal is to help
                    players develop the tactical awareness they need to outsmart their
                    opponents and play with confidence."
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
                        <span class="pricing-price">₱180</span>
                        <p>per session</p>
                    </div>
                    <ul class="pricing-features">
                        <li><i class="fa-solid fa-check"></i> Pay per session</li>
                        <li><i class="fa-solid fa-check"></i> Flexible schedule</li>
                        <li><i class="fa-solid fa-check"></i> No commitment</li>
                        <li><i class="fa-solid fa-check"></i> Try before you commit</li>
                    </ul>
                    <a href="{{ url('/classes/enroll/intermediate?package=drop-in') }}" class="pricing-btn">Choose Drop-in</a>
                </div>

                <div class="pricing-card popular">
                    <div class="popular-badge">Most Popular</div>
                    <div class="pricing-card-header">
                        <h3>Monthly</h3>
                        <span class="pricing-price">₱600</span>
                        <p>per month</p>
                    </div>
                    <ul class="pricing-features">
                        <li><i class="fa-solid fa-check"></i> 4 sessions included</li>
                        <li><i class="fa-solid fa-check"></i> Progress tracking</li>
                        <li><i class="fa-solid fa-check"></i> Best value</li>
                        <li><i class="fa-solid fa-check"></i> Consistent training</li>
                    </ul>
                    <a href="{{ url('/classes/enroll/intermediate?package=monthly') }}" class="pricing-btn">Choose Monthly</a>
                </div>

                <div class="pricing-card">
                    <div class="pricing-card-header">
                        <h3>Quarterly</h3>
                        <span class="pricing-price">₱1,620</span>
                        <p>per quarter</p>
                    </div>
                    <ul class="pricing-features">
                        <li><i class="fa-solid fa-check"></i> 12 sessions included</li>
                        <li><i class="fa-solid fa-check"></i> Save 10%</li>
                        <li><i class="fa-solid fa-check"></i> Priority booking</li>
                        <li><i class="fa-solid fa-check"></i> Certificate upon completion</li>
                    </ul>
                    <a href="{{ url('/classes/enroll/intermediate?package=quarterly') }}" class="pricing-btn">Choose Quarterly</a>
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
                    <h3>What is the prerequisite for this class?</h3>
                    <p>Basic knowledge of grip, strokes, and rules is required. Completion of Beginner Class or equivalent experience recommended.</p>
                </div>

                <div class="faq-item">
                    <h3>What if I'm not sure about my level?</h3>
                    <p>Contact us for a quick skill assessment before enrolling.</p>
                </div>

                <div class="faq-item">
                    <h3>Can I join mid-term?</h3>
                    <p>Yes — subject to availability and coach approval.</p>
                </div>

                <div class="faq-item">
                    <h3>Will I get to play matches?</h3>
                    <p>Yes — match simulations and friendly games are part of the program.</p>
                </div>

                <div class="faq-item">
                    <h3>What gear do I need?</h3>
                    <p>Comfortable clothes, indoor shoes, and a water bottle. Rackets and shuttlecocks are available for rent.</p>
                </div>

                <div class="faq-item">
                    <h3>How long is each session?</h3>
                    <p>Each session is 1 hour long, twice a week.</p>
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

            <h2>Ready to Level Up Your Game?</h2>

            <p>
                Join the Intermediate Class today and take your skills<br>
                to the next level.
            </p>

            <a href="{{ url('/classes/enroll/intermediate') }}" class="ready-btn">
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