@extends('front-desk.layouts.app')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/front-desk/bookings.css') }}">
@endpush

@section('title', 'Bookings - Front Desk')

@section('header', 'Bookings')

@section('content')

<!-- ── Stats Cards ── -->
<div class="stats-grid">
    <div class="stat-card blue">
        <div class="stat-header">
            <div>
                <p class="stat-label">Today's Bookings</p>
                <p class="stat-value">24</p>
            </div>
            <div class="stat-icon">
                <i class="fa-solid fa-calendar-day"></i>
            </div>
        </div>
        <div class="stat-change positive">
            <i class="fa-solid fa-arrow-up trend-icon"></i> 8% from yesterday
        </div>
    </div>

    <div class="stat-card">
        <div class="stat-header">
            <div>
                <p class="stat-label">Pending</p>
                <p class="stat-value" id="pendingCount">6</p>
            </div>
            <div class="stat-icon">
                <i class="fa-solid fa-clock"></i>
            </div>
        </div>
        <div class="stat-change neutral">
            Awaiting customer confirmation
        </div>
    </div>

    <div class="stat-card green">
        <div class="stat-header">
            <div>
                <p class="stat-label">Confirmed</p>
                <p class="stat-value" id="confirmedCount">14</p>
            </div>
            <div class="stat-icon">
                <i class="fa-solid fa-check-circle"></i>
            </div>
        </div>
        <div class="stat-change positive">
            <i class="fa-solid fa-arrow-up trend-icon"></i> 3 new today
        </div>
    </div>

    <div class="stat-card red">
        <div class="stat-header">
            <div>
                <p class="stat-label">Cancelled</p>
                <p class="stat-value" id="cancelledCount">4</p>
            </div>
            <div class="stat-icon">
                <i class="fa-solid fa-xmark-circle"></i>
            </div>
        </div>
        <div class="stat-change neutral">
            Today's cancellations
        </div>
    </div>
</div>

<!-- ── Filters and Actions ── -->
<div class="bookings-actions">
    <div class="filters">
        <div class="filter-group">
            <i class="fa-solid fa-calendar"></i>
            <input type="date" class="filter-input" id="dateFilter" value="{{ date('Y-m-d') }}">
        </div>
        <div class="filter-group">
            <i class="fa-solid fa-filter"></i>
            <select class="filter-select" id="statusFilter">
                <option value="all">All Status</option>
                <option value="pending">Pending</option>
                <option value="confirmed">Confirmed</option>
                <option value="active">Active</option>
                <option value="completed">Completed</option>
                <option value="cancelled">Cancelled</option>
            </select>
        </div>
        <div class="filter-group">
            <i class="fa-solid fa-magnifying-glass"></i>
            <input type="text" class="filter-input" id="searchFilter" placeholder="Search by name, court, or reference...">
        </div>
    </div>
    <div class="actions">
        <button class="btn-primary" id="walkinBtn">
            <i class="fa-solid fa-user-plus"></i> Walk-in
        </button>
    </div>
</div>

<!-- ── Bookings Table ── -->
<div class="bookings-table-wrapper">
    <table class="bookings-table">
        <thead>
            <tr>
                <th>Booking Ref</th>
                <th>Customer</th>
                <th>Court</th>
                <th>Date</th>
                <th>Time</th>
                <th>Status</th>
                <th>Amount</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody id="bookingsTableBody">
            <!-- Booking 1 - Pending -->
            <tr data-status="pending">
                <td><span class="booking-ref">#BK-2026-001</span></td>
                <td>
                    <div class="customer-info">
                        <span class="customer-name">Juan Dela Cruz</span>
                        <span class="customer-phone">+63 912 345 6789</span>
                    </div>
                </td>
                <td><span class="court-badge">Court 3</span></td>
                <td>July 20, 2026</td>
                <td>6:00 PM - 8:00 PM</td>
                <td><span class="status-badge pending">Pending</span></td>
                <td>₱450.00</td>
                <td>
                    <div class="action-buttons">
                        <button class="btn-icon view" title="View Details"><i class="fa-regular fa-eye"></i></button>
                        <button class="btn-icon cancel" title="Cancel"><i class="fa-solid fa-xmark"></i></button>
                    </div>
                </td>
            </tr>

            <!-- Booking 2 - Confirmed -->
            <tr data-status="confirmed">
                <td><span class="booking-ref">#BK-2026-002</span></td>
                <td>
                    <div class="customer-info">
                        <span class="customer-name">Maria Santos</span>
                        <span class="customer-phone">+63 923 456 7890</span>
                    </div>
                </td>
                <td><span class="court-badge">Court 1</span></td>
                <td>July 20, 2026</td>
                <td>10:00 AM - 12:00 PM</td>
                <td><span class="status-badge confirmed">Confirmed</span></td>
                <td>₱600.00</td>
                <td>
                    <div class="action-buttons">
                        <button class="btn-icon checkin" title="Check-in"><i class="fa-solid fa-user-check"></i></button>
                        <button class="btn-icon view" title="View Details"><i class="fa-regular fa-eye"></i></button>
                        <button class="btn-icon cancel" title="Cancel"><i class="fa-solid fa-xmark"></i></button>
                    </div>
                </td>
            </tr>

            <!-- Booking 3 - Confirmed with extend -->
            <tr data-status="confirmed">
                <td><span class="booking-ref">#BK-2026-003</span></td>
                <td>
                    <div class="customer-info">
                        <span class="customer-name">John Doe</span>
                        <span class="customer-phone">+63 934 567 8901</span>
                    </div>
                </td>
                <td><span class="court-badge">Court 2</span></td>
                <td>July 20, 2026</td>
                <td>2:00 PM - 4:00 PM</td>
                <td><span class="status-badge confirmed">Confirmed</span></td>
                <td>₱500.00</td>
                <td>
                    <div class="action-buttons">
                        <button class="btn-icon checkin" title="Check-in"><i class="fa-solid fa-user-check"></i></button>
                        <button class="btn-icon extend" title="Extend Time"><i class="fa-solid fa-clock"></i></button>
                        <button class="btn-icon view" title="View Details"><i class="fa-regular fa-eye"></i></button>
                        <button class="btn-icon cancel" title="Cancel"><i class="fa-solid fa-xmark"></i></button>
                    </div>
                </td>
            </tr>

            <!-- Booking 4 - Completed -->
            <tr data-status="completed">
                <td><span class="booking-ref">#BK-2026-004</span></td>
                <td>
                    <div class="customer-info">
                        <span class="customer-name">Anna Reyes</span>
                        <span class="customer-phone">+63 945 678 9012</span>
                    </div>
                </td>
                <td><span class="court-badge">Court 4</span></td>
                <td>July 19, 2026</td>
                <td>5:00 PM - 7:00 PM</td>
                <td><span class="status-badge completed">Completed</span></td>
                <td>₱350.00</td>
                <td>
                    <div class="action-buttons">
                        <button class="btn-icon view" title="View Details"><i class="fa-regular fa-eye"></i></button>
                    </div>
                </td>
            </tr>

            <!-- Booking 5 - Cancelled -->
            <tr data-status="cancelled">
                <td><span class="booking-ref">#BK-2026-005</span></td>
                <td>
                    <div class="customer-info">
                        <span class="customer-name">Carlos Villanueva</span>
                        <span class="customer-phone">+63 956 789 0123</span>
                    </div>
                </td>
                <td><span class="court-badge">Court 3</span></td>
                <td>July 18, 2026</td>
                <td>7:00 PM - 9:00 PM</td>
                <td><span class="status-badge cancelled">Cancelled</span></td>
                <td>₱0.00</td>
                <td>
                    <div class="action-buttons">
                        <button class="btn-icon view" title="View Details"><i class="fa-regular fa-eye"></i></button>
                    </div>
                </td>
            </tr>

            <!-- Booking 6 - Active -->
            <tr data-status="active">
                <td><span class="booking-ref">#BK-2026-006</span></td>
                <td>
                    <div class="customer-info">
                        <span class="customer-name">Walk-in Customer</span>
                        <span class="customer-phone">+63 967 890 1234</span>
                    </div>
                </td>
                <td><span class="court-badge">Court 1</span></td>
                <td>July 20, 2026</td>
                <td>4:00 PM - 6:00 PM</td>
                <td><span class="status-badge active">Active</span></td>
                <td>₱450.00</td>
                <td>
                    <div class="action-buttons">
                        <button class="btn-icon extend" title="Extend Time"><i class="fa-solid fa-clock"></i></button>
                        <button class="btn-icon view" title="View Details"><i class="fa-regular fa-eye"></i></button>
                        <button class="btn-icon complete" title="Complete"><i class="fa-solid fa-check-double"></i></button>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
</div>

<!-- ── No Results ── -->
<div id="noResults" class="no-results" style="display: none;">
    <i class="fa-solid fa-search"></i>
    <h3>No bookings found</h3>
    <p>Try adjusting your search or filter.</p>
</div>

<!-- ── Pagination ── -->
<div class="pagination">
    <div class="pagination-info">
        Showing <span id="showingCount">1-6</span> of <span id="totalCount">24</span> bookings
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

<!-- ── Walk-in Modal ── -->
<div id="walkinModal" class="booking-modal" style="display: none;">
    <div class="modal-overlay" id="walkinOverlay"></div>
    <div class="modal-container" style="max-width: 550px;">
        <div class="modal-header">
            <h2>Walk-in Customer</h2>
            <button class="modal-close" id="walkinClose">&times;</button>
        </div>
        <div class="modal-body">
            <!-- Search Existing Customer -->
            <div class="form-section">
                <h3>Customer Lookup</h3>
                <div class="form-group">
                    <label>Search Customer</label>
                    <div class="search-customer-wrapper">
                        <i class="fa-solid fa-search"></i>
                        <input type="text" class="form-input" id="walkinCustomerSearch" placeholder="Search by name or phone...">
                    </div>
                    <div class="customer-suggestions" id="walkinCustomerSuggestions"></div>
                </div>
                <div class="divider-text">
                    <span>OR</span>
                </div>
                <div class="form-group">
                    <label>New Customer</label>
                    <div class="form-row">
                        <div class="form-group">
                            <input type="text" class="form-input" id="walkinName" placeholder="Full Name *">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" id="walkinPhone" placeholder="Phone Number *">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Booking Details -->
            <div class="form-section">
                <h3>Booking Details</h3>
                <div class="form-row">
                    <div class="form-group">
                        <label>Court <span class="required">*</span></label>
                        <select class="form-select" id="walkinCourt" required>
                            <option value="">Select Court</option>
                            <option value="1">Court 1</option>
                            <option value="2">Court 2</option>
                            <option value="3">Court 3</option>
                            <option value="4">Court 4</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Duration <span class="required">*</span></label>
                        <select class="form-select" id="walkinDuration" required>
                            <option value="1">1 hour</option>
                            <option value="2" selected>2 hours</option>
                            <option value="3">3 hours</option>
                            <option value="4">4 hours</option>
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label>Number of Players</label>
                        <select class="form-select" id="walkinPlayers">
                            <option value="1">1 Player</option>
                            <option value="2" selected>2 Players</option>
                            <option value="3">3 Players</option>
                            <option value="4">4 Players</option>
                            <option value="5">5 Players</option>
                            <option value="6">More than 5 players</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Payment Method</label>
                        <select class="form-select" id="walkinPayment">
                            <option value="frontdesk">Front Desk</option>
                            <option value="gcash">GCash</option>
                            <option value="maya">Maya</option>
                        </select>
                    </div>
                </div>
            </div>

            <!-- Additional Options -->
            <div class="form-section">
                <h3>Additional Options</h3>
                <div class="form-row">
                    <div class="form-group">
                        <label>
                            <input type="checkbox" id="walkinAdditionalCourt"> Additional Court
                        </label>
                        <select class="form-select" id="walkinAdditionalCourtSelect" style="display: none; margin-top: 8px;">
                            <option value="">Select Court</option>
                            <option value="1">Court 1</option>
                            <option value="2">Court 2</option>
                            <option value="3">Court 3</option>
                            <option value="4">Court 4</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>
                            <input type="checkbox" id="walkinRentGear"> Rent Gear
                        </label>
                        <select class="form-select" id="walkinGearSelect" style="display: none; margin-top: 8px;">
                            <option value="">Select Gear</option>
                            <option value="racket">Racket</option>
                            <option value="shuttlecocks">Shuttlecocks</option>
                            <option value="both">Racket + Shuttlecocks</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label>Notes (Optional)</label>
                    <textarea class="form-input" id="walkinNotes" rows="2" placeholder="Any special requests or notes..."></textarea>
                </div>
            </div>

            <!-- Summary -->
            <div class="walkin-summary">
                <h4>Booking Summary</h4>
                <div class="summary-row">
                    <span>Customer:</span>
                    <span id="walkinSummaryCustomer">-</span>
                </div>
                <div class="summary-row">
                    <span>Court:</span>
                    <span id="walkinSummaryCourt">-</span>
                </div>
                <div class="summary-row">
                    <span>Duration:</span>
                    <span id="walkinSummaryDuration">-</span>
                </div>
                <div class="summary-row">
                    <span>Players:</span>
                    <span id="walkinSummaryPlayers">-</span>
                </div>
                <div class="summary-row total">
                    <span>Total:</span>
                    <span id="walkinSummaryTotal">₱0.00</span>
                </div>
            </div>

            <div class="modal-actions">
                <button type="button" class="modal-btn outline" id="walkinCancel">Cancel</button>
                <button type="submit" class="modal-btn primary" id="walkinSubmit">
                    <i class="fa-solid fa-user-check"></i> Check-in Walk-in
                </button>
            </div>
        </div>
    </div>
</div>

<!-- ── Booking Details Modal ── -->
<div id="bookingModal" class="booking-modal" style="display: none;">
    <div class="modal-overlay" id="modalOverlay"></div>
    <div class="modal-container">
        <div class="modal-header">
            <h2>Booking Details</h2>
            <button class="modal-close" id="modalClose">&times;</button>
        </div>
        <div class="modal-body">
            <div class="modal-grid">
                <div class="modal-section">
                    <h3>Booking Information</h3>
                    <div class="detail-row">
                        <span class="detail-label">Reference</span>
                        <span class="detail-value">#BK-2026-001</span>
                    </div>
                    <div class="detail-row">
                        <span class="detail-label">Court</span>
                        <span class="detail-value">Court 3</span>
                    </div>
                    <div class="detail-row">
                        <span class="detail-label">Date</span>
                        <span class="detail-value">July 20, 2026</span>
                    </div>
                    <div class="detail-row">
                        <span class="detail-label">Time</span>
                        <span class="detail-value">6:00 PM - 8:00 PM</span>
                    </div>
                    <div class="detail-row">
                        <span class="detail-label">Status</span>
                        <span class="detail-value"><span class="status-badge pending">Pending</span></span>
                    </div>
                    <div class="detail-row">
                        <span class="detail-label">Amount</span>
                        <span class="detail-value">₱450.00</span>
                    </div>
                </div>
                <div class="modal-section">
                    <h3>Customer Information</h3>
                    <div class="detail-row">
                        <span class="detail-label">Name</span>
                        <span class="detail-value">Juan Dela Cruz</span>
                    </div>
                    <div class="detail-row">
                        <span class="detail-label">Phone</span>
                        <span class="detail-value">+63 912 345 6789</span>
                    </div>
                    <div class="detail-row">
                        <span class="detail-label">Email</span>
                        <span class="detail-value">juan@email.com</span>
                    </div>
                    <div class="detail-row">
                        <span class="detail-label">Players</span>
                        <span class="detail-value">2 players</span>
                    </div>
                </div>
            </div>
            <div class="modal-actions">
                <button class="modal-btn outline" id="modalCloseBtn">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- ── Extend Time Modal ── -->
<div id="extendModal" class="booking-modal" style="display: none;">
    <div class="modal-overlay" id="extendOverlay"></div>
    <div class="modal-container" style="max-width: 450px;">
        <div class="modal-header">
            <h2>Extend Booking Time</h2>
            <button class="modal-close" id="extendClose">&times;</button>
        </div>
        <div class="modal-body">
            <div class="extend-info">
                <div class="detail-row">
                    <span class="detail-label">Court</span>
                    <span class="detail-value" id="extendCourt">Court 2</span>
                </div>
                <div class="detail-row">
                    <span class="detail-label">Current Time</span>
                    <span class="detail-value" id="extendCurrent">2:00 PM - 4:00 PM</span>
                </div>
            </div>
            <div class="form-group">
                <label>Additional Time</label>
                <select class="form-select" id="extendTime">
                    <option value="30">+ 30 minutes</option>
                    <option value="60" selected>+ 1 hour</option>
                    <option value="90">+ 1 hour 30 minutes</option>
                    <option value="120">+ 2 hours</option>
                </select>
            </div>
            <div class="form-group">
                <label>Additional Court (Optional)</label>
                <select class="form-select">
                    <option value="">None</option>
                    <option value="1">Court 1</option>
                    <option value="2">Court 2</option>
                    <option value="3">Court 3</option>
                    <option value="4">Court 4</option>
                </select>
            </div>
            <div class="extend-summary">
                <div class="detail-row">
                    <span class="detail-label">Additional Fee</span>
                    <span class="detail-value" style="color: #1f47d8;">₱100.00</span>
                </div>
            </div>
            <div class="modal-actions" style="justify-content: flex-end;">
                <button class="modal-btn outline" id="extendCancel">Cancel</button>
                <button class="modal-btn primary" id="extendConfirm">Confirm Extension</button>
            </div>
        </div>
    </div>
</div>

@endsection

@push('scripts')
<script>
    // ── Filter functionality ──
    const statusFilter = document.getElementById('statusFilter');
    const searchFilter = document.getElementById('searchFilter');
    const dateFilter = document.getElementById('dateFilter');
    const tableBody = document.getElementById('bookingsTableBody');
    const noResults = document.getElementById('noResults');
    const showingCount = document.getElementById('showingCount');
    const totalCount = document.getElementById('totalCount');

    function filterTable() {
        const status = statusFilter.value;
        const search = searchFilter.value.toLowerCase().trim();
        const rows = tableBody.querySelectorAll('tr');
        let visibleCount = 0;
        let statusCounts = {
            pending: 0,
            confirmed: 0,
            active: 0,
            completed: 0,
            cancelled: 0
        };

        rows.forEach(row => {
            const rowStatus = row.dataset.status;
            const text = row.textContent.toLowerCase();
            
            let show = true;
            
            if (status !== 'all' && rowStatus !== status) {
                show = false;
            }
            
            if (search && !text.includes(search)) {
                show = false;
            }
            
            if (show) {
                row.style.display = '';
                visibleCount++;
                if (rowStatus in statusCounts) {
                    statusCounts[rowStatus]++;
                }
            } else {
                row.style.display = 'none';
            }
        });

        document.getElementById('pendingCount').textContent = statusCounts.pending;
        document.getElementById('confirmedCount').textContent = statusCounts.confirmed + statusCounts.active;
        document.getElementById('cancelledCount').textContent = statusCounts.cancelled;

        if (visibleCount === 0) {
            noResults.style.display = 'block';
        } else {
            noResults.style.display = 'none';
        }

        showingCount.textContent = `1-${Math.min(visibleCount, 6)}`;
        totalCount.textContent = visibleCount;
    }

    statusFilter.addEventListener('change', filterTable);
    searchFilter.addEventListener('input', filterTable);
    dateFilter.addEventListener('change', filterTable);

    // ── Walk-in Modal ──
    document.getElementById('walkinBtn').addEventListener('click', function() {
        document.getElementById('walkinModal').style.display = 'flex';
        document.body.style.overflow = 'hidden';
    });

    function closeWalkin() {
        document.getElementById('walkinModal').style.display = 'none';
        document.body.style.overflow = '';
    }

    document.getElementById('walkinClose').addEventListener('click', closeWalkin);
    document.getElementById('walkinOverlay').addEventListener('click', closeWalkin);
    document.getElementById('walkinCancel').addEventListener('click', closeWalkin);

    // ── Walk-in Form Submit ──
    document.getElementById('walkinSubmit').addEventListener('click', function(e) {
        e.preventDefault();
        const name = document.getElementById('walkinName').value;
        const phone = document.getElementById('walkinPhone').value;
        const court = document.getElementById('walkinCourt').value;
        
        if (!name || !phone || !court) {
            alert('Please fill in all required fields.');
            return;
        }
        
        alert(`Walk-in customer ${name} checked in successfully!`);
        closeWalkin();
    });

    // ── Additional Court Toggle ──
    document.getElementById('walkinAdditionalCourt').addEventListener('change', function() {
        const select = document.getElementById('walkinAdditionalCourtSelect');
        select.style.display = this.checked ? 'block' : 'none';
    });

    // ── Rent Gear Toggle ──
    document.getElementById('walkinRentGear').addEventListener('change', function() {
        const select = document.getElementById('walkinGearSelect');
        select.style.display = this.checked ? 'block' : 'none';
    });

    // ── Customer Search Suggestions ──
    document.getElementById('walkinCustomerSearch').addEventListener('input', function() {
        const query = this.value.toLowerCase();
        const suggestions = document.getElementById('walkinCustomerSuggestions');
        
        if (query.length < 2) {
            suggestions.style.display = 'none';
            return;
        }
        
        // Sample customer data (replace with actual data from backend)
        const customers = [
            { name: 'Juan Dela Cruz', phone: '+63 912 345 6789' },
            { name: 'Maria Santos', phone: '+63 923 456 7890' },
            { name: 'John Doe', phone: '+63 934 567 8901' }
        ];
        
        const filtered = customers.filter(c => 
            c.name.toLowerCase().includes(query) || 
            c.phone.includes(query)
        );
        
        if (filtered.length > 0) {
            suggestions.innerHTML = filtered.map(c => 
                `<div class="suggestion-item" data-name="${c.name}" data-phone="${c.phone}">
                    <strong>${c.name}</strong> - ${c.phone}
                </div>`
            ).join('');
            suggestions.style.display = 'block';
            
            // Click handler for suggestions
            suggestions.querySelectorAll('.suggestion-item').forEach(item => {
                item.addEventListener('click', function() {
                    document.getElementById('walkinName').value = this.dataset.name;
                    document.getElementById('walkinPhone').value = this.dataset.phone;
                    document.getElementById('walkinCustomerSearch').value = this.dataset.name;
                    suggestions.style.display = 'none';
                    updateWalkinSummary();
                });
            });
        } else {
            suggestions.innerHTML = `<div class="suggestion-item" style="color: #6b7280;">No customers found</div>`;
            suggestions.style.display = 'block';
        }
    });

    // ── Hide suggestions on blur ──
    document.getElementById('walkinCustomerSearch').addEventListener('blur', function() {
        setTimeout(() => {
            document.getElementById('walkinCustomerSuggestions').style.display = 'none';
        }, 200);
    });

    // ── Walk-in Summary Update ──
    function updateWalkinSummary() {
        const name = document.getElementById('walkinName').value || '-';
        const court = document.getElementById('walkinCourt').value;
        const duration = parseInt(document.getElementById('walkinDuration').value) || 1;
        const players = document.getElementById('walkinPlayers').value || 2;
        const fee = court ? 200 * duration : 0;
        
        document.getElementById('walkinSummaryCustomer').textContent = name;
        document.getElementById('walkinSummaryCourt').textContent = court ? `Court ${court}` : '-';
        document.getElementById('walkinSummaryDuration').textContent = `${duration} hour${duration > 1 ? 's' : ''}`;
        document.getElementById('walkinSummaryPlayers').textContent = `${players} player${players > 1 ? 's' : ''}`;
        document.getElementById('walkinSummaryTotal').textContent = `₱${fee.toFixed(2)}`;
    }

    document.getElementById('walkinName').addEventListener('input', updateWalkinSummary);
    document.getElementById('walkinPhone').addEventListener('input', updateWalkinSummary);
    document.getElementById('walkinCourt').addEventListener('change', updateWalkinSummary);
    document.getElementById('walkinDuration').addEventListener('change', updateWalkinSummary);
    document.getElementById('walkinPlayers').addEventListener('change', updateWalkinSummary);

    // ── View booking details ──
    document.querySelectorAll('.btn-icon.view').forEach(btn => {
        btn.addEventListener('click', function() {
            document.getElementById('bookingModal').style.display = 'flex';
            document.body.style.overflow = 'hidden';
        });
    });

    // ── Close modal ──
    function closeModal() {
        document.getElementById('bookingModal').style.display = 'none';
        document.body.style.overflow = '';
    }

    document.getElementById('modalClose')?.addEventListener('click', closeModal);
    document.getElementById('modalCloseBtn')?.addEventListener('click', closeModal);
    document.getElementById('modalOverlay')?.addEventListener('click', closeModal);

    // ── Extend Time Modal ──
    document.querySelectorAll('.btn-icon.extend').forEach(btn => {
        btn.addEventListener('click', function() {
            document.getElementById('extendModal').style.display = 'flex';
            document.body.style.overflow = 'hidden';
        });
    });

    function closeExtendModal() {
        document.getElementById('extendModal').style.display = 'none';
        document.body.style.overflow = '';
    }

    document.getElementById('extendClose')?.addEventListener('click', closeExtendModal);
    document.getElementById('extendOverlay')?.addEventListener('click', closeExtendModal);
    document.getElementById('extendCancel')?.addEventListener('click', closeExtendModal);

    document.getElementById('extendConfirm')?.addEventListener('click', function() {
        const time = document.getElementById('extendTime');
        const selected = time.options[time.selectedIndex].text;
        alert(`Booking extended by ${selected}!`);
        closeExtendModal();
    });

    // ── Cancel booking ──
    document.querySelectorAll('.btn-icon.cancel').forEach(btn => {
        btn.addEventListener('click', function() {
            if (confirm('Cancel this booking? This will notify the customer.')) {
                const row = this.closest('tr');
                const statusBadge = row.querySelector('.status-badge');
                statusBadge.className = 'status-badge cancelled';
                statusBadge.textContent = 'Cancelled';
                row.dataset.status = 'cancelled';
                const actions = row.querySelector('.action-buttons');
                actions.innerHTML = `
                    <button class="btn-icon view" title="View Details"><i class="fa-regular fa-eye"></i></button>
                `;
                alert('Booking cancelled! Customer has been notified.');
                filterTable();
            }
        });
    });

    // ── Check-in ──
    document.querySelectorAll('.btn-icon.checkin').forEach(btn => {
        btn.addEventListener('click', function() {
            if (confirm('Check-in this customer?')) {
                const row = this.closest('tr');
                const statusBadge = row.querySelector('.status-badge');
                statusBadge.className = 'status-badge active';
                statusBadge.textContent = 'Active';
                row.dataset.status = 'active';
                alert('Customer checked in successfully!');
                filterTable();
            }
        });
    });

    // ── Complete booking ──
    document.querySelectorAll('.btn-icon.complete').forEach(btn => {
        btn.addEventListener('click', function() {
            if (confirm('Mark this booking as completed?')) {
                const row = this.closest('tr');
                const statusBadge = row.querySelector('.status-badge');
                statusBadge.className = 'status-badge completed';
                statusBadge.textContent = 'Completed';
                row.dataset.status = 'completed';
                alert('Booking marked as completed!');
                filterTable();
            }
        });
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
    updateWalkinSummary();
</script>
@endpush