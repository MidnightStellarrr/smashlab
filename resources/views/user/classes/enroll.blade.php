<!DOCTYPE html>
<html lang="en" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enroll - Smash Lab</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

    <link rel="stylesheet" href="{{ asset('css/user/partials/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/user/enroll.css') }}">

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
            HERO SECTION
    ======================================== -->

    <section class="hero-section">
        <div class="hero-overlay"></div>
        <!-- White Diagonal Shape -->
        <div class="hero-shape"></div>
        <div class="hero-container">
            <!-- Left Content -->
            <div class="hero-content">
                <h1>{{ $mainHeading ?? 'Main headline' }}</h1>
                <p>
                    {{ $subHeading ?? 'Sub headline' }}
                </p>
                <!-- Reusable Button -->
                @if(isset($buttonText))
                    <a href="{{ $buttonLink ?? '#' }}" class="hero-btn">
                        {{ $buttonText }} <i class="fa-solid fa-arrow-right"></i>
                    </a>
                @endif
            </div>
            <!-- Right Image -->
            <div class="hero-image">
                <img
                    src="{{ asset('/images/enroll_hero.png') }}"
                    alt="Badminton Player">
            </div>
        </div>
    </section>

    <!-- ========================================
            ENROLLMENT FORM
    ======================================== -->

    <section class="enroll-section">
        <div class="enroll-container">

            <!-- Form Progress -->
            <div class="form-progress">
                <div class="progress-step active">
                    <span class="step-number">1</span>
                    <span class="step-label">Personal Details</span>
                </div>
                <div class="progress-line"></div>
                <div class="progress-step">
                    <span class="step-number">2</span>
                    <span class="step-label">Skills & Experience</span>
                </div>
                <div class="progress-line"></div>
                <div class="progress-step">
                    <span class="step-number">3</span>
                    <span class="step-label">Payment & Commitment</span>
                </div>
            </div>

            <form id="enrollmentForm" class="enrollment-form">

                <!-- ========================================
                        STEP 1: PERSONAL DETAILS
                ======================================== -->

                <div class="form-step active" data-step="1">

                    <div class="form-header">
                        <h2>Personal Details</h2>
                        <p>Tell us a little about yourself so we can get to know you better.</p>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label>First Name <span class="required">*</span></label>
                            <input type="text" name="first_name" placeholder="e.g. Juan" required>
                        </div>
                        <div class="form-group">
                            <label>Last Name <span class="required">*</span></label>
                            <input type="text" name="last_name" placeholder="e.g. Dela Cruz" required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label>Date of Birth <span class="required">*</span></label>
                            <input type="date" name="dob" required>
                        </div>
                        <div class="form-group">
                            <label>Gender</label>
                            <select name="gender">
                                <option value="">Select Gender</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                                <option value="prefer-not-say">Prefer not to say</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label>Phone Number <span class="required">*</span></label>
                            <input type="tel" name="phone" placeholder="e.g. +63 912 345 6789" required>
                        </div>
                        <div class="form-group">
                            <label>Email Address <span class="required">*</span></label>
                            <input type="email" name="email" placeholder="e.g. juan@email.com" required>
                        </div>
                    </div>

                    <!-- Guardian (Under 18) -->
                    <div class="form-row guardian-section">
                        <div class="form-group">
                            <label>Guardian's Name</label>
                            <input type="text" name="guardian_name" placeholder="e.g. Maria Dela Cruz">
                        </div>
                        <div class="form-group">
                            <label>Relationship with Guardian</label>
                            <input type="text" name="guardian_relationship" placeholder="e.g. Mother">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label>Emergency Contact Name <span class="required">*</span></label>
                            <input type="text" name="emergency_name" placeholder="e.g. Maria Dela Cruz" required>
                        </div>
                        <div class="form-group">
                            <label>Emergency Contact Number <span class="required">*</span></label>
                            <input type="tel" name="emergency_phone" placeholder="e.g. +63 912 345 6789" required>
                        </div>
                    </div>

                    <button type="button" class="btn-next">Next Step <i class="fa-solid fa-arrow-right"></i></button>
                </div>

                <!-- ========================================
                        STEP 2: SKILLS & EXPERIENCE
                ======================================== -->

                <div class="form-step" data-step="2">

                    <div class="form-header">
                        <h2>Skills & Experience</h2>
                        <p>Tell us about your badminton background so we can place you in the right class.</p>
                    </div>

                    <!-- Class Selection -->
                    <div class="form-group">
                        <label>Select Class <span class="required">*</span></label>
                        <select name="class_type" id="classType" required>
                            <option value="">Select a class</option>
                            <option value="beginner" {{ request()->segment(2) == 'beginner' ? 'selected' : '' }}>Beginner Class</option>
                            <option value="intermediate" {{ request()->segment(2) == 'intermediate' ? 'selected' : '' }}>Intermediate Class</option>
                            <option value="advanced" {{ request()->segment(2) == 'advanced' ? 'selected' : '' }}>Advanced Class</option>
                        </select>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label>Skill Level <span class="required">*</span></label>
                            <select name="skill_level" required>
                                <option value="">Select your skill level</option>
                                <option value="beginner">Beginner — No experience needed</option>
                                <option value="intermediate">Intermediate — Basic knowledge required</option>
                                <option value="advanced">Advanced — Tournament experience recommended</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Previous Experience (Optional)</label>
                            <input type="text" name="previous_experience" placeholder="e.g. Played in school tournaments">
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Health Conditions (Optional)</label>
                        <textarea name="health_conditions" placeholder="List any health conditions we should know about..."></textarea>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label>Preferred Days</label>
                            <div class="checkbox-group">
                                <label><input type="checkbox" name="days[]" value="mon"> Mon/Wed/Fri</label>
                                <label><input type="checkbox" name="days[]" value="tue"> Tue/Thu</label>
                                <label><input type="checkbox" name="days[]" value="weekend"> Weekends</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Preferred Time</label>
                            <select name="preferred_time">
                                <option value="">Select preferred time</option>
                                <option value="morning">Morning</option>
                                <option value="afternoon">Afternoon</option>
                                <option value="evening">Evening</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-actions">
                        <button type="button" class="btn-prev"><i class="fa-solid fa-arrow-left"></i> Back</button>
                        <button type="button" class="btn-next">Next Step <i class="fa-solid fa-arrow-right"></i></button>
                    </div>
                </div>

                <!-- ========================================
                        STEP 3: PAYMENT & COMMITMENT
                ======================================== -->

                <div class="form-step" data-step="3">

                    <div class="form-header">
                        <h2>Payment & Commitment</h2>
                        <p>Choose a package that works for you and complete your enrollment.</p>
                    </div>

                    <!-- Package Selection -->
                    <div class="form-group">
                        <label>Package Selection <span class="required">*</span></label>
                        <div class="package-options" id="packageOptions">
                            <!-- Will be populated by JavaScript based on class type -->
                        </div>
                    </div>

                    <!-- Payment Method -->
                    <div class="form-group">
                        <label>Payment Method <span class="required">*</span></label>
                        <div class="payment-methods">
                            <div class="payment-option">
                                <input type="radio" name="payment_method" id="payment-gcash" value="gcash">
                                <label for="payment-gcash">
                                    GCash
                                </label>
                            </div>
                            <div class="payment-option">
                                <input type="radio" name="payment_method" id="payment-maya" value="maya">
                                <label for="payment-maya">
                                    Maya
                                </label>
                            </div>
                            <div class="payment-option">
                                <input type="radio" name="payment_method" id="payment-frontdesk" value="frontdesk">
                                <label for="payment-frontdesk">
                                    Front Desk
                                </label>
                            </div>
                        </div>
                    </div>

                    <!-- Waiver -->
                    <div class="form-group waiver-group">
                        <label class="checkbox-label">
                            <input type="checkbox" name="waiver" required>
                            I have read and agree to the <a href="#" class="waiver-link">Waiver and Consent Form</a>
                        </label>
                        <label class="checkbox-label">
                            <input type="checkbox" name="terms" required>
                            I agree to the <a href="#" class="terms-link">Terms and Regulations</a> of Smash Lab
                        </label>
                    </div>

                    <div class="form-actions">
                        <button type="button" class="btn-prev"><i class="fa-solid fa-arrow-left"></i> Back</button>
                        <button type="submit" class="btn-submit">
                            <i class="fa-solid fa-check"></i> Enroll Now
                        </button>
                    </div>
                </div>

            </form>

        </div>
    </section>

    <!-- ========================================
            FOOTER
    ======================================== -->
    @include('user.partials.footer')

    <script>
        document.addEventListener('DOMContentLoaded', function() {

            const steps = document.querySelectorAll('.form-step');
            const progressSteps = document.querySelectorAll('.progress-step');
            const progressLines = document.querySelectorAll('.progress-line');
            const nextBtns = document.querySelectorAll('.btn-next');
            const prevBtns = document.querySelectorAll('.btn-prev');
            let currentStep = 1;
            const totalSteps = 3;

            const classPackages = {
                beginner: [
                    { name: 'Drop-in', price: '₱150', desc: 'per session' },
                    { name: 'Monthly', price: '₱500', desc: 'per month', popular: true },
                    { name: 'Quarterly', price: '₱1,350', desc: 'per quarter' }
                ],
                intermediate: [
                    { name: 'Drop-in', price: '₱180', desc: 'per session' },
                    { name: 'Monthly', price: '₱600', desc: 'per month', popular: true },
                    { name: 'Quarterly', price: '₱1,620', desc: 'per quarter' }
                ],
                advanced: [
                    { name: 'Drop-in', price: '₱250', desc: 'per session' },
                    { name: 'Monthly', price: '₱800', desc: 'per month', popular: true },
                    { name: 'Quarterly', price: '₱2,160', desc: 'per quarter' }
                ]
            };

            // ── Update Package Options ──

            function updatePackages(classType) {
                const container = document.getElementById('packageOptions');
                const packages = classPackages[classType] || classPackages.beginner;
                let html = '';
                packages.forEach(pkg => {
                    const popularClass = pkg.popular ? 'popular-package' : '';
                    const popularBadge = pkg.popular ? '<span class="package-badge">Most Popular</span>' : '';
                    html += `
                        <label class="package-option ${popularClass}">
                            ${popularBadge}
                            <input type="radio" name="package" value="${pkg.name.toLowerCase()}" ${pkg.popular ? 'checked' : ''}>
                            <div class="package-content">
                                <h3>${pkg.name}</h3>
                                <span class="package-price">${pkg.price}</span>
                                <span class="package-desc">${pkg.desc}</span>
                            </div>
                        </label>
                    `;
                });
                container.innerHTML = html;
            }

            // ── Class Type Change ──

            document.getElementById('classType').addEventListener('change', function() {
                const classType = this.value;
                if (classType) {
                    updatePackages(classType);
                }
            });

            // ── Update Progress Bar ──

            function updateProgress(step) {
                progressSteps.forEach((el, index) => {
                    const num = index + 1;
                    el.classList.toggle('active', num <= step);
                    el.classList.toggle('completed', num < step);
                });

                progressLines.forEach((el, index) => {
                    el.classList.toggle('active', index < step - 1);
                });
            }

            // ── Go to Step ──

            function goToStep(step) {
                steps.forEach(el => {
                    el.classList.remove('active');
                    if (parseInt(el.dataset.step) === step) {
                        el.classList.add('active');
                    }
                });
                currentStep = step;
                updateProgress(step);

                // Scroll to top of form
                document.querySelector('.enroll-container').scrollIntoView({ behavior: 'smooth', block: 'start' });
            }

            // ── Validate Step ──

            function validateStep(step) {
                const currentStepEl = document.querySelector(`.form-step[data-step="${step}"]`);
                const inputs = currentStepEl.querySelectorAll('input[required], select[required], textarea[required]');
                let isValid = true;

                inputs.forEach(input => {
                    if (!input.value.trim()) {
                        isValid = false;
                        input.style.borderColor = '#ef4444';
                        input.classList.add('error');
                    } else {
                        input.style.borderColor = '';
                        input.classList.remove('error');
                    }
                });

                // Special validation for step 3 (waiver checkboxes)
                if (step === 3) {
                    const waiver = document.querySelector('input[name="waiver"]');
                    const terms = document.querySelector('input[name="terms"]');
                    if (!waiver.checked || !terms.checked) {
                        isValid = false;
                        document.querySelector('.waiver-group').style.borderColor = '#ef4444';
                    } else {
                        document.querySelector('.waiver-group').style.borderColor = '';
                    }

                    const paymentMethod = document.querySelector('input[name="payment_method"]:checked');
                    if (!paymentMethod) {
                        isValid = false;
                        document.querySelector('.payment-methods').style.borderColor = '#ef4444';
                    } else {
                        document.querySelector('.payment-methods').style.borderColor = '';
                    }
                }

                if (!isValid) {
                    alert('Please fill in all required fields.');
                }

                return isValid;
            }

            // ── Next Button ──

            nextBtns.forEach(btn => {
                btn.addEventListener('click', function() {
                    const step = parseInt(this.closest('.form-step').dataset.step);
                    if (validateStep(step)) {
                        goToStep(step + 1);
                    }
                });
            });

            // ── Prev Button ──

            prevBtns.forEach(btn => {
                btn.addEventListener('click', function() {
                    const step = parseInt(this.closest('.form-step').dataset.step);
                    goToStep(step - 1);
                });
            });

            // ── Form Submit ──

            document.getElementById('enrollmentForm').addEventListener('submit', function(e) {
                e.preventDefault();
                if (validateStep(3)) {
                    alert('🎉 Enrollment successful! You will receive a confirmation email shortly.');
                    // In production, you would submit the form data to the server here
                }
            });

            // ── Initialize with URL parameter ──

            const urlParams = new URLSearchParams(window.location.search);
            const classParam = urlParams.get('class');
            if (classParam) {
                const classSelect = document.getElementById('classType');
                if (classSelect) {
                    classSelect.value = classParam;
                    updatePackages(classParam);
                }
            }

            // ── Initialize default packages ──

            const defaultClass = document.getElementById('classType').value;
            if (defaultClass) {
                updatePackages(defaultClass);
            } else {
                updatePackages('beginner');
            }

        });
    </script>

</body>
</html>