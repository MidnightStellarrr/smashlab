@extends('front-desk.layouts.app')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/front-desk/classes.css') }}">
@endpush

@section('title', 'Classes - Front Desk')

@section('header', 'Classes')

@section('content')

<!-- ── Stats Cards ── -->
<div class="stats-grid">
    <div class="stat-card blue">
        <div class="stat-header">
            <div>
                <p class="stat-label">Today's Classes</p>
                <p class="stat-value">4</p>
            </div>
            <div class="stat-icon">
                <i class="fa-solid fa-chalkboard-user"></i>
            </div>
        </div>
        <div class="stat-change positive">
            <i class="fa-solid fa-arrow-up trend-icon"></i> 2 more than yesterday
        </div>
    </div>

    <div class="stat-card green">
        <div class="stat-header">
            <div>
                <p class="stat-label">Active Classes</p>
                <p class="stat-value">2</p>
            </div>
            <div class="stat-icon">
                <i class="fa-solid fa-play"></i>
            </div>
        </div>
        <div class="stat-change neutral">
            Currently running
        </div>
    </div>

    <div class="stat-card yellow">
        <div class="stat-header">
            <div>
                <p class="stat-label">Total Students</p>
                <p class="stat-value">24</p>
            </div>
            <div class="stat-icon">
                <i class="fa-solid fa-users"></i>
            </div>
        </div>
        <div class="stat-change positive">
            <i class="fa-solid fa-arrow-up trend-icon"></i> 4 new today
        </div>
    </div>

    <div class="stat-card red">
        <div class="stat-header">
            <div>
                <p class="stat-label">Checked In</p>
                <p class="stat-value">18</p>
            </div>
            <div class="stat-icon">
                <i class="fa-solid fa-user-check"></i>
            </div>
        </div>
        <div class="stat-change neutral">
            75% attendance rate
        </div>
    </div>
</div>

<!-- ── Filters and Actions ── -->
<div class="classes-actions">
    <div class="filters">
        <div class="filter-group">
            <i class="fa-solid fa-calendar"></i>
            <input type="date" class="filter-input" value="{{ date('Y-m-d') }}">
        </div>
        <div class="filter-group">
            <i class="fa-solid fa-filter"></i>
            <select class="filter-select">
                <option value="all">All Classes</option>
                <option value="live">Live</option>
                <option value="upcoming">Upcoming</option>
                <option value="completed">Completed</option>
            </select>
        </div>
        <div class="filter-group">
            <i class="fa-solid fa-search"></i>
            <input type="text" class="filter-input" placeholder="Search by class or coach...">
        </div>
    </div>
</div>

<!-- ── Classes Grid ── -->
<div class="classes-grid">

    <!-- Class 1 - Live -->
    <div class="class-card live">
        <div class="class-card-header">
            <div class="class-status">
                <span class="live-dot"></span> Live
            </div>
            <div class="class-time">
                <i class="fa-regular fa-clock"></i> 6:00 PM - 7:30 PM
            </div>
        </div>
        <div class="class-card-body">
            <h3>Beginner Class</h3>
            <div class="class-meta">
                <span><i class="fa-solid fa-user-tie"></i> Coach Mike</span>
                <span><i class="fa-solid fa-grid-2"></i> Court 1</span>
            </div>
            <div class="class-attendance">
                <div class="attendance-header">
                    <span>Attendance</span>
                    <span class="attendance-count">6/8 checked in</span>
                </div>
                <div class="progress-bar">
                    <div class="progress-fill" style="width: 75%;"></div>
                </div>
            </div>
            <div class="class-students">
                <div class="student-avatars">
                    <span class="student-avatar checked-in">JD</span>
                    <span class="student-avatar checked-in">MS</span>
                    <span class="student-avatar checked-in">JD</span>
                    <span class="student-avatar checked-in">AR</span>
                    <span class="student-avatar not-checked">+2</span>
                </div>
                <button class="btn-checkin">Check-in Students</button>
            </div>
        </div>
    </div>

    <!-- Class 2 - Live -->
    <div class="class-card live">
        <div class="class-card-header">
            <div class="class-status">
                <span class="live-dot"></span> Live
            </div>
            <div class="class-time">
                <i class="fa-regular fa-clock"></i> 7:00 PM - 9:00 PM
            </div>
        </div>
        <div class="class-card-body">
            <h3>Advanced Class</h3>
            <div class="class-meta">
                <span><i class="fa-solid fa-user-tie"></i> Coach Alex</span>
                <span><i class="fa-solid fa-grid-2"></i> Court 3</span>
            </div>
            <div class="class-attendance">
                <div class="attendance-header">
                    <span>Attendance</span>
                    <span class="attendance-count">4/6 checked in</span>
                </div>
                <div class="progress-bar">
                    <div class="progress-fill" style="width: 66%;"></div>
                </div>
            </div>
            <div class="class-students">
                <div class="student-avatars">
                    <span class="student-avatar checked-in">JD</span>
                    <span class="student-avatar checked-in">MS</span>
                    <span class="student-avatar checked-in">JD</span>
                    <span class="student-avatar checked-in">AR</span>
                    <span class="student-avatar not-checked">+2</span>
                </div>
                <button class="btn-checkin">Check-in Students</button>
            </div>
        </div>
    </div>

    <!-- Class 3 - Upcoming -->
    <div class="class-card upcoming">
        <div class="class-card-header">
            <div class="class-status">
                <span class="upcoming-dot"></span> Upcoming
            </div>
            <div class="class-time">
                <i class="fa-regular fa-clock"></i> 5:00 PM - 6:30 PM
            </div>
        </div>
        <div class="class-card-body">
            <h3>Intermediate Class</h3>
            <div class="class-meta">
                <span><i class="fa-solid fa-user-tie"></i> Coach Sarah</span>
                <span><i class="fa-solid fa-grid-2"></i> Court 2</span>
            </div>
            <div class="class-attendance">
                <div class="attendance-header">
                    <span>Enrolled</span>
                    <span class="attendance-count">4/6 students</span>
                </div>
                <div class="progress-bar">
                    <div class="progress-fill" style="width: 66%;"></div>
                </div>
            </div>
            <div class="class-students">
                <div class="student-avatars">
                    <span class="student-avatar">JD</span>
                    <span class="student-avatar">MS</span>
                    <span class="student-avatar">JD</span>
                    <span class="student-avatar">AR</span>
                </div>
                <span class="class-reminder">Starts in 15 mins</span>
            </div>
        </div>
    </div>

    <!-- Class 4 - Upcoming -->
    <div class="class-card upcoming">
        <div class="class-card-header">
            <div class="class-status">
                <span class="upcoming-dot"></span> Upcoming
            </div>
            <div class="class-time">
                <i class="fa-regular fa-clock"></i> 8:00 AM - 9:00 AM
            </div>
        </div>
        <div class="class-card-body">
            <h3>Private Coaching</h3>
            <div class="class-meta">
                <span><i class="fa-solid fa-user-tie"></i> Coach Mike</span>
                <span><i class="fa-solid fa-grid-2"></i> Court 4</span>
            </div>
            <div class="class-attendance">
                <div class="attendance-header">
                    <span>Enrolled</span>
                    <span class="attendance-count">1/1 student</span>
                </div>
                <div class="progress-bar">
                    <div class="progress-fill" style="width: 100%;"></div>
                </div>
            </div>
            <div class="class-students">
                <div class="student-avatars">
                    <span class="student-avatar">JD</span>
                </div>
                <span class="class-reminder">Starts tomorrow</span>
            </div>
        </div>
    </div>

    <!-- Class 5 - Completed -->
    <div class="class-card completed">
        <div class="class-card-header">
            <div class="class-status">
                <span class="completed-dot"></span> Completed
            </div>
            <div class="class-time">
                <i class="fa-regular fa-clock"></i> 4:00 PM - 5:00 PM
            </div>
        </div>
        <div class="class-card-body">
            <h3>Beginner Class (Morning)</h3>
            <div class="class-meta">
                <span><i class="fa-solid fa-user-tie"></i> Coach Mike</span>
                <span><i class="fa-solid fa-grid-2"></i> Court 1</span>
            </div>
            <div class="class-attendance">
                <div class="attendance-header">
                    <span>Attendance</span>
                    <span class="attendance-count">8/8 checked in</span>
                </div>
                <div class="progress-bar">
                    <div class="progress-fill" style="width: 100%;"></div>
                </div>
            </div>
            <div class="class-students">
                <div class="student-avatars">
                    <span class="student-avatar checked-in">JD</span>
                    <span class="student-avatar checked-in">MS</span>
                    <span class="student-avatar checked-in">JD</span>
                    <span class="student-avatar checked-in">AR</span>
                    <span class="student-avatar checked-in">+2</span>
                </div>
                <span class="class-completed-badge"><i class="fa-solid fa-check-circle"></i> Completed</span>
            </div>
        </div>
    </div>

    <!-- Class 6 - Completed -->
    <div class="class-card completed">
        <div class="class-card-header">
            <div class="class-status">
                <span class="completed-dot"></span> Completed
            </div>
            <div class="class-time">
                <i class="fa-regular fa-clock"></i> 2:00 PM - 4:00 PM
            </div>
        </div>
        <div class="class-card-body">
            <h3>Advanced Class (Afternoon)</h3>
            <div class="class-meta">
                <span><i class="fa-solid fa-user-tie"></i> Coach Alex</span>
                <span><i class="fa-solid fa-grid-2"></i> Court 3</span>
            </div>
            <div class="class-attendance">
                <div class="attendance-header">
                    <span>Attendance</span>
                    <span class="attendance-count">6/6 checked in</span>
                </div>
                <div class="progress-bar">
                    <div class="progress-fill" style="width: 100%;"></div>
                </div>
            </div>
            <div class="class-students">
                <div class="student-avatars">
                    <span class="student-avatar checked-in">JD</span>
                    <span class="student-avatar checked-in">MS</span>
                    <span class="student-avatar checked-in">JD</span>
                    <span class="student-avatar checked-in">AR</span>
                    <span class="student-avatar checked-in">WC</span>
                </div>
                <span class="class-completed-badge"><i class="fa-solid fa-check-circle"></i> Completed</span>
            </div>
        </div>
    </div>

</div>

<!-- ── No Results ── -->
<div id="noResults" class="no-results" style="display: none;">
    <i class="fa-solid fa-chalkboard-user"></i>
    <h3>No classes found</h3>
    <p>Try adjusting your search or filter.</p>
</div>

<!-- ── Check-in Modal ── -->
<div id="checkinModal" class="class-modal" style="display: none;">
    <div class="modal-overlay" id="checkinOverlay"></div>
    <div class="modal-container" style="max-width: 500px;">
        <div class="modal-header">
            <h2>Check-in Students</h2>
            <button class="modal-close" id="checkinClose">&times;</button>
        </div>
        <div class="modal-body">
            <div class="checkin-info">
                <h3 id="checkinClassName">Beginner Class</h3>
                <p id="checkinClassMeta">Coach Mike · Court 1 · 6:00 PM - 7:30 PM</p>
            </div>
            <div class="checkin-list">
                <div class="checkin-item">
                    <label class="checkin-label">
                        <input type="checkbox" checked> Juan Dela Cruz
                    </label>
                </div>
                <div class="checkin-item">
                    <label class="checkin-label">
                        <input type="checkbox" checked> Maria Santos
                    </label>
                </div>
                <div class="checkin-item">
                    <label class="checkin-label">
                        <input type="checkbox" checked> John Doe
                    </label>
                </div>
                <div class="checkin-item">
                    <label class="checkin-label">
                        <input type="checkbox" checked> Anna Reyes
                    </label>
                </div>
                <div class="checkin-item">
                    <label class="checkin-label">
                        <input type="checkbox"> Carlos Villanueva
                    </label>
                </div>
                <div class="checkin-item">
                    <label class="checkin-label">
                        <input type="checkbox"> Walk-in Customer
                    </label>
                </div>
            </div>
            <div class="modal-actions">
                <button class="modal-btn outline" id="checkinCancel">Cancel</button>
                <button class="modal-btn primary" id="checkinConfirm">
                    <i class="fa-solid fa-user-check"></i> Confirm Check-in
                </button>
            </div>
        </div>
    </div>
</div>

<!-- ── View Class Modal ── -->
<div id="viewClassModal" class="class-modal" style="display: none;">
    <div class="modal-overlay" id="viewClassOverlay"></div>
    <div class="modal-container" style="max-width: 600px;">
        <div class="modal-header">
            <h2>Class Details</h2>
            <button class="modal-close" id="viewClassClose">&times;</button>
        </div>
        <div class="modal-body">
            <div class="class-detail-header">
                <div class="class-detail-status">
                    <span class="live-dot"></span> Live
                </div>
                <h3 id="viewClassName">Beginner Class</h3>
                <div class="class-detail-meta">
                    <span><i class="fa-solid fa-user-tie"></i> Coach Mike</span>
                    <span><i class="fa-solid fa-grid-2"></i> Court 1</span>
                    <span><i class="fa-regular fa-clock"></i> 6:00 PM - 7:30 PM</span>
                </div>
            </div>
            <div class="class-detail-attendance">
                <h4>Attendance</h4>
                <div class="attendance-stats">
                    <div class="attendance-stat">
                        <span class="stat-number">6</span>
                        <span class="stat-label">Checked In</span>
                    </div>
                    <div class="attendance-stat">
                        <span class="stat-number">8</span>
                        <span class="stat-label">Total Enrolled</span>
                    </div>
                    <div class="attendance-stat">
                        <span class="stat-number">75%</span>
                        <span class="stat-label">Attendance Rate</span>
                    </div>
                </div>
                <div class="progress-bar">
                    <div class="progress-fill" style="width: 75%;"></div>
                </div>
            </div>
            <div class="class-detail-students">
                <h4>Students</h4>
                <div class="student-list">
                    <div class="student-list-item">
                        <span class="student-status checked-in"><i class="fa-solid fa-check-circle"></i></span>
                        <span>Juan Dela Cruz</span>
                    </div>
                    <div class="student-list-item">
                        <span class="student-status checked-in"><i class="fa-solid fa-check-circle"></i></span>
                        <span>Maria Santos</span>
                    </div>
                    <div class="student-list-item">
                        <span class="student-status checked-in"><i class="fa-solid fa-check-circle"></i></span>
                        <span>John Doe</span>
                    </div>
                    <div class="student-list-item">
                        <span class="student-status checked-in"><i class="fa-solid fa-check-circle"></i></span>
                        <span>Anna Reyes</span>
                    </div>
                    <div class="student-list-item">
                        <span class="student-status not-checked"><i class="fa-solid fa-circle"></i></span>
                        <span>Carlos Villanueva</span>
                    </div>
                    <div class="student-list-item">
                        <span class="student-status not-checked"><i class="fa-solid fa-circle"></i></span>
                        <span>Walk-in Customer</span>
                    </div>
                </div>
            </div>
            <div class="modal-actions">
                <button class="modal-btn outline" id="viewClassCloseBtn">Close</button>
                <button class="modal-btn primary" id="viewClassCheckinBtn">
                    <i class="fa-solid fa-user-check"></i> Check-in Students
                </button>
            </div>
        </div>
    </div>
</div>

@endsection

@push('scripts')
<script>
    // ── Check-in Modal ──
    document.querySelectorAll('.btn-checkin').forEach(btn => {
        btn.addEventListener('click', function() {
            const card = this.closest('.class-card');
            const name = card.querySelector('h3')?.textContent || 'Class';
            const meta = card.querySelector('.class-meta')?.textContent || '';
            
            document.getElementById('checkinClassName').textContent = name;
            document.getElementById('checkinClassMeta').textContent = meta;
            
            document.getElementById('checkinModal').style.display = 'flex';
            document.body.style.overflow = 'hidden';
        });
    });

    function closeCheckin() {
        document.getElementById('checkinModal').style.display = 'none';
        document.body.style.overflow = '';
    }

    document.getElementById('checkinClose').addEventListener('click', closeCheckin);
    document.getElementById('checkinOverlay').addEventListener('click', closeCheckin);
    document.getElementById('checkinCancel').addEventListener('click', closeCheckin);

    document.getElementById('checkinConfirm').addEventListener('click', function() {
        const checked = document.querySelectorAll('.checkin-item input:checked').length;
        alert(`${checked} students checked in successfully!`);
        closeCheckin();
    });

    // ── View Class Modal ──
    document.querySelectorAll('.class-card').forEach(card => {
        card.addEventListener('click', function(e) {
            // Don't open if clicking on check-in button
            if (e.target.closest('.btn-checkin')) return;
            
            const name = this.querySelector('h3')?.textContent || 'Class';
            const status = this.querySelector('.class-status')?.textContent.trim() || 'Live';
            const meta = this.querySelector('.class-meta')?.textContent || '';
            const time = this.querySelector('.class-time')?.textContent || '';
            const attendance = this.querySelector('.attendance-count')?.textContent || '0/0';
            const progress = this.querySelector('.progress-fill')?.style.width || '0%';
            
            document.getElementById('viewClassName').textContent = name;
            
            // Update status
            const statusDot = document.querySelector('.class-detail-status span');
            const statusText = document.querySelector('.class-detail-status');
            if (status.includes('Live')) {
                statusDot.className = 'live-dot';
                statusText.innerHTML = '<span class="live-dot"></span> Live';
            } else if (status.includes('Upcoming')) {
                statusDot.className = 'upcoming-dot';
                statusText.innerHTML = '<span class="upcoming-dot"></span> Upcoming';
            } else {
                statusDot.className = 'completed-dot';
                statusText.innerHTML = '<span class="completed-dot"></span> Completed';
            }
            
            document.getElementById('viewClassModal').style.display = 'flex';
            document.body.style.overflow = 'hidden';
        });
    });

    function closeViewClass() {
        document.getElementById('viewClassModal').style.display = 'none';
        document.body.style.overflow = '';
    }

    document.getElementById('viewClassClose').addEventListener('click', closeViewClass);
    document.getElementById('viewClassOverlay').addEventListener('click', closeViewClass);
    document.getElementById('viewClassCloseBtn').addEventListener('click', closeViewClass);

    document.getElementById('viewClassCheckinBtn').addEventListener('click', function() {
        closeViewClass();
        document.getElementById('checkinModal').style.display = 'flex';
        document.body.style.overflow = 'hidden';
    });

    // ── Filter functionality ──
    const filters = document.querySelectorAll('.filter-input, .filter-select');
    const classCards = document.querySelectorAll('.class-card');
    const noResults = document.getElementById('noResults');

    function filterClasses() {
        const search = document.querySelector('.filter-group:last-child .filter-input')?.value.toLowerCase().trim() || '';
        const status = document.querySelector('.filter-select')?.value || 'all';
        let visibleCount = 0;

        classCards.forEach(card => {
            const text = card.textContent.toLowerCase();
            const cardStatus = card.classList.contains('live') ? 'live' : 
                              card.classList.contains('upcoming') ? 'upcoming' : 
                              card.classList.contains('completed') ? 'completed' : 'all';
            
            let show = true;
            
            if (status !== 'all' && cardStatus !== status) {
                show = false;
            }
            
            if (search && !text.includes(search)) {
                show = false;
            }
            
            if (show) {
                card.style.display = '';
                visibleCount++;
            } else {
                card.style.display = 'none';
            }
        });

        noResults.style.display = visibleCount === 0 ? 'block' : 'none';
    }

    document.querySelectorAll('.filter-input, .filter-select').forEach(input => {
        input.addEventListener('input', filterClasses);
        input.addEventListener('change', filterClasses);
    });

    // ── View All Classes button ──
    document.getElementById('viewAllClasses').addEventListener('click', function() {
        document.querySelector('.filter-select').value = 'all';
        document.querySelectorAll('.filter-input').forEach(input => input.value = '');
        filterClasses();
    });

    // ── Initial filter ──
    filterClasses();
</script>
@endpush