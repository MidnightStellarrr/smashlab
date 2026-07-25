@extends('front-desk.layouts.app')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/front-desk/dashboard.css') }}">
@endpush

@section('title', 'Dashboard - Front Desk')

@section('header', 'Dashboard')

@section('content')

<!-- ── Quick Search ── -->
<div class="quick-search-wrapper">
    <div class="quick-search-bar">
        <i class="fa-solid fa-search"></i>
        <input type="text" placeholder="Search by name, phone, or court..." id="globalSearch">
    </div>
</div>

<!-- ── Stats Cards ── -->
<div class="stats-grid">

    <div class="stat-card blue">
        <div class="stat-header">
            <div>
                <p class="stat-label">Today's Revenue</p>
                <p class="stat-value">₱{{ number_format($todayRevenue ?? 0, 2) }}</p>
            </div>
        </div>
        <div class="stat-change positive">
            <i class="fa-solid fa-arrow-up trend-icon"></i> 12% from yesterday
        </div>
    </div>

    <div class="stat-card">
        <div class="stat-header">
            <div>
                <p class="stat-label">Total Check-ins</p>
                <p class="stat-value">{{ $totalCheckins ?? 0 }}</p>
            </div>
        </div>
        <div class="stat-change neutral">
            {{ $totalCheckins ?? 0 }} total customers
        </div>
    </div>

    <div class="stat-card yellow">
        <div class="stat-header">
            <div>
                <p class="stat-label">Courts Occupied</p>
                <p class="stat-value">{{ $occupiedCourts ?? 0 }}/4</p>
            </div>
        </div>
        <div class="stat-change neutral">
            {{ $occupiedCourts ?? 0 }} courts currently in use
        </div>
    </div>

    <div class="stat-card red">
        <div class="stat-header">
            <div>
                <p class="stat-label">Today's Bookings</p>
                <p class="stat-value">{{ $bookings->count() ?? 0 }}</p>
            </div>
        </div>
        <div class="stat-change neutral">
            {{ $bookings->where('status', 'confirmed')->count() }} confirmed
        </div>
    </div>

</div>

<!-- ── Two Column Layout ── -->
<div class="two-col">

    <!-- ── Left Column ── -->
    <div>

        <!-- ── Live Court Grid ── -->
        <div class="section-card">
            <div class="section-header">
                <h2 class="section-title">
                    <i class="fa-solid fa-grid-2"></i> Live Court Grid
                </h2>
                <div class="live-indicator">
                    <span class="pulse"></span> Live
                </div>
            </div>

            <div class="court-grid">
                <div class="court-card available gradient-bg" data-court="1" data-status="available" data-time="10:00 AM - 12:00 PM">
                    <div class="court-status">Available</div>
                    <div class="court-number">Court 1</div>
                    <div class="court-time">10:00 AM - 12:00 PM</div>
                </div>

                <div class="court-card reserved gradient-bg" data-court="2" data-status="reserved" data-time="2:00 PM - 4:00 PM">
                    <div class="court-status">Reserved</div>
                    <div class="court-number">Court 2</div>
                    <div class="court-time">2:00 PM - 4:00 PM</div>
                </div>

                <div class="court-card class gradient-bg" data-court="3" data-status="class" data-time="3:00 PM - 5:00 PM">
                    <div class="court-status">Class</div>
                    <div class="court-number">Court 3</div>
                    <div class="court-time">3:00 PM - 5:00 PM</div>
                </div>

                <div class="court-card maintenance gradient-bg" data-court="4" data-status="maintenance" data-time="5:00 PM - 7:00 PM">
                    <div class="court-status">Under Maintenance</div>
                    <div class="court-number">Court 4</div>
                    <div class="court-time">5:00 PM - 7:00 PM</div>
                </div>
            </div>

            <div class="legend">
                <div class="legend-item"><span class="dot green"></span> Available</div>
                <div class="legend-item"><span class="dot red"></span> Reserved</div>
                <div class="legend-item"><span class="dot blue"></span> Class</div>
                <div class="legend-item"><span class="dot orange"></span> Under Maintenance</div>
            </div>
        </div>

        <!-- ── Today's Classes ── -->
        <div class="section-card">
            <div class="section-header">
                <h2 class="section-title">
                    <i class="fa-solid fa-chalkboard-user"></i> Today's Classes
                </h2>
                <a href="#" class="section-link">View All →</a>
            </div>

            <div class="class-grid">
                <div class="class-card">
                    <div class="class-header">
                        <div>
                            <h3 class="class-name">Beginner Class</h3>
                            <p class="class-coach">Coach Mike · Court 1</p>
                        </div>
                        <span class="class-badge live">Live</span>
                    </div>
                    <div class="class-meta">
                        <span><i class="fa-regular fa-clock"></i> 6:00 PM - 7:30 PM</span>
                        <span><i class="fa-solid fa-users"></i> 6/8 checked in</span>
                    </div>
                    <div class="class-progress">
                        <div class="progress-bar green" style="width: 75%;"></div>
                    </div>
                </div>

                <div class="class-card">
                    <div class="class-header">
                        <div>
                            <h3 class="class-name">Advanced Class</h3>
                            <p class="class-coach">Coach Alex · Court 3</p>
                        </div>
                        <span class="class-badge upcoming">Upcoming</span>
                    </div>
                    <div class="class-meta">
                        <span><i class="fa-regular fa-clock"></i> 7:00 PM - 9:00 PM</span>
                        <span><i class="fa-solid fa-users"></i> 4/6 checked in</span>
                    </div>
                    <div class="class-progress">
                        <div class="progress-bar blue" style="width: 30%;"></div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- ── Right Column ── -->
    <div>

        <!-- ── Quick Stats ── -->
        <div class="widget quick-stats">
            <h3 class="widget-title"><i class="fa-solid fa-chart-simple"></i> Quick Stats</h3>
            <div class="quick-stats">
                <div class="stat-row">
                    <span class="stat-label">Most Rented Court Today</span>
                    <span class="stat-value"><span class="highlight">Court 2</span></span>
                </div>
                <div class="stat-row">
                    <span class="stat-label">Peak Hour</span>
                    <span class="stat-value">6:00 PM - 8:00 PM</span>
                </div>
                <div class="stat-row">
                    <span class="stat-label">Total Walk-ins</span>
                    <span class="stat-value">8</span>
                </div>
                <div class="stat-row">
                    <span class="stat-label">Active Rentals</span>
                    <span class="stat-value">3</span>
                </div>
            </div>
        </div>

        <!-- ── Recent Activity ── -->
        <div class="widget">
            <h3 class="widget-title"><i class="fa-solid fa-clock-rotate-left"></i> Recent Activity</h3>
            <div class="recent-activity">
                <div class="activity-item">
                    <span class="activity-dot green"></span>
                    <span class="activity-text"><strong>Court 2</strong> reserved by John Doe</span>
                    <span class="activity-time">2 min ago</span>
                </div>
                <div class="activity-item">
                    <span class="activity-dot blue"></span>
                    <span class="activity-text"><strong>Beginner Class</strong> started on Court 1</span>
                    <span class="activity-time">15 min ago</span>
                </div>
                <div class="activity-item">
                    <span class="activity-dot orange"></span>
                    <span class="activity-text"><strong>Walk-in</strong> checked in - Maria Santos</span>
                    <span class="activity-time">32 min ago</span>
                </div>
                <div class="activity-item">
                    <span class="activity-dot red"></span>
                    <span class="activity-text"><strong>Gear Rental</strong> returned - Racket #3</span>
                    <span class="activity-time">1 hour ago</span>
                </div>
            </div>
        </div>

    </div>

</div>

<!-- ── Quick Actions (FULL WIDTH) ── -->
<div class="section-card full-width-actions">
    <div class="section-header">
        <h2 class="section-title">
            <i class="fa-solid fa-bolt"></i> Quick Actions
        </h2>
    </div>

    <div class="quick-actions-full">
        <a href="#" class="action-btn primary"><i class="fa-solid fa-user-plus"></i> Walk-in</a>
        <a href="#" class="action-btn success"><i class="fa-solid fa-check"></i> Check-in</a>
        <a href="#" class="action-btn warning"><i class="fa-solid fa-clock"></i> Extend</a>
        <a href="#" class="action-btn outline"><i class="fa-solid fa-cart-shopping"></i> Shop</a>
        <a href="#" class="action-btn primary"><i class="fa-solid fa-calendar-plus"></i> New Booking</a>
        <a href="#" class="action-btn success"><i class="fa-solid fa-rotate"></i> Reschedule</a>
    </div>
</div>

<!-- ── Court Details Modal ── -->
<div id="courtModal" class="court-modal" style="display: none;">
    <div class="modal-overlay" id="modalOverlay"></div>
    <div class="modal-container">
        <div class="modal-header">
            <h2 id="modalCourtTitle">Court Details</h2>
            <button class="modal-close" id="modalClose">&times;</button>
        </div>

        <div class="modal-body">
            <div class="modal-image">
                <img src="{{ asset('images/badminton_courts.jpg') }}" alt="Court">
            </div>

            <div class="modal-info">
                <div class="modal-row">
                    <span class="modal-label">Court</span>
                    <span class="modal-value" id="modalCourt">Court 1</span>
                </div>
                <div class="modal-row">
                    <span class="modal-label">Status</span>
                    <span class="modal-value" id="modalStatus">Available</span>
                </div>
                <div class="modal-row">
                    <span class="modal-label">Time Slot</span>
                    <span class="modal-value" id="modalTime">10:00 AM - 12:00 PM</span>
                </div>
            </div>

            <div class="modal-actions">
                <button class="modal-btn primary" id="modalBookBtn">
                    <i class="fa-solid fa-calendar-plus"></i> Book This Court
                </button>
                <button class="modal-btn outline" id="modalCloseBtn">Close</button>
            </div>
        </div>
    </div>
</div>

@endsection

@push('scripts')
<script>
    // ── Search functionality ──
    document.getElementById('globalSearch')?.addEventListener('input', function() {
        const query = this.value.toLowerCase().trim();
        console.log('Searching for:', query);
        // Implement search logic here
    });

    // ── Court card click handler ──
    document.querySelectorAll('.court-card').forEach(card => {
        card.addEventListener('click', function() {
            const court = this.dataset.court;
            const status = this.dataset.status;
            const time = this.dataset.time;
            
            // Set modal content
            document.getElementById('modalCourt').textContent = `Court ${court}`;
            document.getElementById('modalCourtTitle').textContent = `Court ${court} Details`;
            document.getElementById('modalTime').textContent = time;
            
            // Set status with badge
            const statusMap = {
                available: { text: 'Available', class: 'available' },
                reserved: { text: 'Reserved', class: 'reserved' },
                class: { text: 'Class', class: 'class' },
                maintenance: { text: 'Under Maintenance', class: 'maintenance' }
            };
            const statusInfo = statusMap[status] || statusMap.available;
            document.getElementById('modalStatus').innerHTML = `<span class="status-badge ${statusInfo.class}">${statusInfo.text}</span>`;
            
            // Show/hide book button based on status
            const bookBtn = document.getElementById('modalBookBtn');
            if (status === 'available') {
                bookBtn.style.display = 'flex';
            } else {
                bookBtn.style.display = 'none';
            }
            
            // Show modal
            document.getElementById('courtModal').style.display = 'flex';
            document.body.style.overflow = 'hidden';
        });
    });

    // ── Close modal ──
    function closeModal() {
        document.getElementById('courtModal').style.display = 'none';
        document.body.style.overflow = '';
    }

    document.getElementById('modalClose')?.addEventListener('click', closeModal);
    document.getElementById('modalCloseBtn')?.addEventListener('click', closeModal);
    document.getElementById('modalOverlay')?.addEventListener('click', closeModal);

    // ── Book button click ──
    document.getElementById('modalBookBtn')?.addEventListener('click', function() {
        const court = document.getElementById('modalCourt').textContent;
        alert(`Booking ${court} - Redirecting to booking page...`);
        // window.location.href = '/book_now';
    });

    // ── Quick action buttons ──
    document.querySelectorAll('.action-btn').forEach(btn => {
        btn.addEventListener('click', function(e) {
            e.preventDefault();
            const action = this.textContent.trim();
            alert(`Action: ${action} - Opening ${action.toLowerCase()} form...`);
        });
    });
</script>
@endpush