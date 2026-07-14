<!DOCTYPE html>
<html lang="en">
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
</head>
<body>
    @include('user.partials.navbar')

    <!-- ========================================
            HERO SECTION
    ======================================== -->
    @include('user.partials.hero', [
        'mainHeading' => 'Book Now',
        'subHeading' => 'Reserve your spot at SmashLab — where every game is an adventure.'
    ])

<!-- ========================================
        FORM PROGRESS - 4 STEPS
======================================== -->

<div class="form-progress-wrapper">
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
                                <td><span class="status available">Available</span></td>
                                <td><span class="status reserved">Reserved</span></td>
                                <td><span class="status available">Available</span></td>
                                <td><span class="status available">Available</span></td>
                            </tr>
                            <tr>
                                <td>11:00 AM</td>
                                <td><span class="status available">Available</span></td>
                                <td><span class="status available">Available</span></td>
                                <td><span class="status reserved">Reserved</span></td>
                                <td><span class="status available">Available</span></td>
                            </tr>
                            <tr>
                                <td>12:00 PM</td>
                                <td><span class="status reserved">Reserved</span></td>
                                <td><span class="status available">Available</span></td>
                                <td><span class="status available">Available</span></td>
                                <td><span class="status reserved">Reserved</span></td>
                            </tr>
                            <tr>
                                <td>1:00 PM</td>
                                <td><span class="status reserved">Reserved</span></td>
                                <td><span class="status available">Available</span></td>
                                <td><span class="status reserved">Reserved</span></td>
                                <td><span class="status available">Available</span></td>
                            </tr>
                            <tr>
                                <td>2:00 PM</td>
                                <td><span class="status available">Available</span></td>
                                <td><span class="status reserved">Reserved</span></td>
                                <td><span class="status available">Available</span></td>
                                <td><span class="status reserved">Reserved</span></td>
                            </tr>
                            <tr>
                                <td>3:00 PM</td>
                                <td><span class="status reserved">Reserved</span></td>
                                <td><span class="status reserved">Reserved</span></td>
                                <td><span class="status available">Available</span></td>
                                <td><span class="status reserved">Reserved</span></td>
                            </tr>
                            <tr>
                                <td>4:00 PM</td>
                                <td><span class="status available">Available</span></td>
                                <td><span class="status available">Available</span></td>
                                <td><span class="status reserved">Reserved</span></td>
                                <td><span class="status available">Available</span></td>
                            </tr>
                            <tr>
                                <td>5:00 PM</td>
                                <td><span class="status reserved">Reserved</span></td>
                                <td><span class="status available">Available</span></td>
                                <td><span class="status available">Available</span></td>
                                <td><span class="status reserved">Reserved</span></td>
                            </tr>
                            <tr>
                                <td>6:00 PM</td>
                                <td><span class="status available">Available</span></td>
                                <td><span class="status reserved">Reserved</span></td>
                                <td><span class="status available">Available</span></td>
                                <td><span class="status available">Available</span></td>
                            </tr>
                            <tr>
                                <td>7:00 PM</td>
                                <td><span class="status reserved">Reserved</span></td>
                                <td><span class="status available">Available</span></td>
                                <td><span class="status reserved">Reserved</span></td>
                                <td><span class="status available">Available</span></td>
                            </tr>
                            <tr>
                                <td>8:00 PM</td>
                                <td><span class="status available">Available</span></td>
                                <td><span class="status available">Available</span></td>
                                <td><span class="status reserved">Reserved</span></td>
                                <td><span class="status reserved">Reserved</span></td>
                            </tr>
                            <tr>
                                <td>9:00 PM</td>
                                <td><span class="status reserved">Reserved</span></td>
                                <td><span class="status available">Available</span></td>
                                <td><span class="status available">Available</span></td>
                                <td><span class="status reserved">Reserved</span></td>
                            </tr>
                            <tr>
                                <td>10:00 PM</td>
                                <td><span class="status available">Available</span></td>
                                <td><span class="status reserved">Reserved</span></td>
                                <td><span class="status available">Available</span></td>
                                <td><span class="status available">Available</span></td>
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

                <h2>Date & Time</h2>

                <p>Pick your preferred date and time to get started.</p>

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

                <button class="submit-btn">
                    Check Availability <i class="fa-solid fa-arrow-right"></i>
                </button>

            </div>

        </div>

    </section>

    <!-- ========================================
            FOOTER
    ======================================== -->
    @include('user.partials.footer')

    <script>
        // Set today's date
        document.addEventListener('DOMContentLoaded', function() {
            const today = new Date();
            const options = { year: 'numeric', month: 'long', day: 'numeric' };
            document.getElementById('currentDate').textContent = today.toLocaleDateString('en-US', options);

            // Set default date in input
            const dateInput = document.getElementById('bookingDate');
            if (dateInput) {
                const year = today.getFullYear();
                const month = String(today.getMonth() + 1).padStart(2, '0');
                const day = String(today.getDate()).padStart(2, '0');
                dateInput.value = `${year}-${month}-${day}`;
            }
        });
    </script>

</body>
</html>