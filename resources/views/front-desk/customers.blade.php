@extends('front-desk.layouts.app')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/front-desk/customers.css') }}">
@endpush

@section('title', 'Customers - Front Desk')

@section('header', 'Customers')

@section('content')

<!-- ── Stats Cards ── -->
<div class="stats-grid">
    <div class="stat-card blue">
        <div class="stat-header">
            <div>
                <p class="stat-label">Total Customers</p>
                <p class="stat-value">156</p>
            </div>
            <div class="stat-icon">
                <i class="fa-solid fa-users"></i>
            </div>
        </div>
        <div class="stat-change positive">
            <i class="fa-solid fa-arrow-up trend-icon"></i> 12 new this month
        </div>
    </div>

    <div class="stat-card green">
        <div class="stat-header">
            <div>
                <p class="stat-label">Active Customers</p>
                <p class="stat-value">89</p>
            </div>
            <div class="stat-icon">
                <i class="fa-solid fa-user-check"></i>
            </div>
        </div>
        <div class="stat-change positive">
            <i class="fa-solid fa-arrow-up trend-icon"></i> 5 this week
        </div>
    </div>

    <div class="stat-card yellow">
        <div class="stat-header">
            <div>
                <p class="stat-label">Total Bookings</p>
                <p class="stat-value">342</p>
            </div>
            <div class="stat-icon">
                <i class="fa-solid fa-calendar-check"></i>
            </div>
        </div>
        <div class="stat-change neutral">
            Lifetime bookings
        </div>
    </div>

    <div class="stat-card red">
        <div class="stat-header">
            <div>
                <p class="stat-label">New Customers</p>
                <p class="stat-value">8</p>
            </div>
            <div class="stat-icon">
                <i class="fa-solid fa-user-plus"></i>
            </div>
        </div>
        <div class="stat-change positive">
            <i class="fa-solid fa-arrow-up trend-icon"></i> This week
        </div>
    </div>
</div>

<!-- ── Filters and Actions ── -->
<div class="customers-actions">
    <div class="filters">
        <div class="filter-group">
            <i class="fa-solid fa-filter"></i>
            <select class="filter-select" id="statusFilter">
                <option value="all">All Customers</option>
                <option value="active">Active</option>
                <option value="inactive">Inactive</option>
            </select>
        </div>
        <div class="filter-group">
            <i class="fa-solid fa-calendar"></i>
            <select class="filter-select" id="dateFilter">
                <option value="all">All Time</option>
                <option value="today">Today</option>
                <option value="week">This Week</option>
                <option value="month">This Month</option>
            </select>
        </div>
        <div class="filter-group">
            <i class="fa-solid fa-search"></i>
            <input type="text" class="filter-input" id="searchFilter" placeholder="Search by name, phone, or email...">
        </div>
    </div>
</div>

<!-- ── Customers Table ── -->
<div class="customers-table-wrapper">
    <table class="customers-table">
        <thead>
            <tr>
                <th>Customer</th>
                <th>Contact</th>
                <th>Total Bookings</th>
                <th>Last Visit</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody id="customersTableBody">
            <!-- Customer 1 -->
            <tr>
                <td>
                    <div class="customer-info">
                        <div class="customer-avatar">JD</div>
                        <div>
                            <div class="customer-name">Juan Dela Cruz</div>
                            <div class="customer-since">Member since Jan 2026</div>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="contact-info">
                        <div><i class="fa-solid fa-phone"></i> +63 912 345 6789</div>
                        <div><i class="fa-solid fa-envelope"></i> juan@email.com</div>
                    </div>
                </td>
                <td><span class="booking-count">12</span></td>
                <td>July 20, 2026</td>
                <td><span class="status-badge active">Active</span></td>
                <td>
                    <div class="action-buttons">
                        <button class="btn-icon view" title="View Profile"><i class="fa-regular fa-eye"></i></button>
                        <button class="btn-icon edit" title="Edit"><i class="fa-regular fa-pen-to-square"></i></button>
                        <button class="btn-icon history" title="Booking History"><i class="fa-solid fa-clock-rotate-left"></i></button>
                    </div>
                </td>
            </tr>

            <!-- Customer 2 -->
            <tr>
                <td>
                    <div class="customer-info">
                        <div class="customer-avatar" style="background: #dbeafe; color: #1f47d8;">MS</div>
                        <div>
                            <div class="customer-name">Maria Santos</div>
                            <div class="customer-since">Member since Mar 2026</div>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="contact-info">
                        <div><i class="fa-solid fa-phone"></i> +63 923 456 7890</div>
                        <div><i class="fa-solid fa-envelope"></i> maria@email.com</div>
                    </div>
                </td>
                <td><span class="booking-count">8</span></td>
                <td>July 19, 2026</td>
                <td><span class="status-badge active">Active</span></td>
                <td>
                    <div class="action-buttons">
                        <button class="btn-icon view" title="View Profile"><i class="fa-regular fa-eye"></i></button>
                        <button class="btn-icon edit" title="Edit"><i class="fa-regular fa-pen-to-square"></i></button>
                        <button class="btn-icon history" title="Booking History"><i class="fa-solid fa-clock-rotate-left"></i></button>
                    </div>
                </td>
            </tr>

            <!-- Customer 3 -->
            <tr>
                <td>
                    <div class="customer-info">
                        <div class="customer-avatar" style="background: #fef3c7; color: #d97706;">JD</div>
                        <div>
                            <div class="customer-name">John Doe</div>
                            <div class="customer-since">Member since Jun 2026</div>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="contact-info">
                        <div><i class="fa-solid fa-phone"></i> +63 934 567 8901</div>
                        <div><i class="fa-solid fa-envelope"></i> john@email.com</div>
                    </div>
                </td>
                <td><span class="booking-count">5</span></td>
                <td>July 18, 2026</td>
                <td><span class="status-badge inactive">Inactive</span></td>
                <td>
                    <div class="action-buttons">
                        <button class="btn-icon view" title="View Profile"><i class="fa-regular fa-eye"></i></button>
                        <button class="btn-icon edit" title="Edit"><i class="fa-regular fa-pen-to-square"></i></button>
                        <button class="btn-icon history" title="Booking History"><i class="fa-solid fa-clock-rotate-left"></i></button>
                    </div>
                </td>
            </tr>

            <!-- Customer 4 -->
            <tr>
                <td>
                    <div class="customer-info">
                        <div class="customer-avatar" style="background: #d1fae5; color: #059669;">AR</div>
                        <div>
                            <div class="customer-name">Anna Reyes</div>
                            <div class="customer-since">Member since Apr 2026</div>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="contact-info">
                        <div><i class="fa-solid fa-phone"></i> +63 945 678 9012</div>
                        <div><i class="fa-solid fa-envelope"></i> anna@email.com</div>
                    </div>
                </td>
                <td><span class="booking-count">15</span></td>
                <td>July 17, 2026</td>
                <td><span class="status-badge active">Active</span></td>
                <td>
                    <div class="action-buttons">
                        <button class="btn-icon view" title="View Profile"><i class="fa-regular fa-eye"></i></button>
                        <button class="btn-icon edit" title="Edit"><i class="fa-regular fa-pen-to-square"></i></button>
                        <button class="btn-icon history" title="Booking History"><i class="fa-solid fa-clock-rotate-left"></i></button>
                    </div>
                </td>
            </tr>

            <!-- Customer 5 -->
            <tr>
                <td>
                    <div class="customer-info">
                        <div class="customer-avatar" style="background: #fce4ec; color: #dc2626;">CV</div>
                        <div>
                            <div class="customer-name">Carlos Villanueva</div>
                            <div class="customer-since">Member since Feb 2026</div>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="contact-info">
                        <div><i class="fa-solid fa-phone"></i> +63 956 789 0123</div>
                        <div><i class="fa-solid fa-envelope"></i> carlos@email.com</div>
                    </div>
                </td>
                <td><span class="booking-count">3</span></td>
                <td>July 15, 2026</td>
                <td><span class="status-badge inactive">Inactive</span></td>
                <td>
                    <div class="action-buttons">
                        <button class="btn-icon view" title="View Profile"><i class="fa-regular fa-eye"></i></button>
                        <button class="btn-icon edit" title="Edit"><i class="fa-regular fa-pen-to-square"></i></button>
                        <button class="btn-icon history" title="Booking History"><i class="fa-solid fa-clock-rotate-left"></i></button>
                    </div>
                </td>
            </tr>

            <!-- Customer 6 - Walk-in -->
            <tr>
                <td>
                    <div class="customer-info">
                        <div class="customer-avatar" style="background: #f3e8ff; color: #7c3aed;">WC</div>
                        <div>
                            <div class="customer-name">Walk-in Customer</div>
                            <div class="customer-since">Member since Jul 2026</div>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="contact-info">
                        <div><i class="fa-solid fa-phone"></i> +63 967 890 1234</div>
                        <div><i class="fa-solid fa-envelope"></i> walkin@email.com</div>
                    </div>
                </td>
                <td><span class="booking-count">1</span></td>
                <td>July 20, 2026</td>
                <td><span class="status-badge active">Active</span></td>
                <td>
                    <div class="action-buttons">
                        <button class="btn-icon view" title="View Profile"><i class="fa-regular fa-eye"></i></button>
                        <button class="btn-icon edit" title="Edit"><i class="fa-regular fa-pen-to-square"></i></button>
                        <button class="btn-icon history" title="Booking History"><i class="fa-solid fa-clock-rotate-left"></i></button>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
</div>

<!-- ── No Results ── -->
<div id="noResults" class="no-results" style="display: none;">
    <i class="fa-solid fa-users-slash"></i>
    <h3>No customers found</h3>
    <p>Try adjusting your search or filter.</p>
</div>

<!-- ── Pagination ── -->
<div class="pagination">
    <div class="pagination-info">
        Showing <span id="showingCount">1-6</span> of <span id="totalCount">156</span> customers
    </div>
    <div class="pagination-buttons">
        <button class="page-btn"><i class="fa-solid fa-chevron-left"></i></button>
        <button class="page-btn active">1</button>
        <button class="page-btn">2</button>
        <button class="page-btn">3</button>
        <button class="page-btn">4</button>
        <button class="page-btn"><i class="fa-solid fa-chevron-right"></i></button>
    </div>
</div>

<!-- ── Add Customer Modal ── -->
<div id="addCustomerModal" class="customer-modal" style="display: none;">
    <div class="modal-overlay" id="addCustomerOverlay"></div>
    <div class="modal-container" style="max-width: 500px;">
        <div class="modal-header">
            <h2>Add New Customer</h2>
            <button class="modal-close" id="addCustomerClose">&times;</button>
        </div>
        <div class="modal-body">
            <form id="addCustomerForm">
                <div class="form-group">
                    <label>Full Name <span class="required">*</span></label>
                    <input type="text" class="form-input" id="customerName" placeholder="Enter full name" required>
                </div>
                <div class="form-group">
                    <label>Phone Number <span class="required">*</span></label>
                    <input type="text" class="form-input" id="customerPhone" placeholder="+63 912 345 6789" required>
                </div>
                <div class="form-group">
                    <label>Email Address</label>
                    <input type="email" class="form-input" id="customerEmail" placeholder="email@example.com">
                </div>
                <div class="form-group">
                    <label>Notes</label>
                    <textarea class="form-input" id="customerNotes" rows="2" placeholder="Any notes about this customer..."></textarea>
                </div>
                <div class="modal-actions">
                    <button type="button" class="modal-btn outline" id="addCustomerCancel">Cancel</button>
                    <button type="submit" class="modal-btn primary" id="addCustomerSubmit">
                        <i class="fa-solid fa-user-plus"></i> Add Customer
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- ── View Customer Modal ── -->
<div id="viewCustomerModal" class="customer-modal" style="display: none;">
    <div class="modal-overlay" id="viewCustomerOverlay"></div>
    <div class="modal-container" style="max-width: 600px;">
        <div class="modal-header">
            <h2>Customer Profile</h2>
            <button class="modal-close" id="viewCustomerClose">&times;</button>
        </div>
        <div class="modal-body">
            <div class="profile-header">
                <div class="profile-avatar">JD</div>
                <div class="profile-info">
                    <h3 id="profileName">Juan Dela Cruz</h3>
                    <p id="profileSince">Member since Jan 2026</p>
                    <span class="status-badge active" id="profileStatus">Active</span>
                </div>
            </div>
            <div class="profile-details">
                <div class="detail-row">
                    <span class="detail-label">Phone</span>
                    <span class="detail-value" id="profilePhone">+63 912 345 6789</span>
                </div>
                <div class="detail-row">
                    <span class="detail-label">Email</span>
                    <span class="detail-value" id="profileEmail">juan@email.com</span>
                </div>
                <div class="detail-row">
                    <span class="detail-label">Total Bookings</span>
                    <span class="detail-value" id="profileBookings">12</span>
                </div>
                <div class="detail-row">
                    <span class="detail-label">Last Visit</span>
                    <span class="detail-value" id="profileLastVisit">July 20, 2026</span>
                </div>
                <div class="detail-row">
                    <span class="detail-label">Notes</span>
                    <span class="detail-value" id="profileNotes">Regular customer, prefers Court 3</span>
                </div>
            </div>
            <div class="profile-actions">
                <button class="modal-btn outline" id="viewCustomerCloseBtn">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- ── Edit Customer Modal ── -->
<div id="editCustomerModal" class="customer-modal" style="display: none;">
    <div class="modal-overlay" id="editCustomerOverlay"></div>
    <div class="modal-container" style="max-width: 550px;">
        <div class="modal-header">
            <div>
                <h2>Edit Customer</h2>
                <p class="modal-subtitle" id="editCustomerSubtitle">Update customer information</p>
            </div>
            <button class="modal-close" id="editCustomerClose">&times;</button>
        </div>
        <div class="modal-body">
            <form id="editCustomerForm">
                <!-- Customer Avatar Preview -->
                <div class="edit-avatar-section">
                    <div class="edit-avatar-preview" id="editAvatarPreview">JD</div>
                    <div class="edit-avatar-info">
                        <span class="edit-avatar-label">Customer Avatar</span>
                        <span class="edit-avatar-hint">Auto-generated from name</span>
                    </div>
                </div>

                <div class="form-group">
                    <label>Full Name <span class="required">*</span></label>
                    <input type="text" class="form-input" id="editCustomerName" placeholder="Enter full name" required>
                    <span class="form-hint">This will update the customer's display name.</span>
                </div>

                <div class="form-group">
                    <label>Phone Number <span class="required">*</span></label>
                    <input type="text" class="form-input" id="editCustomerPhone" placeholder="+63 912 345 6789" required>
                    <span class="form-hint">Primary contact number for this customer.</span>
                </div>

                <div class="form-group">
                    <label>Email Address</label>
                    <input type="email" class="form-input" id="editCustomerEmail" placeholder="email@example.com">
                    <span class="form-hint">Optional but recommended for notifications.</span>
                </div>

                <div class="form-row">
                    <div class="form-group half">
                        <label>Status</label>
                        <select class="form-select" id="editCustomerStatus">
                            <option value="active">Active</option>
                            <option value="inactive">Inactive</option>
                        </select>
                    </div>
                    <div class="form-group half">
                        <label>Member Since</label>
                        <input type="text" class="form-input" id="editCustomerSince" disabled>
                        <span class="form-hint">Read-only</span>
                    </div>
                </div>

                <div class="form-group">
                    <label>Notes</label>
                    <textarea class="form-input" id="editCustomerNotes" rows="3" placeholder="Any notes about this customer..."></textarea>
                </div>

                <div class="modal-actions">
                    <button type="button" class="modal-btn outline" id="editCustomerCancel">
                        <i class="fa-solid fa-xmark"></i> Cancel
                    </button>
                    <button type="submit" class="modal-btn primary" id="editCustomerSubmit">
                        <i class="fa-solid fa-pen-to-square"></i> Update Customer
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- ── Booking History Modal ── -->
<div id="historyModal" class="customer-modal" style="display: none;">
    <div class="modal-overlay" id="historyOverlay"></div>
    <div class="modal-container" style="max-width: 650px;">
        <div class="modal-header">
            <h2>Booking History</h2>
            <button class="modal-close" id="historyClose">&times;</button>
        </div>
        <div class="modal-body">
            <div class="history-customer">
                <strong id="historyCustomerName">Juan Dela Cruz</strong>
                <span class="history-count">12 total bookings</span>
            </div>
            <div class="history-list">
                <div class="history-item">
                    <div class="history-status confirmed"></div>
                    <div class="history-details">
                        <div class="history-title">Court 3 - July 20, 2026</div>
                        <div class="history-meta">6:00 PM - 8:00 PM · ₱450.00</div>
                    </div>
                    <span class="history-status-text confirmed">Confirmed</span>
                </div>
                <div class="history-item">
                    <div class="history-status completed"></div>
                    <div class="history-details">
                        <div class="history-title">Court 1 - July 15, 2026</div>
                        <div class="history-meta">10:00 AM - 12:00 PM · ₱600.00</div>
                    </div>
                    <span class="history-status-text completed">Completed</span>
                </div>
                <div class="history-item">
                    <div class="history-status cancelled"></div>
                    <div class="history-details">
                        <div class="history-title">Court 2 - July 10, 2026</div>
                        <div class="history-meta">2:00 PM - 4:00 PM · ₱500.00</div>
                    </div>
                    <span class="history-status-text cancelled">Cancelled</span>
                </div>
                <div class="history-item">
                    <div class="history-status confirmed"></div>
                    <div class="history-details">
                        <div class="history-title">Court 4 - July 5, 2026</div>
                        <div class="history-meta">5:00 PM - 7:00 PM · ₱350.00</div>
                    </div>
                    <span class="history-status-text confirmed">Confirmed</span>
                </div>
                <div class="history-item">
                    <div class="history-status completed"></div>
                    <div class="history-details">
                        <div class="history-title">Court 3 - June 28, 2026</div>
                        <div class="history-meta">6:00 PM - 8:00 PM · ₱450.00</div>
                    </div>
                    <span class="history-status-text completed">Completed</span>
                </div>
            </div>
            <div class="modal-actions">
                <button class="modal-btn outline" id="historyCloseBtn">Close</button>
            </div>
        </div>
    </div>
</div>

@endsection

@push('scripts')
<script>
    // ── Filter functionality ──
    const searchFilter = document.getElementById('searchFilter');
    const statusFilter = document.getElementById('statusFilter');
    const dateFilter = document.getElementById('dateFilter');
    const tableBody = document.getElementById('customersTableBody');
    const noResults = document.getElementById('noResults');
    const showingCount = document.getElementById('showingCount');
    const totalCount = document.getElementById('totalCount');

    function filterTable() {
        const search = searchFilter.value.toLowerCase().trim();
        const status = statusFilter.value;
        const rows = tableBody.querySelectorAll('tr');
        let visibleCount = 0;

        rows.forEach(row => {
            const text = row.textContent.toLowerCase();
            const rowStatus = row.querySelector('.status-badge')?.textContent.toLowerCase() || '';
            
            let show = true;
            
            if (status !== 'all' && !rowStatus.includes(status)) {
                show = false;
            }
            
            if (search && !text.includes(search)) {
                show = false;
            }
            
            if (show) {
                row.style.display = '';
                visibleCount++;
            } else {
                row.style.display = 'none';
            }
        });

        if (visibleCount === 0) {
            noResults.style.display = 'block';
        } else {
            noResults.style.display = 'none';
        }

        showingCount.textContent = `1-${Math.min(visibleCount, 6)}`;
        totalCount.textContent = visibleCount;
    }

    searchFilter.addEventListener('input', filterTable);
    statusFilter.addEventListener('change', filterTable);
    dateFilter.addEventListener('change', filterTable);

    // ── Helper function to extract text from contact info ──
    function getContactText(contactElement, index) {
        const items = contactElement.querySelectorAll('div');
        if (items[index]) {
            // Get text content and remove the icon text
            return items[index].textContent.replace(/[^\d\s@.+a-zA-Z]/g, '').trim();
        }
        return '';
    }

    // ── View Customer Modal ──
    document.querySelectorAll('.btn-icon.view').forEach(btn => {
        btn.addEventListener('click', function(e) {
            e.stopPropagation();
            const row = this.closest('tr');
            if (!row) return;
            
            const name = row.querySelector('.customer-name')?.textContent || 'Customer';
            const since = row.querySelector('.customer-since')?.textContent || 'Member';
            const contactDivs = row.querySelectorAll('.contact-info div');
            const phone = contactDivs[0] ? contactDivs[0].textContent.replace(/[^\d+\s]/g, '').trim() : 'N/A';
            const email = contactDivs[1] ? contactDivs[1].textContent.replace(/[^\w@.\-+]/g, '').trim() : 'N/A';
            const bookings = row.querySelector('.booking-count')?.textContent || '0';
            const status = row.querySelector('.status-badge')?.textContent || 'Active';
            
            document.getElementById('profileName').textContent = name;
            document.getElementById('profileSince').textContent = since;
            document.getElementById('profilePhone').textContent = phone;
            document.getElementById('profileEmail').textContent = email;
            document.getElementById('profileBookings').textContent = bookings;
            document.getElementById('profileLastVisit').textContent = row.children[3]?.textContent?.trim() || 'N/A';
            document.getElementById('profileStatus').textContent = status;
            document.getElementById('profileStatus').className = `status-badge ${status.toLowerCase()}`;
            
            // Update profile avatar
            const avatar = document.querySelector('.profile-avatar');
            if (avatar) {
                const initials = name.split(' ').map(n => n[0]).join('').toUpperCase().slice(0, 2);
                avatar.textContent = initials;
            }
            
            document.getElementById('viewCustomerModal').style.display = 'flex';
            document.body.style.overflow = 'hidden';
        });
    });

    function closeViewCustomer() {
        document.getElementById('viewCustomerModal').style.display = 'none';
        document.body.style.overflow = '';
    }

    document.getElementById('viewCustomerClose').addEventListener('click', closeViewCustomer);
    document.getElementById('viewCustomerOverlay').addEventListener('click', closeViewCustomer);
    document.getElementById('viewCustomerCloseBtn').addEventListener('click', closeViewCustomer);


    // ── Booking History Modal ──
    document.querySelectorAll('.btn-icon.history').forEach(btn => {
        btn.addEventListener('click', function(e) {
            e.stopPropagation();
            const row = this.closest('tr');
            if (!row) return;
            
            const name = row.querySelector('.customer-name')?.textContent || 'Customer';
            const bookings = row.querySelector('.booking-count')?.textContent || '0';
            
            document.getElementById('historyCustomerName').textContent = name;
            const historyCount = document.querySelector('.history-count');
            if (historyCount) {
                historyCount.textContent = `${bookings} total bookings`;
            }
            
            document.getElementById('historyModal').style.display = 'flex';
            document.body.style.overflow = 'hidden';
        });
    });

    function closeHistory() {
        document.getElementById('historyModal').style.display = 'none';
        document.body.style.overflow = '';
    }

    document.getElementById('historyClose').addEventListener('click', closeHistory);
    document.getElementById('historyOverlay').addEventListener('click', closeHistory);
    document.getElementById('historyCloseBtn').addEventListener('click', closeHistory);

    // ── Edit Customer ──
    document.querySelectorAll('.btn-icon.edit').forEach(btn => {
        btn.addEventListener('click', function(e) {
            e.stopPropagation();
            const row = this.closest('tr');
            if (!row) return;
            
            const name = row.querySelector('.customer-name')?.textContent || '';
            const contactDivs = row.querySelectorAll('.contact-info div');
            const phone = contactDivs[0] ? contactDivs[0].textContent.replace(/[^\d+\s]/g, '').trim() : '';
            const email = contactDivs[1] ? contactDivs[1].textContent.replace(/[^\w@.\-+]/g, '').trim() : '';
            
            // Fill the add customer form with existing data
            document.getElementById('customerName').value = name;
            document.getElementById('customerPhone').value = phone;
            document.getElementById('customerEmail').value = email;
            document.getElementById('customerNotes').value = '';
            
            // Change modal title and button text for editing
            const modalTitle = document.querySelector('#addCustomerModal .modal-header h2');
            const submitBtn = document.getElementById('addCustomerSubmit');
            if (modalTitle) modalTitle.textContent = 'Edit Customer';
            if (submitBtn) {
                submitBtn.innerHTML = '<i class="fa-solid fa-pen-to-square"></i> Update Customer';
            }
            
            document.getElementById('addCustomerModal').style.display = 'flex';
            document.body.style.overflow = 'hidden';
        });
    });

    // ── Add Customer Modal ──
    // Note: The "Add Customer" button has been removed from UI, but modal still works via Edit button
    // If you still want to add customers, you can add a floating button or use the edit modal

    function closeAddCustomer() {
        document.getElementById('addCustomerModal').style.display = 'none';
        document.body.style.overflow = '';
        document.getElementById('addCustomerForm').reset();
        
        // Reset modal title and button
        const modalTitle = document.querySelector('#addCustomerModal .modal-header h2');
        const submitBtn = document.getElementById('addCustomerSubmit');
        if (modalTitle) modalTitle.textContent = 'Add New Customer';
        if (submitBtn) {
            submitBtn.innerHTML = '<i class="fa-solid fa-user-plus"></i> Add Customer';
        }
    }

    document.getElementById('addCustomerClose').addEventListener('click', closeAddCustomer);
    document.getElementById('addCustomerOverlay').addEventListener('click', closeAddCustomer);
    document.getElementById('addCustomerCancel').addEventListener('click', closeAddCustomer);

    document.getElementById('addCustomerForm').addEventListener('submit', function(e) {
        e.preventDefault();
        const name = document.getElementById('customerName').value;
        const phone = document.getElementById('customerPhone').value;
        
        if (!name || !phone) {
            alert('Please fill in all required fields.');
            return;
        }
        
        const isEdit = document.querySelector('#addCustomerModal .modal-header h2')?.textContent === 'Edit Customer';
        alert(`Customer ${name} ${isEdit ? 'updated' : 'added'} successfully!`);
        closeAddCustomer();
        // In production, you would submit the form data here
    });

    // ── Pagination ──
    document.querySelectorAll('.page-btn').forEach(btn => {
        btn.addEventListener('click', function() {
            document.querySelectorAll('.page-btn').forEach(b => b.classList.remove('active'));
            this.classList.add('active');
        });
    });

    // ── Initial filter ──
    filterTable();

    // ── Keyboard shortcuts ──
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') {
            // Close all modals
            document.querySelectorAll('.customer-modal').forEach(modal => {
                modal.style.display = 'none';
            });
            document.body.style.overflow = '';
        }
    });

    // ── Click outside modal to close ──
    document.querySelectorAll('.modal-overlay').forEach(overlay => {
        overlay.addEventListener('click', function() {
            const modal = this.closest('.customer-modal');
            if (modal) {
                modal.style.display = 'none';
                document.body.style.overflow = '';
            }
        });
    });

    console.log('Customers page initialized successfully!');
</script>
@endpush