@extends('admin.layouts.app')

@section('title', 'Admin Dashboard')

@section('header', 'Dashboard')

@section('content')
<div class="stats-grid">
    <div class="stat-card blue">
        <div class="stat-header">
            <div>
                <p class="stat-label">Total Users</p>
                <p class="stat-value">156</p>
            </div>
            <div class="stat-icon">
                <i class="fa-solid fa-users"></i>
            </div>
        </div>
    </div>
    <div class="stat-card green">
        <div class="stat-header">
            <div>
                <p class="stat-label">Total Revenue</p>
                <p class="stat-value">₱45,230</p>
            </div>
            <div class="stat-icon">
                <i class="fa-solid fa-coins"></i>
            </div>
        </div>
    </div>
    <div class="stat-card yellow">
        <div class="stat-header">
            <div>
                <p class="stat-label">Active Bookings</p>
                <p class="stat-value">24</p>
            </div>
            <div class="stat-icon">
                <i class="fa-solid fa-calendar-check"></i>
            </div>
        </div>
    </div>
    <div class="stat-card red">
        <div class="stat-header">
            <div>
                <p class="stat-label">Pending Reviews</p>
                <p class="stat-value">8</p>
            </div>
            <div class="stat-icon">
                <i class="fa-solid fa-clock"></i>
            </div>
        </div>
    </div>
</div>

<div style="background: white; border-radius: 16px; padding: 24px; border: 1px solid #e5e7eb;">
    <h3 style="margin-bottom: 16px;">Welcome to Admin Dashboard</h3>
    <p style="color: #6b7280;">Manage users, settings, and system configuration.</p>
</div>
@endsection