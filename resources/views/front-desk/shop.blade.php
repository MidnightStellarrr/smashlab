@extends('front-desk.layouts.app')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/front-desk/shop.css') }}">
@endpush

@section('title', 'Shop - Front Desk')

@section('header', 'Shop')

@section('content')

<!-- ── Stats Cards ── -->
<div class="stats-grid">
    <div class="stat-card blue">
        <div class="stat-header">
            <div>
                <p class="stat-label">Today's Sales</p>
                <p class="stat-value">₱2,450.00</p>
            </div>
            <div class="stat-icon">
                <i class="fa-solid fa-cash-register"></i>
            </div>
        </div>
        <div class="stat-change positive">
            <i class="fa-solid fa-arrow-up trend-icon"></i> 15% from yesterday
        </div>
    </div>

    <div class="stat-card green">
        <div class="stat-header">
            <div>
                <p class="stat-label">Items Sold</p>
                <p class="stat-value">28</p>
            </div>
            <div class="stat-icon">
                <i class="fa-solid fa-box"></i>
            </div>
        </div>
        <div class="stat-change positive">
            <i class="fa-solid fa-arrow-up trend-icon"></i> 8 new today
        </div>
    </div>

    <div class="stat-card yellow">
        <div class="stat-header">
            <div>
                <p class="stat-label">Active Rentals</p>
                <p class="stat-value">6</p>
            </div>
            <div class="stat-icon">
                <i class="fa-solid fa-clock"></i>
            </div>
        </div>
        <div class="stat-change neutral">
            3 due today
        </div>
    </div>

    <div class="stat-card red">
        <div class="stat-header">
            <div>
                <p class="stat-label">Low Stock Items</p>
                <p class="stat-value">4</p>
            </div>
            <div class="stat-icon">
                <i class="fa-solid fa-triangle-exclamation"></i>
            </div>
        </div>
        <div class="stat-change neutral">
            Needs restocking
        </div>
    </div>
</div>

<!-- ============================================ -->
<!-- PRODUCTS SECTION -->
<!-- ============================================ -->
<div class="shop-section" id="tab-products">
    
    <!-- ── Products Filters ── -->
    <div class="shop-actions">
        <div class="filters">
            <div class="filter-group">
                <i class="fa-solid fa-filter"></i>
                <select class="filter-select" id="productCategoryFilter">
                    <option value="all">All Categories</option>
                    <option value="gear">Gear</option>
                    <option value="snacks">Snacks</option>
                    <option value="drinks">Drinks</option>
                </select>
            </div>
            <div class="filter-group">
                <i class="fa-solid fa-search"></i>
                <input type="text" class="filter-input" id="productSearch" placeholder="Search products...">
            </div>
            <button class="btn-primary" id="addProductBtn">
                <i class="fa-solid fa-plus"></i> Add Product
            </button>
        </div>
    </div>

    <!-- ── Products Table ── -->
    <div class="shop-table-wrapper">
        <table class="shop-table">
            <thead>
                <tr>
                    <th>Product</th>
                    <th>Category</th>
                    <th>Price</th>
                    <th>Stock</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody id="productsTableBody">
                <!-- Product 1 -->
                <tr data-category="gear">
                    <td>
                        <div class="product-info">
                            <div class="product-image">
                                <img src="{{ asset('images/products/racket.jpg') }}" alt="Premium Racket">
                            </div>
                            <div>
                                <div class="product-name">Premium Racket</div>
                                <div class="product-sku">SKU: RKT-001</div>
                            </div>
                        </div>
                    </td>
                    <td><span class="category-badge gear">Gear</span></td>
                    <td>₱150.00</td>
                    <td>
                        <span class="stock-badge in-stock">12</span>
                    </td>
                    <td><span class="status-badge in-stock">In Stock</span></td>
                    <td>
                        <div class="action-buttons">
                            <button class="btn-icon edit" data-id="1" title="Edit"><i class="fa-regular fa-pen-to-square"></i></button>
                            <button class="btn-icon delete" data-id="1" title="Delete"><i class="fa-regular fa-trash-can"></i></button>
                        </div>
                    </td>
                </tr>

                <!-- Product 2 -->
                <tr data-category="gear">
                    <td>
                        <div class="product-info">
                            <div class="product-image">
                                <img src="{{ asset('images/products/shuttlecocks.jpg') }}" alt="Shuttlecocks Tube">
                            </div>
                            <div>
                                <div class="product-name">Shuttlecocks Tube</div>
                                <div class="product-sku">SKU: SHL-002</div>
                            </div>
                        </div>
                    </td>
                    <td><span class="category-badge gear">Gear</span></td>
                    <td>₱80.00</td>
                    <td>
                        <span class="stock-badge low-stock">3</span>
                    </td>
                    <td><span class="status-badge low-stock">Low Stock</span></td>
                    <td>
                        <div class="action-buttons">
                            <button class="btn-icon edit" data-id="2" title="Edit"><i class="fa-regular fa-pen-to-square"></i></button>
                            <button class="btn-icon delete" data-id="2" title="Delete"><i class="fa-regular fa-trash-can"></i></button>
                        </div>
                    </td>
                </tr>

                <!-- Product 3 -->
                <tr data-category="drinks">
                    <td>
                        <div class="product-info">
                            <div class="product-image">
                                <img src="{{ asset('images/products/sports-drink.jpg') }}" alt="Sports Drink">
                            </div>
                            <div>
                                <div class="product-name">Sports Drink</div>
                                <div class="product-sku">SKU: DRK-003</div>
                            </div>
                        </div>
                    </td>
                    <td><span class="category-badge drinks">Drinks</span></td>
                    <td>₱60.00</td>
                    <td>
                        <span class="stock-badge in-stock">25</span>
                    </td>
                    <td><span class="status-badge in-stock">In Stock</span></td>
                    <td>
                        <div class="action-buttons">
                            <button class="btn-icon edit" data-id="3" title="Edit"><i class="fa-regular fa-pen-to-square"></i></button>
                            <button class="btn-icon delete" data-id="3" title="Delete"><i class="fa-regular fa-trash-can"></i></button>
                        </div>
                    </td>
                </tr>

                <!-- Product 4 -->
                <tr data-category="snacks">
                    <td>
                        <div class="product-info">
                            <div class="product-image">
                                <img src="{{ asset('images/products/energy-bar.jpg') }}" alt="Energy Bar">
                            </div>
                            <div>
                                <div class="product-name">Energy Bar</div>
                                <div class="product-sku">SKU: SNK-004</div>
                            </div>
                        </div>
                    </td>
                    <td><span class="category-badge snacks">Snacks</span></td>
                    <td>₱50.00</td>
                    <td>
                        <span class="stock-badge out-of-stock">0</span>
                    </td>
                    <td><span class="status-badge out-of-stock">Out of Stock</span></td>
                    <td>
                        <div class="action-buttons">
                            <button class="btn-icon edit" data-id="4" title="Edit"><i class="fa-regular fa-pen-to-square"></i></button>
                            <button class="btn-icon delete" data-id="4" title="Delete"><i class="fa-regular fa-trash-can"></i></button>
                        </div>
                    </td>
                </tr>

                <!-- Product 5 -->
                <tr data-category="drinks">
                    <td>
                        <div class="product-info">
                            <div class="product-image">
                                <img src="{{ asset('images/products/water-bottle.jpg') }}" alt="Water Bottle">
                            </div>
                            <div>
                                <div class="product-name">Water Bottle</div>
                                <div class="product-sku">SKU: DRK-005</div>
                            </div>
                        </div>
                    </td>
                    <td><span class="category-badge drinks">Drinks</span></td>
                    <td>₱30.00</td>
                    <td>
                        <span class="stock-badge in-stock">30</span>
                    </td>
                    <td><span class="status-badge in-stock">In Stock</span></td>
                    <td>
                        <div class="action-buttons">
                            <button class="btn-icon edit" data-id="5" title="Edit"><i class="fa-regular fa-pen-to-square"></i></button>
                            <button class="btn-icon delete" data-id="5" title="Delete"><i class="fa-regular fa-trash-can"></i></button>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<!-- ============================================ -->
<!-- RENTALS SECTION -->
<!-- ============================================ -->
<div class="shop-section" id="tab-rentals">
    
    <!-- ── Rentals Filters ── -->
    <div class="shop-actions">
        <div class="filters">
            <div class="filter-group">
                <i class="fa-solid fa-search"></i>
                <input type="text" class="filter-input" id="rentalSearch" placeholder="Search rentals...">
            </div>
            <div class="filter-group">
                <i class="fa-solid fa-filter"></i>
                <select class="filter-select" id="rentalStatusFilter">
                    <option value="all">All Status</option>
                    <option value="active">Active</option>
                    <option value="overdue">Overdue</option>
                    <option value="returned">Returned</option>
                </select>
            </div>
            <button class="btn-primary" id="addRentalBtn">
                <i class="fa-solid fa-plus"></i> New Rental
            </button>
        </div>
    </div>

    <!-- ── Rentals Table ── -->
    <div class="shop-table-wrapper">
        <table class="shop-table">
            <thead>
                <tr>
                    <th>Rental ID</th>
                    <th>Customer</th>
                    <th>Gear</th>
                    <th>Rental Time</th>
                    <th>Return Time</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody id="rentalsTableBody">
                <!-- Rental 1 - Active -->
                <tr data-status="active">
                    <td><span class="rental-ref">#RNT-001</span></td>
                    <td>
                        <div class="customer-info">
                            <span class="customer-name">Juan Dela Cruz</span>
                            <span class="customer-phone">+63 912 345 6789</span>
                        </div>
                    </td>
                    <td><span class="gear-badge">Racket</span></td>
                    <td>July 20, 2026 6:00 PM</td>
                    <td>July 20, 2026 8:00 PM</td>
                    <td><span class="rental-status active">Active</span></td>
                    <td>
                        <div class="action-buttons">
                            <button class="btn-icon return" title="Return"><i class="fa-solid fa-rotate-left"></i></button>
                            <button class="btn-icon view" title="View"><i class="fa-regular fa-eye"></i></button>
                        </div>
                    </td>
                </tr>

                <!-- Rental 2 - Overdue -->
                <tr data-status="overdue">
                    <td><span class="rental-ref">#RNT-002</span></td>
                    <td>
                        <div class="customer-info">
                            <span class="customer-name">Maria Santos</span>
                            <span class="customer-phone">+63 923 456 7890</span>
                        </div>
                    </td>
                    <td><span class="gear-badge">Shuttlecocks</span></td>
                    <td>July 20, 2026 4:00 PM</td>
                    <td>July 20, 2026 6:00 PM</td>
                    <td><span class="rental-status overdue">Overdue</span></td>
                    <td>
                        <div class="action-buttons">
                            <button class="btn-icon return" title="Return"><i class="fa-solid fa-rotate-left"></i></button>
                            <button class="btn-icon view" title="View"><i class="fa-regular fa-eye"></i></button>
                        </div>
                    </td>
                </tr>

                <!-- Rental 3 - Active -->
                <tr data-status="active">
                    <td><span class="rental-ref">#RNT-003</span></td>
                    <td>
                        <div class="customer-info">
                            <span class="customer-name">John Doe</span>
                            <span class="customer-phone">+63 934 567 8901</span>
                        </div>
                    </td>
                    <td><span class="gear-badge">Racket + Shuttlecocks</span></td>
                    <td>July 20, 2026 2:00 PM</td>
                    <td>July 20, 2026 4:00 PM</td>
                    <td><span class="rental-status active">Active</span></td>
                    <td>
                        <div class="action-buttons">
                            <button class="btn-icon return" title="Return"><i class="fa-solid fa-rotate-left"></i></button>
                            <button class="btn-icon view" title="View"><i class="fa-regular fa-eye"></i></button>
                        </div>
                    </td>
                </tr>

                <!-- Rental 4 - Returned -->
                <tr data-status="returned">
                    <td><span class="rental-ref">#RNT-004</span></td>
                    <td>
                        <div class="customer-info">
                            <span class="customer-name">Anna Reyes</span>
                            <span class="customer-phone">+63 945 678 9012</span>
                        </div>
                    </td>
                    <td><span class="gear-badge">Racket</span></td>
                    <td>July 19, 2026 5:00 PM</td>
                    <td>July 19, 2026 7:00 PM</td>
                    <td><span class="rental-status returned">Returned</span></td>
                    <td>
                        <div class="action-buttons">
                            <button class="btn-icon view" title="View"><i class="fa-regular fa-eye"></i></button>
                        </div>
                    </td>
                </tr>

                <!-- Rental 5 - Overdue -->
                <tr data-status="overdue">
                    <td><span class="rental-ref">#RNT-005</span></td>
                    <td>
                        <div class="customer-info">
                            <span class="customer-name">Carlos Villanueva</span>
                            <span class="customer-phone">+63 956 789 0123</span>
                        </div>
                    </td>
                    <td><span class="gear-badge">Racket</span></td>
                    <td>July 20, 2026 3:00 PM</td>
                    <td>July 20, 2026 5:00 PM</td>
                    <td><span class="rental-status overdue">Overdue</span></td>
                    <td>
                        <div class="action-buttons">
                            <button class="btn-icon return" title="Return"><i class="fa-solid fa-rotate-left"></i></button>
                            <button class="btn-icon view" title="View"><i class="fa-regular fa-eye"></i></button>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<!-- ── No Results ── -->
<div id="noResults" class="no-results" style="display: none;">
    <i class="fa-solid fa-box-open"></i>
    <h3>No items found</h3>
    <p>Try adjusting your search or filter.</p>
</div>

<!-- ── Add/Edit Product Modal ── -->
<div id="addProductModal" class="shop-modal" style="display: none;">
    <div class="modal-overlay" id="addProductOverlay"></div>
    <div class="modal-container" style="max-width: 500px;">
        <div class="modal-header">
            <h2 id="productModalTitle">Add Product</h2>
            <button class="modal-close" id="addProductClose">&times;</button>
        </div>
        <div class="modal-body">
            <form id="addProductForm">
                <input type="hidden" id="editProductId" value="">
                <div class="form-group">
                    <label>Product Name <span class="required">*</span></label>
                    <input type="text" class="form-input" id="productName" placeholder="Enter product name" required>
                </div>
                <div class="form-group">
                    <label>Category <span class="required">*</span></label>
                    <select class="form-select" id="productCategory" required>
                        <option value="">Select Category</option>
                        <option value="gear">Gear</option>
                        <option value="snacks">Snacks</option>
                        <option value="drinks">Drinks</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Product Image</label>
                    <input type="file" class="form-input" id="productImage" accept="image/*">
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label>Price <span class="required">*</span></label>
                        <input type="number" class="form-input" id="productPrice" placeholder="0.00" required>
                    </div>
                    <div class="form-group">
                        <label>Stock <span class="required">*</span></label>
                        <input type="number" class="form-input" id="productStock" placeholder="0" required>
                    </div>
                </div>
                <div class="form-group">
                    <label>SKU (Optional)</label>
                    <input type="text" class="form-input" id="productSku" placeholder="Enter SKU">
                </div>
                <div class="form-group">
                    <label>Notes</label>
                    <textarea class="form-input" id="productNotes" rows="3" placeholder="Enter any notes about this product (e.g., supplier, storage location, special instructions, etc.)"></textarea>
                </div>
                <div class="modal-actions">
                    <button type="button" class="modal-btn outline" id="addProductCancel">Cancel</button>
                    <button type="submit" class="modal-btn primary" id="productSubmitBtn">
                        <i class="fa-solid fa-plus"></i> Add Product
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- ── Add Rental Modal ── -->
<div id="addRentalModal" class="shop-modal" style="display: none;">
    <div class="modal-overlay" id="addRentalOverlay"></div>
    <div class="modal-container" style="max-width: 500px; max-height: auto; overflow: visible;">
        <div class="modal-header">
            <h2>New Rental</h2>
            <button class="modal-close" id="addRentalClose">&times;</button>
        </div>
        <div class="modal-body" style="max-height: none; overflow: visible; padding-bottom: 0;">
            <form id="addRentalForm">
                <div class="form-group">
                    <label>Customer <span class="required">*</span></label>
                    <input type="text" class="form-input" id="rentalCustomer" placeholder="Search or enter customer name" required>
                </div>
                <div class="form-group">
                    <label>Gear <span class="required">*</span></label>
                    <select class="form-select" id="rentalGear" required>
                        <option value="">Select Gear</option>
                        <option value="racket">Racket</option>
                        <option value="shuttlecocks">Shuttlecocks</option>
                        <option value="both">Racket + Shuttlecocks</option>
                    </select>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label>Rental Time <span class="required">*</span></label>
                        <input type="datetime-local" class="form-input" id="rentalTime" required>
                    </div>
                    <div class="form-group">
                        <label>Return Time <span class="required">*</span></label>
                        <input type="datetime-local" class="form-input" id="returnTime" required>
                    </div>
                </div>
                <div class="form-group">
                    <label>Notes (Optional)</label>
                    <textarea class="form-input" id="rentalNotes" rows="2" placeholder="Any notes about this rental..."></textarea>
                </div>
                <div class="modal-actions">
                    <button type="button" class="modal-btn outline" id="addRentalCancel">Cancel</button>
                    <button type="submit" class="modal-btn primary">
                        <i class="fa-solid fa-plus"></i> Create Rental
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- ── View Rental Modal ── -->
<div id="viewRentalModal" class="shop-modal" style="display: none;">
    <div class="modal-overlay" id="viewRentalOverlay"></div>
    <div class="modal-container" style="max-width: 500px;">
        <div class="modal-header">
            <h2>Rental Details</h2>
            <button class="modal-close" id="viewRentalClose">&times;</button>
        </div>
        <div class="modal-body">
            <div class="rental-details">
                <div class="detail-row">
                    <span class="detail-label">Rental ID</span>
                    <span class="detail-value">#RNT-001</span>
                </div>
                <div class="detail-row">
                    <span class="detail-label">Customer</span>
                    <span class="detail-value">Juan Dela Cruz</span>
                </div>
                <div class="detail-row">
                    <span class="detail-label">Gear</span>
                    <span class="detail-value">Racket</span>
                </div>
                <div class="detail-row">
                    <span class="detail-label">Rental Time</span>
                    <span class="detail-value">July 20, 2026 6:00 PM</span>
                </div>
                <div class="detail-row">
                    <span class="detail-label">Return Time</span>
                    <span class="detail-value">July 20, 2026 8:00 PM</span>
                </div>
                <div class="detail-row">
                    <span class="detail-label">Status</span>
                    <span class="detail-value"><span class="rental-status active">Active</span></span>
                </div>
                <div class="detail-row">
                    <span class="detail-label">Notes</span>
                    <span class="detail-value">-</span>
                </div>
            </div>
            <div class="modal-actions">
                <button class="modal-btn outline" id="viewRentalCloseBtn">Close</button>
                <button class="modal-btn primary" id="returnRentalBtn">
                    <i class="fa-solid fa-rotate-left"></i> Return Gear
                </button>
            </div>
        </div>
    </div>
</div>

@endsection

@push('scripts')
<script>
    // ── Add Product Modal ──
    document.getElementById('addProductBtn').addEventListener('click', function() {
        // Reset form for adding new product
        document.getElementById('editProductId').value = '';
        document.getElementById('productModalTitle').textContent = 'Add Product';
        document.getElementById('productSubmitBtn').innerHTML = '<i class="fa-solid fa-plus"></i> Add Product';
        document.getElementById('addProductForm').reset();
        document.getElementById('addProductModal').style.display = 'flex';
        document.body.style.overflow = 'hidden';
    });

    function closeAddProduct() {
        document.getElementById('addProductModal').style.display = 'none';
        document.body.style.overflow = '';
        document.getElementById('addProductForm').reset();
    }

    document.getElementById('addProductClose').addEventListener('click', closeAddProduct);
    document.getElementById('addProductOverlay').addEventListener('click', closeAddProduct);
    document.getElementById('addProductCancel').addEventListener('click', closeAddProduct);

    document.getElementById('addProductForm').addEventListener('submit', function(e) {
        e.preventDefault();
        const productId = document.getElementById('editProductId').value;
        const name = document.getElementById('productName').value;
        const category = document.getElementById('productCategory').value;
        const price = document.getElementById('productPrice').value;
        const stock = document.getElementById('productStock').value;
        const sku = document.getElementById('productSku').value;
        const notes = document.getElementById('productNotes').value;
        
        if (productId) {
            alert(`✅ Product "${name}" updated successfully!\n\n📦 Category: ${category}\n💰 Price: ₱${price}\n📊 Stock: ${stock}\n📝 Notes: ${notes || 'None'}`);
        } else {
            alert(`✅ Product "${name}" added successfully!\n\n📦 Category: ${category}\n💰 Price: ₱${price}\n📊 Stock: ${stock}\n📝 Notes: ${notes || 'None'}`);
        }
        closeAddProduct();
    });

    // ── Edit Product ──
    document.querySelectorAll('#productsTableBody .btn-icon.edit').forEach(btn => {
        btn.addEventListener('click', function() {
            const row = this.closest('tr');
            const productId = this.dataset.id;
            
            // Get product data from the row
            const name = row.querySelector('.product-name')?.textContent || '';
            const sku = row.querySelector('.product-sku')?.textContent?.replace('SKU: ', '') || '';
            const category = row.querySelector('.category-badge')?.textContent?.toLowerCase() || '';
            const price = row.querySelector('td:nth-child(3)')?.textContent?.replace('₱', '') || '';
            const stock = row.querySelector('.stock-badge')?.textContent || '';
            
            // Fill the form with existing data
            document.getElementById('editProductId').value = productId;
            document.getElementById('productModalTitle').textContent = 'Edit Product';
            document.getElementById('productSubmitBtn').innerHTML = '<i class="fa-solid fa-pen-to-square"></i> Update Product';
            document.getElementById('productName').value = name.trim();
            document.getElementById('productCategory').value = category;
            document.getElementById('productPrice').value = parseFloat(price) || '';
            document.getElementById('productStock').value = parseInt(stock) || '';
            document.getElementById('productSku').value = sku.trim();
            document.getElementById('productNotes').value = ''; // Clear notes field for edit
            
            // Open modal
            document.getElementById('addProductModal').style.display = 'flex';
            document.body.style.overflow = 'hidden';
        });
    });

    // ── Delete product ──
    document.querySelectorAll('#productsTableBody .btn-icon.delete').forEach(btn => {
        btn.addEventListener('click', function() {
            const row = this.closest('tr');
            const name = row.querySelector('.product-name')?.textContent || 'this product';
            if (confirm(`Delete "${name}"?`)) {
                row.remove();
                alert('Product deleted successfully!');
                filterTables();
            }
        });
    });

    // ── Add Rental Modal ──
    document.getElementById('addRentalBtn').addEventListener('click', function() {
        document.getElementById('addRentalModal').style.display = 'flex';
        document.body.style.overflow = 'hidden';
    });

    function closeAddRental() {
        document.getElementById('addRentalModal').style.display = 'none';
        document.body.style.overflow = '';
        document.getElementById('addRentalForm').reset();
    }

    document.getElementById('addRentalClose').addEventListener('click', closeAddRental);
    document.getElementById('addRentalOverlay').addEventListener('click', closeAddRental);
    document.getElementById('addRentalCancel').addEventListener('click', closeAddRental);

    document.getElementById('addRentalForm').addEventListener('submit', function(e) {
        e.preventDefault();
        alert('Rental created successfully!');
        closeAddRental();
    });

    // ── View Rental Modal ──
    document.querySelectorAll('#rentalsTableBody .btn-icon.view').forEach(btn => {
        btn.addEventListener('click', function() {
            document.getElementById('viewRentalModal').style.display = 'flex';
            document.body.style.overflow = 'hidden';
        });
    });

    function closeViewRental() {
        document.getElementById('viewRentalModal').style.display = 'none';
        document.body.style.overflow = '';
    }

    document.getElementById('viewRentalClose').addEventListener('click', closeViewRental);
    document.getElementById('viewRentalOverlay').addEventListener('click', closeViewRental);
    document.getElementById('viewRentalCloseBtn').addEventListener('click', closeViewRental);

    document.getElementById('returnRentalBtn').addEventListener('click', function() {
        if (confirm('Return this gear?')) {
            alert('Gear returned successfully!');
            closeViewRental();
        }
    });

    // ── Return rental (from table) ──
    document.querySelectorAll('#rentalsTableBody .btn-icon.return').forEach(btn => {
        btn.addEventListener('click', function() {
            if (confirm('Return this gear?')) {
                const row = this.closest('tr');
                const statusBadge = row.querySelector('.rental-status');
                statusBadge.className = 'rental-status returned';
                statusBadge.textContent = 'Returned';
                alert('Gear returned successfully!');
            }
        });
    });

    // ── Filter functionality ──
    const productSearch = document.getElementById('productSearch');
    const productCategoryFilter = document.getElementById('productCategoryFilter');
    const rentalSearch = document.getElementById('rentalSearch');
    const rentalStatusFilter = document.getElementById('rentalStatusFilter');
    const noResults = document.getElementById('noResults');

    function filterTables() {
        // Check which section is visible
        const productsSection = document.getElementById('tab-products');
        const rentalsSection = document.getElementById('tab-rentals');
        
        // Determine which section is visible (both are visible, but we check if they have display none)
        let isProducts = true;
        if (productsSection.style.display === 'none') {
            isProducts = false;
        }
        
        const rows = isProducts 
            ? document.querySelectorAll('#productsTableBody tr')
            : document.querySelectorAll('#rentalsTableBody tr');
        
        let search = '';
        let categoryFilter = 'all';
        let statusFilter = 'all';
        
        if (isProducts) {
            search = productSearch?.value.toLowerCase().trim() || '';
            categoryFilter = productCategoryFilter?.value || 'all';
        } else {
            search = rentalSearch?.value.toLowerCase().trim() || '';
            statusFilter = rentalStatusFilter?.value || 'all';
        }
        
        let visibleCount = 0;

        rows.forEach(row => {
            const text = row.textContent.toLowerCase();
            let show = true;
            
            // Search filter
            if (search && !text.includes(search)) {
                show = false;
            }
            
            // Category filter for products
            if (isProducts && categoryFilter !== 'all') {
                const rowCategory = row.dataset.category || '';
                if (rowCategory !== categoryFilter) {
                    show = false;
                }
            }
            
            // Status filter for rentals
            if (!isProducts && statusFilter !== 'all') {
                const rowStatus = row.dataset.status || '';
                if (rowStatus !== statusFilter) {
                    show = false;
                }
            }
            
            if (show) {
                row.style.display = '';
                visibleCount++;
            } else {
                row.style.display = 'none';
            }
        });

        // Show/hide no results
        if (visibleCount === 0) {
            noResults.style.display = 'block';
        } else {
            noResults.style.display = 'none';
        }
    }

    // Add event listeners for product filters
    if (productSearch) productSearch.addEventListener('input', filterTables);
    if (productCategoryFilter) productCategoryFilter.addEventListener('change', filterTables);
    
    // Add event listeners for rental filters
    if (rentalSearch) rentalSearch.addEventListener('input', filterTables);
    if (rentalStatusFilter) rentalStatusFilter.addEventListener('change', filterTables);

    // ── Initial filter ──
    setTimeout(filterTables, 100);
</script>
@endpush