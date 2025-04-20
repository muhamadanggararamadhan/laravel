@extends('layouts.app')

@section('title', 'Dashboard - Room Booking System')

@section('content')
<div class="container mx-auto px-4">
    <!-- Welcome Section -->
    <div class="bg-white rounded-lg shadow-lg p-6 mb-8">
        <h1 class="text-3xl font-bold text-gray-800 mb-4">Welcome to RoomBook</h1>
        <p class="text-gray-600">Manage your room bookings efficiently with our comprehensive booking system.</p>
    </div>

    <!-- Stats Overview -->
    <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
        <!-- Rooms Stats -->
        <div class="bg-gradient-to-r from-blue-500 to-blue-600 rounded-lg shadow-lg p-6 text-white">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm opacity-75">Total Rooms</p>
                    <h3 class="text-2xl font-bold">12</h3>
                </div>
                <i class="fas fa-door-open text-3xl opacity-75"></i>
            </div>
        </div>

        <!-- Bookings Stats -->
        <div class="bg-gradient-to-r from-green-500 to-green-600 rounded-lg shadow-lg p-6 text-white">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm opacity-75">Active Bookings</p>
                    <h3 class="text-2xl font-bold">25</h3>
                </div>
                <i class="fas fa-calendar-check text-3xl opacity-75"></i>
            </div>
        </div>

        <!-- Users Stats -->
        <div class="bg-gradient-to-r from-purple-500 to-purple-600 rounded-lg shadow-lg p-6 text-white">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm opacity-75">Total Users</p>
                    <h3 class="text-2xl font-bold">50</h3>
                </div>
                <i class="fas fa-users text-3xl opacity-75"></i>
            </div>
        </div>

        <!-- Pending Stats -->
        <div class="bg-gradient-to-r from-yellow-500 to-yellow-600 rounded-lg shadow-lg p-6 text-white">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm opacity-75">Pending Requests</p>
                    <h3 class="text-2xl font-bold">8</h3>
                </div>
                <i class="fas fa-clock text-3xl opacity-75"></i>
            </div>
        </div>
    </div>

    <!-- Quick Actions -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
        <!-- Manage Rooms -->
        <div class="bg-white rounded-lg shadow-lg p-6 hover:shadow-xl transition-shadow duration-300">
            <div class="text-blue-600 mb-4">
                <i class="fas fa-door-open text-4xl"></i>
            </div>
            <h2 class="text-xl font-semibold mb-4">Manage Rooms</h2>
            <p class="text-gray-600 mb-4">Add, edit, or remove rooms from the system.</p>
            <a href="{{ route('rooms.index') }}" class="inline-flex items-center text-blue-600 hover:text-blue-700">
                <span>View Rooms</span>
                <i class="fas fa-arrow-right ml-2"></i>
            </a>
        </div>

        <!-- Book a Room -->
        <div class="bg-white rounded-lg shadow-lg p-6 hover:shadow-xl transition-shadow duration-300">
            <div class="text-green-600 mb-4">
                <i class="fas fa-calendar-plus text-4xl"></i>
            </div>
            <h2 class="text-xl font-semibold mb-4">Book a Room</h2>
            <p class="text-gray-600 mb-4">Create new room bookings quickly and easily.</p>
            <a href="{{ route('bookings.create') }}" class="inline-flex items-center text-green-600 hover:text-green-700">
                <span>New Booking</span>
                <i class="fas fa-arrow-right ml-2"></i>
            </a>
        </div>

        <!-- Manage Users -->
        <div class="bg-white rounded-lg shadow-lg p-6 hover:shadow-xl transition-shadow duration-300">
            <div class="text-purple-600 mb-4">
                <i class="fas fa-users-cog text-4xl"></i>
            </div>
            <h2 class="text-xl font-semibold mb-4">Manage Users</h2>
            <p class="text-gray-600 mb-4">Add or manage system users and their roles.</p>
            <a href="{{ route('users.index') }}" class="inline-flex items-center text-purple-600 hover:text-purple-700">
                <span>View Users</span>
                <i class="fas fa-arrow-right ml-2"></i>
            </a>
        </div>

        <!-- View Reports -->
        <div class="bg-white rounded-lg shadow-lg p-6 hover:shadow-xl transition-shadow duration-300">
            <div class="text-yellow-600 mb-4">
                <i class="fas fa-chart-line text-4xl"></i>
            </div>
            <h2 class="text-xl font-semibold mb-4">View Reports</h2>
            <p class="text-gray-600 mb-4">Access and generate booking reports.</p>
            <a href="{{ route('reports.index') }}" class="inline-flex items-center text-yellow-600 hover:text-yellow-700">
                <span>View Reports</span>
                <i class="fas fa-arrow-right ml-2"></i>
            </a>
        </div>
    </div>
</div>
@endsection
