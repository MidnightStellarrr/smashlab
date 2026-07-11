<link rel="stylesheet" href="{{ asset('css/user/partials/footer.css') }}">

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
                <li><a href="{{ url('/') }}">Home</a></li>
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