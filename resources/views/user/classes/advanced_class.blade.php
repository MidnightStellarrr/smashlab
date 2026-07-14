<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smash Lab - Advanced Class</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

    <link rel="stylesheet" href="{{ asset('css/user/partials/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/user/advanced_class.css') }}">
</head>
<body>
    @include('user.partials.navbar')

    <!-- ========================================
            SECTION 1: HERO
    ======================================== -->
    @include('user.classes.partials.class_hero', [
        'mainHeading' => 'Advanced Class',
        'subHeading' => 'Elite training for competitive players. Master high-level techniques, tactics, and match play.',
        'classBadge' => 'Advanced',
        'buttonText' => 'Enroll Now',
        'buttonLink' => url('/classes/enroll/advanced')
    ])

    <!-- ========================================
            SECTION 2: CLASS OVERVIEW
    ======================================== -->

    <section class="class-overview">
        <div class="overview-container">
            <div class="overview-text">
                <span class="section-badge">Class Overview</span>
                <h2>Train Like a Champion</h2>
                <p>
                    Our Advanced Class is designed for experienced players who want to compete at the highest level. 
                    You'll master advanced techniques, tactical awareness, and mental resilience through high-intensity 
                    drills and competitive match simulations.
                </p>
                <div class="overview-features">
                    <div class="feature-item">
                        <i class="fa-solid fa-check-circle"></i>
                        <span>Tournament experience recommended</span>
                    </div>
                    <div class="feature-item">
                        <i class="fa-solid fa-check-circle"></i>
                        <span>Elite coaching & tactics</span>
                    </div>
                    <div class="feature-item">
                        <i class="fa-solid fa-check-circle"></i>
                        <span>Competitive match play</span>
                    </div>
                    <div class="feature-item">
                        <i class="fa-solid fa-check-circle"></i>
                        <span>Small class size (max 4)</span>
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
                    <h3>4</h3>
                    <p>Students Max</p>
                </div>
                <div class="stat-box">
                    <h3>₱800</h3>
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
                <p>6-week elite program designed for competitive players.</p>
            </div>

            <div class="learn-grid">

                <div class="learn-card">
                    <div class="learn-number">01</div>
                    <h3>Power Smashes & Jump Smashes</h3>
                    <p>Develop explosive power and precision with advanced smash techniques, including jump smashes.</p>
                </div>

                <div class="learn-card">
                    <div class="learn-number">02</div>
                    <h3>Deceptive Net Play</h3>
                    <p>Master deceptive net shots, spinning techniques, and shot disguise to outsmart opponents.</p>
                </div>

                <div class="learn-card">
                    <div class="learn-number">03</div>
                    <h3>Advanced Footwork & Speed</h3>
                    <p>Enhance your court coverage with explosive footwork and lightning-fast movement patterns.</p>
                </div>

                <div class="learn-card">
                    <div class="learn-number">04</div>
                    <h3>Opponent Analysis</h3>
                    <p>Learn to read opponents' weaknesses, predict their shots, and exploit their patterns.</p>
                </div>

                <div class="learn-card">
                    <div class="learn-number">05</div>
                    <h3>Match Strategy & Mental Toughness</h3>
                    <p>Develop winning strategies, mental resilience, and focus under pressure in competitive matches.</p>
                </div>

                <div class="learn-card">
                    <div class="learn-number">06</div>
                    <h3>Tournament Preparation</h3>
                    <p>Prepare for tournaments with match simulations, conditioning, and strategic planning.</p>
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
                <img src="/images/advance_class.jpg" alt="Coach Alex">
            </div>
            <div class="coach-info">
                <span class="section-badge">Meet Your Coach</span>
                <h2>Coach Alex</h2>
                <div class="coach-credentials">
                    <span><i class="fa-solid fa-certificate"></i> Certified Coach</span>
                    <span><i class="fa-solid fa-clock"></i> 10+ Years Experience</span>
                    <span><i class="fa-solid fa-trophy"></i> National Tournament Champion</span>
                </div>
                <p>
                    Coach Alex is a national tournament champion with over a decade of experience
                    training competitive players. His expertise in advanced techniques, match strategy,
                    and mental conditioning has helped countless players reach their peak performance
                    and win championships.
                </p>
                <blockquote>
                    "Competitive badminton demands precision, power, and mental resilience. I train
                    players to compete at their highest level — on and off the court."
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
                        <span class="pricing-price">₱250</span>
                        <p>per session</p>
                    </div>
                    <ul class="pricing-features">
                        <li><i class="fa-solid fa-check"></i> Pay per session</li>
                        <li><i class="fa-solid fa-check"></i> Flexible schedule</li>
                        <li><i class="fa-solid fa-check"></i> No commitment</li>
                        <li><i class="fa-solid fa-check"></i> Try before you commit</li>
                    </ul>
                    <a href="{{ url('/classes/enroll/advanced?package=drop-in') }}" class="pricing-btn">Choose Drop-in</a>
                </div>

                <div class="pricing-card popular">
                    <div class="popular-badge">Most Popular</div>
                    <div class="pricing-card-header">
                        <h3>Monthly</h3>
                        <span class="pricing-price">₱800</span>
                        <p>per month</p>
                    </div>
                    <ul class="pricing-features">
                        <li><i class="fa-solid fa-check"></i> 4 sessions included</li>
                        <li><i class="fa-solid fa-check"></i> Progress tracking</li>
                        <li><i class="fa-solid fa-check"></i> Best value</li>
                        <li><i class="fa-solid fa-check"></i> Consistent training</li>
                    </ul>
                    <a href="{{ url('/classes/enroll/advanced?package=monthly') }}" class="pricing-btn">Choose Monthly</a>
                </div>

                <div class="pricing-card">
                    <div class="pricing-card-header">
                        <h3>Quarterly</h3>
                        <span class="pricing-price">₱2,160</span>
                        <p>per quarter</p>
                    </div>
                    <ul class="pricing-features">
                        <li><i class="fa-solid fa-check"></i> 12 sessions included</li>
                        <li><i class="fa-solid fa-check"></i> Save 10%</li>
                        <li><i class="fa-solid fa-check"></i> Priority booking</li>
                        <li><i class="fa-solid fa-check"></i> Certificate upon completion</li>
                    </ul>
                    <a href="{{ url('/classes/enroll/advanced?package=quarterly') }}" class="pricing-btn">Choose Quarterly</a>
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
                    <p>Completion of Intermediate Class or equivalent experience with a coach assessment. Tournament experience is recommended.</p>
                </div>

                <div class="faq-item">
                    <h3>Can I join without taking Intermediate Class?</h3>
                    <p>Yes — subject to a skills assessment with Coach Alex.</p>
                </div>

                <div class="faq-item">
                    <h3>Is this class for tournament players?</h3>
                    <p>Yes — it's designed for players who compete or plan to compete in tournaments.</p>
                </div>

                <div class="faq-item">
                    <h3>What makes this class different?</h3>
                    <p>Higher intensity drills, advanced tactics, and competitive match simulations.</p>
                </div>

                <div class="faq-item">
                    <h3>What gear do I need?</h3>
                    <p>Comfortable clothes, indoor shoes, and a water bottle. Rackets and shuttlecocks are available for rent.</p>
                </div>

                <div class="faq-item">
                    <h3>How long is each session?</h3>
                    <p>Each session is 1 hour long, twice a week (weekends).</p>
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

            <h2>Ready to Compete at the Highest Level?</h2>

            <p>
                Join the Advanced Class today and train<br>
                like a champion.
            </p>

            <a href="{{ url('/classes/enroll/advanced') }}" class="ready-btn">
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