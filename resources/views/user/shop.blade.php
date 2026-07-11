<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop - SmashLab</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

    <link rel="stylesheet" href="{{ asset('css/user/partials/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/user/shop.css') }}">
</head>
<body>
    @include('user.partials.navbar')

    <!-- Hero Section -->
    @include('user.partials.hero', [
        'mainHeading' => 'Shop',
        'subHeading' => 'Gear up for your game — from rackets to snacks, we\'ve got you covered.'
    ])

    <!-- ===========================
            SHOP SECTION
    ============================ -->

    <section class="shop-section">

        <div class="shop-container">

            <!-- Shop Header -->
            <div class="shop-header">
                <h2>Our Products</h2>
                <p>Find the perfect gear, snacks, and drinks for your game.</p>
            </div>

            <!-- Shop Controls -->
            <div class="shop-controls">

                <!-- Search Bar -->
                <div class="search-bar">
                    <i class="fa-solid fa-search"></i>
                    <input type="text" id="searchInput" placeholder="Search for products...">
                </div>

                <!-- Categories -->
                <div class="categories">
                    <button class="category-btn active" data-category="all">All</button>
                    <button class="category-btn" data-category="gear">Gear</button>
                    <button class="category-btn" data-category="snacks">Snacks</button>
                    <button class="category-btn" data-category="drinks">Drinks</button>
                </div>

                <!-- Sort -->
                <div class="sort-container">
                    <label for="sortSelect">Sort by:</label>
                    <select id="sortSelect">
                        <option value="popular">Most Popular</option>
                        <option value="price-low">Price: Low to High</option>
                        <option value="price-high">Price: High to Low</option>
                        <option value="name">Name A-Z</option>
                        <option value="newest">Newest Arrivals</option>
                    </select>
                </div>

            </div>

            <!-- Products Grid -->
            <div class="products-grid" id="productsGrid">

                <!-- Product 1 - Premium Racket -->
                <div class="product-card" data-category="gear" data-price="150" data-name="premium racket">
                    <div class="product-image">
                        <img src="/images/badminton_gear.jpg" alt="Premium Racket">
                        <span class="product-badge">Best Seller</span>
                    </div>
                    <div class="product-info">
                        <h3>Premium Racket</h3>
                        <p>Carbon-fiber frame. Lightweight and durable. Perfect for competitive play.</p>
                        <div class="product-rating">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <span>(24)</span>
                        </div>
                        <div class="product-footer">
                            <span class="product-price">₱150 <span class="old-price">₱200</span></span>
                            <button class="add-to-cart">
                                <i class="fa-solid fa-cart-plus"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Product 2 - Shuttlecocks -->
                <div class="product-card" data-category="gear" data-price="80" data-name="shuttlecocks">
                    <div class="product-image">
                        <img src="/images/badminton_gear.jpg" alt="Shuttlecocks">
                        <span class="product-badge sale">Sale</span>
                    </div>
                    <div class="product-info">
                        <h3>Shuttlecocks Tube</h3>
                        <p>Tournament-grade shuttlecocks. Consistent flight and durability.</p>
                        <div class="product-rating">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star-half-stroke"></i>
                            <span>(42)</span>
                        </div>
                        <div class="product-footer">
                            <span class="product-price">₱80</span>
                            <button class="add-to-cart">
                                <i class="fa-solid fa-cart-plus"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Product 3 - Sports Drink -->
                <div class="product-card" data-category="drinks" data-price="60" data-name="sports drink">
                    <div class="product-image">
                        <img src="/images/badminton_gear.jpg" alt="Sports Drink">
                    </div>
                    <div class="product-info">
                        <h3>Sports Drink</h3>
                        <p>Electrolyte-infused drink. Stay hydrated during your game.</p>
                        <div class="product-rating">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                            <span>(18)</span>
                        </div>
                        <div class="product-footer">
                            <span class="product-price">₱60</span>
                            <button class="add-to-cart">
                                <i class="fa-solid fa-cart-plus"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Product 4 - Energy Bar -->
                <div class="product-card" data-category="snacks" data-price="50" data-name="energy bar">
                    <div class="product-image">
                        <img src="/images/badminton_gear.jpg" alt="Energy Bar">
                        <span class="product-badge">New</span>
                    </div>
                    <div class="product-info">
                        <h3>Energy Bar</h3>
                        <p>Protein-packed energy bar. Perfect for a quick boost.</p>
                        <div class="product-rating">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                            <span>(31)</span>
                        </div>
                        <div class="product-footer">
                            <span class="product-price">₱50</span>
                            <button class="add-to-cart">
                                <i class="fa-solid fa-cart-plus"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Product 5 - Standard Racket -->
                <div class="product-card" data-category="gear" data-price="100" data-name="standard racket">
                    <div class="product-image">
                        <img src="/images/badminton_gear.jpg" alt="Standard Racket">
                    </div>
                    <div class="product-info">
                        <h3>Standard Racket</h3>
                        <p>Durable aluminum racket. Great for casual games and practice.</p>
                        <div class="product-rating">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                            <span>(56)</span>
                        </div>
                        <div class="product-footer">
                            <span class="product-price">₱100</span>
                            <button class="add-to-cart">
                                <i class="fa-solid fa-cart-plus"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Product 6 - Water Bottle -->
                <div class="product-card" data-category="drinks" data-price="30" data-name="water bottle">
                    <div class="product-image">
                        <img src="/images/badminton_gear.jpg" alt="Water Bottle">
                    </div>
                    <div class="product-info">
                        <h3>Water Bottle</h3>
                        <p>Refreshing purified water. Stay hydrated on the court.</p>
                        <div class="product-rating">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                            <span>(78)</span>
                        </div>
                        <div class="product-footer">
                            <span class="product-price">₱30</span>
                            <button class="add-to-cart">
                                <i class="fa-solid fa-cart-plus"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Product 7 - Grip Tape -->
                <div class="product-card" data-category="gear" data-price="45" data-name="grip tape">
                    <div class="product-image">
                        <img src="/images/badminton_gear.jpg" alt="Grip Tape">
                        <span class="product-badge sale">Sale</span>
                    </div>
                    <div class="product-info">
                        <h3>Grip Tape</h3>
                        <p>Premium overgrip. Anti-slip for better control.</p>
                        <div class="product-rating">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                            <span>(63)</span>
                        </div>
                        <div class="product-footer">
                            <span class="product-price">₱45 <span class="old-price">₱60</span></span>
                            <button class="add-to-cart">
                                <i class="fa-solid fa-cart-plus"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Product 8 - Snack Pack -->
                <div class="product-card" data-category="snacks" data-price="120" data-name="snack pack">
                    <div class="product-image">
                        <img src="/images/badminton_gear.jpg" alt="Snack Pack">
                        <span class="product-badge">New</span>
                    </div>
                    <div class="product-info">
                        <h3>Snack Pack</h3>
                        <p>Assorted crackers and nuts. Perfect for sharing.</p>
                        <div class="product-rating">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <span>(27)</span>
                        </div>
                        <div class="product-footer">
                            <span class="product-price">₱120</span>
                            <button class="add-to-cart">
                                <i class="fa-solid fa-cart-plus"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Product 9 - Pro Racket -->
                <div class="product-card" data-category="gear" data-price="250" data-name="pro racket">
                    <div class="product-image">
                        <img src="/images/badminton_gear.jpg" alt="Pro Racket">
                        <span class="product-badge">Best Seller</span>
                    </div>
                    <div class="product-info">
                        <h3>Pro Series Racket</h3>
                        <p>Tournament-grade racket with premium grip and power.</p>
                        <div class="product-rating">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <span>(19)</span>
                        </div>
                        <div class="product-footer">
                            <span class="product-price">₱250</span>
                            <button class="add-to-cart">
                                <i class="fa-solid fa-cart-plus"></i>
                            </button>
                        </div>
                    </div>
                </div>

            </div>

            <!-- No Results Message -->
            <div class="no-results" id="noResults">
                <i class="fa-solid fa-search"></i>
                <h3>No products found</h3>
                <p>Try adjusting your search or filter.</p>
            </div>

        </div>

    </section>

    <!-- ===========================
            FOOTER
    ============================ -->
    @include('user.partials.footer')

    <script>
        document.addEventListener('DOMContentLoaded', function() {

            const products = document.querySelectorAll('.product-card');
            const searchInput = document.getElementById('searchInput');
            const categoryBtns = document.querySelectorAll('.category-btn');
            const sortSelect = document.getElementById('sortSelect');
            const noResults = document.getElementById('noResults');
            const productsGrid = document.getElementById('productsGrid');

            let currentCategory = 'all';
            let currentSearch = '';

            function filterProducts() {
                let visibleCount = 0;

                products.forEach(product => {
                    const category = product.dataset.category;
                    const name = product.dataset.name;
                    const searchMatch = name.includes(currentSearch.toLowerCase());
                    const categoryMatch = currentCategory === 'all' || category === currentCategory;

                    if (searchMatch && categoryMatch) {
                        product.style.display = '';
                        visibleCount++;
                    } else {
                        product.style.display = 'none';
                    }
                });

                if (visibleCount === 0) {
                    noResults.style.display = 'block';
                } else {
                    noResults.style.display = 'none';
                }
            }

            function sortProducts() {
                const sortValue = sortSelect.value;
                const productArray = Array.from(products);

                productArray.sort((a, b) => {
                    const priceA = parseInt(a.dataset.price);
                    const priceB = parseInt(b.dataset.price);
                    const nameA = a.dataset.name;
                    const nameB = b.dataset.name;

                    switch (sortValue) {
                        case 'price-low':
                            return priceA - priceB;
                        case 'price-high':
                            return priceB - priceA;
                        case 'name':
                            return nameA.localeCompare(nameB);
                        case 'popular':
                        case 'newest':
                        default:
                            return 0;
                    }
                });

                productArray.forEach(product => {
                    productsGrid.appendChild(product);
                });
            }

            // Search
            searchInput.addEventListener('input', function() {
                currentSearch = this.value.trim();
                filterProducts();
            });

            // Categories
            categoryBtns.forEach(btn => {
                btn.addEventListener('click', function() {
                    categoryBtns.forEach(b => b.classList.remove('active'));
                    this.classList.add('active');
                    currentCategory = this.dataset.category;
                    filterProducts();
                });
            });

            // Sort
            sortSelect.addEventListener('change', function() {
                sortProducts();
                filterProducts();
            });

            // Add to Cart
            document.querySelectorAll('.add-to-cart').forEach(btn => {
                btn.addEventListener('click', function(e) {
                    e.stopPropagation();
                    const card = this.closest('.product-card');
                    const name = card.querySelector('h3').textContent;
                    const price = card.querySelector('.product-price').textContent.trim();

                    // Simple feedback
                    const originalText = this.innerHTML;
                    this.innerHTML = '<i class="fa-solid fa-check"></i>';
                    this.style.background = '#22c55e';

                    setTimeout(() => {
                        this.innerHTML = originalText;
                        this.style.background = '';
                    }, 1500);
                });
            });

        });
    </script>

</body>
</html>