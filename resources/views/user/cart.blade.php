<!DOCTYPE html>
<html lang="en" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart - SmashLab</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

    <link rel="stylesheet" href="{{ asset('css/user/partials/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/user/cart.css') }}">

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
        'mainHeading' => 'Your Cart',
        'subHeading' => 'Review your items before checkout.'
    ])

    <!-- ========================================
            CART SECTION
    ======================================== -->

    <section class="cart-section">

        <div class="cart-container">

            <!-- ── Cart Header ── -->
            <div class="cart-header">
                <h2>Shopping Cart</h2>
                <span class="cart-item-count">3 items</span>
            </div>

            <!-- ── Cart Items ── -->
            <div class="cart-items">

                <!-- Item 1 -->
                <div class="cart-item">
                    <div class="cart-item-image">
                        <img src="/images/badminton_gear.jpg" alt="Premium Racket">
                    </div>
                    <div class="cart-item-details">
                        <h3>Premium Racket</h3>
                        <p class="item-description">Carbon-fiber frame. Lightweight and durable.</p>
                        <div class="item-actions">
                            <div class="quantity-control">
                                <button class="qty-btn">−</button>
                                <span class="qty-number">1</span>
                                <button class="qty-btn">+</button>
                            </div>
                            <button class="remove-btn">
                                <i class="fa-regular fa-trash-can"></i> Remove
                            </button>
                        </div>
                    </div>
                    <div class="cart-item-price">
                        <span class="item-price">₱150.00</span>
                        <span class="item-subtotal">₱150.00</span>
                    </div>
                </div>

                <!-- Item 2 -->
                <div class="cart-item">
                    <div class="cart-item-image">
                        <img src="/images/badminton_gear.jpg" alt="Shuttlecocks">
                    </div>
                    <div class="cart-item-details">
                        <h3>Shuttlecocks Tube</h3>
                        <p class="item-description">Tournament-grade shuttlecocks. Consistent flight.</p>
                        <div class="item-actions">
                            <div class="quantity-control">
                                <button class="qty-btn">−</button>
                                <span class="qty-number">2</span>
                                <button class="qty-btn">+</button>
                            </div>
                            <button class="remove-btn">
                                <i class="fa-regular fa-trash-can"></i> Remove
                            </button>
                        </div>
                    </div>
                    <div class="cart-item-price">
                        <span class="item-price">₱80.00</span>
                        <span class="item-subtotal">₱160.00</span>
                    </div>
                </div>

                <!-- Item 3 -->
                <div class="cart-item">
                    <div class="cart-item-image">
                        <img src="/images/badminton_gear.jpg" alt="Sports Drink">
                    </div>
                    <div class="cart-item-details">
                        <h3>Sports Drink</h3>
                        <p class="item-description">Electrolyte-infused drink. Stay hydrated.</p>
                        <div class="item-actions">
                            <div class="quantity-control">
                                <button class="qty-btn">−</button>
                                <span class="qty-number">1</span>
                                <button class="qty-btn">+</button>
                            </div>
                            <button class="remove-btn">
                                <i class="fa-regular fa-trash-can"></i> Remove
                            </button>
                        </div>
                    </div>
                    <div class="cart-item-price">
                        <span class="item-price">₱60.00</span>
                        <span class="item-subtotal">₱60.00</span>
                    </div>
                </div>

            </div>

            <!-- ── Cart Summary ── -->
            <div class="cart-summary">

                <div class="summary-header">
                    <h3>Order Summary</h3>
                </div>

                <div class="summary-row">
                    <span>Subtotal</span>
                    <span class="summary-amount">₱370.00</span>
                </div>

                <div class="summary-row">
                    <span>Service Fee</span>
                    <span class="summary-amount">₱30.00</span>
                </div>

                <div class="summary-divider"></div>

                <div class="summary-row total">
                    <span>Total</span>
                    <span class="summary-amount">₱400.00</span>
                </div>

                <div class="summary-actions">
                    <a href="{{ url('/shop') }}" class="btn-continue">
                        <i class="fa-solid fa-arrow-left"></i> Continue Shopping
                    </a>
                    <a href="{{ url('/checkout') }}" class="btn-checkout">
                        Proceed to Checkout <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>

            </div>

        </div>

    </section>

    <!-- ========================================
            FOOTER
    ======================================== -->
    @include('user.partials.footer')

</body>
</html>