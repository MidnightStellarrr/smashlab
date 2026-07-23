@extends('front-desk.layouts.app')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/frontdesk/dashboard.css') }}">
@endpush

@section('title', 'Dashboard - Front Desk')

@section('header', 'Dashboard')

@section('content')

<!-- ── Stats Cards ── -->
<div class="stats-grid">

    <div class="stat-card">
        <div class="stat-header">
            <div>
                <p class="stat-label">Today's Revenue</p>
                <p class="stat-value">₱{{ number_format($todayRevenue ?? 0, 2) }}</p>
            </div>
            <div class="stat-icon blue">
                <i class="fa-solid fa-credit-card"></i>
            </div>
        </div>
        <div class="stat-change positive">
            <i class="fa-solid fa-arrow-up"></i> 12% from yesterday
        </div>
    </div>

    <div class="stat-card">
        <div class="stat-header">
            <div>
                <p class="stat-label">Total Check-ins</p>
                <p class="stat-value">{{ $totalCheckins ?? 0 }}</p>
            </div>
            <div class="stat-icon green">
                <i class="fa-solid fa-user-check"></i>
            </div>
        </div>
        <div class="stat-change neutral">
            <i class="fa-solid fa-users"></i> {{ $totalCheckins ?? 0 }} total customers
        </div>
    </div>

    <div class="stat-card">
        <div class="stat-header">
            <div>
                <p class="stat-label">Courts Occupied</p>
                <p class="stat-value">{{ $occupiedCourts ?? 0 }}/4</p>
            </div>
            <div class="stat-icon yellow">
                <i class="fa-solid fa-person-playing"></i>
            </div>
        </div>
        <div class="stat-change neutral">
            <i class="fa-solid fa-clock"></i> {{ $occupiedCourts ?? 0 }} courts currently in use
        </div>
    </div>

    <div class="stat-card">
        <div class="stat-header">
            <div>
                <p class="stat-label">Today's Bookings</p>
                <p class="stat-value">{{ $bookings->count() ?? 0 }}</p>
            </div>
            <div class="stat-icon red">
                <i class="fa-regular fa-calendar"></i>
            </div>
        </div>
        <div class="stat-change neutral">
            <i class="fa-solid fa-check-circle" style="color: #22c55e;"></i> {{ $bookings->where('status', 'confirmed')->count() }} confirmed
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
                <span style="font-size: 13px; color: #6b7280;">
                    <i class="fa-regular fa-clock"></i> Updated just now
                </span>
            </div>

            <div class="court-grid">
                <div class="court-card available">
                    <div class="court-number">Court 1</div>
                    <div class="court-status"><i class="fa-solid fa-check-circle"></i> Available</div>
                    <div class="court-time">10:00 AM - 12:00 PM</div>
                </div>

                <div class="court-card reserved">
                    <div class="court-number">Court 2</div>
                    <div class="court-status"><i class="fa-solid fa-circle"></i> Reserved</div>
                    <div class="court-time">2:00 PM - 4:00 PM</div>
                </div>

                <div class="court-card class">
                    <div class="court-number">Court 3</div>
                    <div class="court-status"><i class="fa-solid fa-chalkboard-user"></i> Class</div>
                    <div class="court-time">3:00 PM - 5:00 PM</div>
                </div>

                <div class="court-card walkin">
                    <div class="court-number">Court 4</div>
                    <div class="court-status"><i class="fa-solid fa-user-plus"></i> Walk-in</div>
                    <div class="court-time">5:00 PM - 7:00 PM</div>
                </div>
            </div>

            <div class="legend">
                <div class="legend-item"><span class="dot green"></span> Available</div>
                <div class="legend-item"><span class="dot red"></span> Reserved</div>
                <div class="legend-item"><span class="dot blue"></span> Class</div>
                <div class="legend-item"><span class="dot orange"></span> Walk-in</div>
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

        <!-- ── Quick Search ── -->
        <div class="widget">
            <h3 class="widget-title"><i class="fa-solid fa-search"></i> Quick Search</h3>
            <div class="search-bar">
                <i class="fa-solid fa-search"></i>
                <input type="text" placeholder="Search by name, phone, or court...">
            </div>
        </div>

        <!-- ── Quick Stats ── -->
        <div class="widget">
            <h3 class="widget-title"><i class="fa-solid fa-chart-simple"></i> Quick Stats</h3>
            <div class="quick-stats">
                <div class="stat-row">
                    <span class="stat-label">Most Rented Court Today</span>
                    <span class="stat-value">Court 2</span>
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

        <!-- ── Quick Actions ── -->
        <div class="widget">
            <h3 class="widget-title"><i class="fa-solid fa-bolt"></i> Quick Actions</h3>
            <div class="quick-actions">
                <a href="#" class="action-btn primary"><i class="fa-solid fa-user-plus"></i> Walk-in</a>
                <a href="#" class="action-btn success"><i class="fa-solid fa-check"></i> Check-in</a>
                <a href="#" class="action-btn warning"><i class="fa-solid fa-clock"></i> Extend</a>
                <a href="#" class="action-btn outline"><i class="fa-solid fa-cart-shopping"></i> Shop</a>
            </div>
        </div>

    </div>

</div>

@endsection