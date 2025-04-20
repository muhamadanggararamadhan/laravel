@extends('layouts.app')

@section('title', 'Dashboard - Room Booking System')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold mb-8">Room Booking System Dashboard</h1>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
        <!-- Rooms Card -->
        <div class="bg-white rounded-lg shadow p-6">
            <h2 class="text-xl font-semibold mb-4">Rooms</h2>
            <p class="text-gray-600 mb-4">Manage available rooms and their details</p>
            <a href="{{ route('rooms.index') }}" class="inline-block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">View Rooms</a>
        </div>

        <!-- Bookings Card -->
        <div class="bg-white rounded-lg shadow p-6">
            <h2 class="text-xl font-semibold mb-4">Bookings</h2>
            <p class="text-gray-600 mb-4">View and manage room bookings</p>
            <a href="{{ route('bookings.index') }}" class="inline-block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">View Bookings</a>
        </div>

        <!-- Users Card -->
        <div class="bg-white rounded-lg shadow p-6">
            <h2 class="text-xl font-semibold mb-4">Users</h2>
            <p class="text-gray-600 mb-4">Manage system users and their roles</p>
            <a href="{{ route('users.index') }}" class="inline-block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">View Users</a>
        </div>

        <!-- Reports Card -->
        <div class="bg-white rounded-lg shadow p-6">
            <h2 class="text-xl font-semibold mb-4">Reports</h2>
            <p class="text-gray-600 mb-4">Generate and view booking reports</p>
            <a href="{{ route('reports.index') }}" class="inline-block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">View Reports</a>
        </div>
    </div>
</div>
@endsection
