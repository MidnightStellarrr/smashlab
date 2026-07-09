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
                <li><a href="#">Book Now</a></li>
                <li><a href="#">Classes</a></li>
                <li><a href="#">Shop</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Contact</a></li>
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

                <a href="#" class="learn-btn">
                    Learn more
                </a>

                <a href="#" class="book-btn">
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

    <a href="#" class="book-now-btn">
        + Book now
    </a>

</section>

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
</script>

</body>
</html>