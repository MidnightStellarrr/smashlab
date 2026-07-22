<!DOCTYPE html>
<html lang="en" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Now - SmashLab</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

    <link rel="stylesheet" href="{{ asset('css/user/partials/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/user/book_now.css') }}">

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
    @include('user.partials.hero', [
        'mainHeading' => 'Book Now',
        'subHeading' => 'Reserve your spot at SmashLab — where every game is an adventure.'
    ])

    <!-- ========================================
            FORM PROGRESS - ABOVE EVERYTHING
    ======================================== -->

    <div class="progress-wrapper">
        <div class="form-progress">
            <div class="progress-step active">
                <span class="step-number">01</span>
                <span class="step-label">Choose Date & Time</span>
            </div>
            <div class="progress-line"></div>
            <div class="progress-step">
                <span class="step-number">02</span>
                <span class="step-label">Select Court</span>
            </div>
            <div class="progress-line"></div>
            <div class="progress-step">
                <span class="step-number">03</span>
                <span class="step-label">Review and Payment</span>
            </div>
            <div class="progress-line"></div>
            <div class="progress-step">
                <span class="step-number">04</span>
                <span class="step-label">Confirmation</span>
            </div>
        </div>
    </div>

    <!-- ========================================
            BOOKING SECTION
    ======================================== -->

    <section class="booking-section">

        <div class="booking-container">

            <!-- LEFT: Schedule Card -->

            <div class="schedule-card">

                <div class="schedule-date">
                    <i class="fa-regular fa-calendar"></i>
                    <span id="currentDate">December 7, 2026</span>
                </div>

                <div class="schedule-table-wrapper">

                    <table class="schedule-table">

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
                            <tr>
                                <td>10:00 AM</td>
                                <td><span class="available">Available</span></td>
                                <td><span class="reserved">Reserved</span></td>
                                <td><span class="available">Available</span></td>
                                <td><span class="available">Available</span></td>
                            </tr>
                            <tr>
                                <td>11:00 AM</td>
                                <td><span class="available">Available</span></td>
                                <td><span class="available">Available</span></td>
                                <td><span class="reserved">Reserved</span></td>
                                <td><span class="available">Available</span></td>
                            </tr>
                            <tr>
                                <td>12:00 PM</td>
                                <td><span class="reserved">Reserved</span></td>
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
                                <td><span class="available">Available</span></td>
                                <td><span class="reserved">Reserved</span></td>
                            </tr>
                            <tr>
                                <td>4:00 PM</td>
                                <td><span class="available">Available</span></td>
                                <td><span class="available">Available</span></td>
                                <td><span class="reserved">Reserved</span></td>
                                <td><span class="available">Available</span></td>
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
                        </tbody>

                    </table>

                </div>

                <div class="legend">
                    <div><span class="circle green"></span>Available</div>
                    <div><span class="circle red"></span>Reserved</div>
                    <div><span class="circle yellow"></span>Under Maintenance</div>
                </div>

            </div>

            <!-- RIGHT: Booking Form -->

            <div class="booking-form">

                <!-- ========================================
                        STEP 1: DATE & TIME
                ======================================== -->

                <div class="form-step active" data-step="1">

                    <div class="form-header">
                        <h2>Date & Time</h2>
                        <p>Pick your preferred date and time to get started.</p>
                    </div>

                    <hr>

                    <div class="form-group">
                        <label for="bookingDate">Date</label>
                        <input type="date" id="bookingDate" class="form-input">
                    </div>

                    <div class="form-group">
                        <label for="bookingTime">Time</label>
                        <select id="bookingTime" class="form-input">
                            <option value="">Select a time</option>
                            <option value="10:00">10:00 AM</option>
                            <option value="11:00">11:00 AM</option>
                            <option value="12:00">12:00 PM</option>
                            <option value="13:00">1:00 PM</option>
                            <option value="14:00">2:00 PM</option>
                            <option value="15:00">3:00 PM</option>
                            <option value="16:00">4:00 PM</option>
                            <option value="17:00">5:00 PM</option>
                            <option value="18:00">6:00 PM</option>
                            <option value="19:00">7:00 PM</option>
                            <option value="20:00">8:00 PM</option>
                            <option value="21:00">9:00 PM</option>
                            <option value="22:00">10:00 PM</option>
                        </select>
                    </div>

                    <button type="button" class="btn-next">Next Step <i class="fa-solid fa-arrow-right"></i></button>
                </div>

                <!-- ========================================
                        STEP 2: SELECT COURT
                ======================================== -->

                <div class="form-step" data-step="2">

                    <div class="form-header">
                        <h2>Select Court</h2>
                        <p>Choose your preferred court from the available options.</p>
                    </div>

                    <hr>

                    <div class="form-group">
                        <label for="bookingCourt">Court Preference</label>
                        <select id="bookingCourt" class="form-input">
                            <option value="">Any Court</option>
                            <option value="1">Court 1</option>
                            <option value="2">Court 2</option>
                            <option value="3">Court 3</option>
                            <option value="4">Court 4</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Number of Players</label>
                        <select id="playerCount" class="form-input">
                            <option value="1">1 Player</option>
                            <option value="2" selected>2 Players</option>
                            <option value="3">3 Players</option>
                            <option value="4">4 Players</option>
                            <option value="5">5 Players</option>
                            <option value="6">6 Players</option>
                            <option value="7">7 Players</option>
                            <option value="8">8 Players</option>
                        </select>
                    </div>

                    <div class="form-actions">
                        <button type="button" class="btn-prev"><i class="fa-solid fa-arrow-left"></i> Back</button>
                        <button type="button" class="btn-next">Next Step <i class="fa-solid fa-arrow-right"></i></button>
                    </div>
                </div>

                <!-- ========================================
                        STEP 3: REVIEW AND PAYMENT
                ======================================== -->

                <div class="form-step" data-step="3">

                    <div class="form-header">
                        <h2>Review and Payment</h2>
                        <p>Review your booking details and choose your payment method.</p>
                    </div>

                    <hr>

                    <div class="booking-summary">
                        <div class="summary-row">
                            <span>Date:</span>
                            <span id="summaryDate">December 7, 2026</span>
                        </div>
                        <div class="summary-row">
                            <span>Time:</span>
                            <span id="summaryTime">6:00 PM</span>
                        </div>
                        <div class="summary-row">
                            <span>Court:</span>
                            <span id="summaryCourt">Court 1</span>
                        </div>
                        <div class="summary-row">
                            <span>Players:</span>
                            <span id="summaryPlayers">2 Players</span>
                        </div>
                        <div class="summary-row total">
                            <span>Total:</span>
                            <span id="summaryTotal">₱200.00</span>
                        </div>
                    </div>

                    <div class="payment-options">
                        <label class="payment-option">
                            <input type="radio" name="payment" value="gcash" checked>
                            GCash
                        </label>
                        <label class="payment-option">
                            <input type="radio" name="payment" value="maya">
                            Maya
                        </label>
                        <label class="payment-option">
                            <input type="radio" name="payment" value="frontdesk">
                            Front Desk
                        </label>
                    </div>

                    <div class="form-actions">
                        <button type="button" class="btn-prev"><i class="fa-solid fa-arrow-left"></i> Back</button>
                        <button type="button" class="btn-next">Next Step <i class="fa-solid fa-arrow-right"></i></button>
                    </div>
                </div>

                <!-- ========================================
                        STEP 4: CONFIRMATION
                ======================================== -->

                <div class="form-step" data-step="4">

                    <div class="confirmation-content">
                        <div class="confirmation-icon">
                            <i class="fa-solid fa-check-circle"></i>
                        </div>
                        <h2>Booking Confirmed!</h2>
                        <p>Your court has been successfully reserved.</p>

                        <div class="booking-details">
                            <div class="detail-row">
                                <span>Booking Reference:</span>
                                <strong>#BK-2026-001</strong>
                            </div>
                            <div class="detail-row">
                                <span>Date:</span>
                                <strong id="confirmDate">December 7, 2026</strong>
                            </div>
                            <div class="detail-row">
                                <span>Time:</span>
                                <strong id="confirmTime">6:00 PM</strong>
                            </div>
                            <div class="detail-row">
                                <span>Court:</span>
                                <strong id="confirmCourt">Court 1</strong>
                            </div>
                            <div class="detail-row">
                                <span>Total Paid:</span>
                                <strong id="confirmTotal">₱200.00</strong>
                            </div>
                        </div>

                        <p class="confirmation-note">
                            <i class="fa-regular fa-envelope"></i>
                            A confirmation email has been sent to your registered email address.
                        </p>

                        <a href="{{ url('/') }}" class="btn-done">
                            <i class="fa-solid fa-home"></i> Back to Home
                        </a>
                    </div>

                </div>

            </div>

        </div>

    </section>

    <!-- ========================================
            FOOTER
    ======================================== -->
    @include('user.partials.footer')

    <script>
        document.addEventListener('DOMContentLoaded', function() {

            // ── Set today's date ──

            const today = new Date();
            const options = { year: 'numeric', month: 'long', day: 'numeric' };
            document.getElementById('currentDate').textContent = today.toLocaleDateString('en-US', options);

            const dateInput = document.getElementById('bookingDate');
            if (dateInput) {
                const year = today.getFullYear();
                const month = String(today.getMonth() + 1).padStart(2, '0');
                const day = String(today.getDate()).padStart(2, '0');
                dateInput.value = `${year}-${month}-${day}`;
            }

            // ── Form Progress ──

            const steps = document.querySelectorAll('.form-step');
            const progressSteps = document.querySelectorAll('.progress-step');
            const progressLines = document.querySelectorAll('.progress-line');
            const nextBtns = document.querySelectorAll('.btn-next');
            const prevBtns = document.querySelectorAll('.btn-prev');
            let currentStep = 1;

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

            function goToStep(step) {
                steps.forEach(el => {
                    el.classList.remove('active');
                    if (parseInt(el.dataset.step) === step) {
                        el.classList.add('active');
                    }
                });
                currentStep = step;
                updateProgress(step);
                document.querySelector('.booking-form').scrollIntoView({ behavior: 'smooth', block: 'start' });
            }

            function validateStep(step) {
                const currentStepEl = document.querySelector(`.form-step[data-step="${step}"]`);
                const inputs = currentStepEl.querySelectorAll('input[required], select[required]');
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

                if (step === 3) {
                    const payment = document.querySelector('input[name="payment"]:checked');
                    if (!payment) {
                        isValid = false;
                        document.querySelector('.payment-options').style.borderColor = '#ef4444';
                    } else {
                        document.querySelector('.payment-options').style.borderColor = '';
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
                        if (step === 2) {
                            updateSummary();
                        }
                        if (step === 3) {
                            updateConfirmation();
                        }
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

            // ── Update Summary ──

            function updateSummary() {
                const date = document.getElementById('bookingDate').value;
                const time = document.getElementById('bookingTime');
                const court = document.getElementById('bookingCourt');
                const players = document.getElementById('playerCount');

                if (date) {
                    const d = new Date(date);
                    document.getElementById('summaryDate').textContent = d.toLocaleDateString('en-US', options);
                }

                if (time && time.value) {
                    document.getElementById('summaryTime').textContent = time.options[time.selectedIndex].text;
                }

                if (court && court.value) {
                    document.getElementById('summaryCourt').textContent = `Court ${court.value}`;
                }

                if (players && players.value) {
                    document.getElementById('summaryPlayers').textContent = `${players.value} Players`;
                }
            }

            // ── Update Confirmation ──

            function updateConfirmation() {
                const date = document.getElementById('bookingDate').value;
                const time = document.getElementById('bookingTime');
                const court = document.getElementById('bookingCourt');

                if (date) {
                    const d = new Date(date);
                    document.getElementById('confirmDate').textContent = d.toLocaleDateString('en-US', options);
                }

                if (time && time.value) {
                    document.getElementById('confirmTime').textContent = time.options[time.selectedIndex].text;
                }

                if (court && court.value) {
                    document.getElementById('confirmCourt').textContent = `Court ${court.value}`;
                }
            }

            // ── Initialize ──

            updateSummary();

        });
    </script>

</body>
</html>