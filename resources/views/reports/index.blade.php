@extends('layouts.app')

@section('title', 'Booking Reports')

@section('content')
<h2 class="text-2xl font-semibold mb-4">Booking Reports</h2>

<form method="GET" action="{{ route('reports.index') }}" class="mb-6 max-w-lg">
    <div class="mb-4">
        <label for="room_id" class="block font-medium mb-1">Room</label>
        <select name="room_id" id="room_id" class="w-full border border-gray-300 rounded px-3 py-2">
            <option value="">All Rooms</option>
            @foreach($rooms as $room)
                <option value="{{ $room->id }}" {{ request('room_id') == $room->id ? 'selected' : '' }}>{{ $room->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-4">
        <label for="user_id" class="block font-medium mb-1">User</label>
        <select name="user_id" id="user_id" class="w-full border border-gray-300 rounded px-3 py-2">
            <option value="">All Users</option>
            @foreach($users as $user)
                <option value="{{ $user->id }}" {{ request('user_id') == $user->id ? 'selected' : '' }}>{{ $user->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-4">
        <label for="start_date" class="block font-medium mb-1">Start Date</label>
        <input type="date" name="start_date" id="start_date" value="{{ request('start_date') }}" class="w-full border border-gray-300 rounded px-3 py-2" />
    </div>
    <div class="mb-4">
        <label for="end_date" class="block font-medium mb-1">End Date</label>
        <input type="date" name="end_date" id="end_date" value="{{ request('end_date') }}" class="w-full border border-gray-300 rounded px-3 py-2" />
    </div>
    <div>
        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Filter</button>
    </div>
</form>

@if($bookings->isEmpty())
    <p>No bookings found for the selected criteria.</p>
@else
<table class="min-w-full bg-white rounded shadow">
    <thead>
        <tr>
            <th class="py-2 px-4 border-b">Room</th>
            <th class="py-2 px-4 border-b">User</th>
            <th class="py-2 px-4 border-b">Start Time</th>
            <th class="py-2 px-4 border-b">End Time</th>
            <th class="py-2 px-4 border-b">Status</th>
        </tr>
    </thead>
    <tbody>
        @foreach($bookings as $booking)
        <tr>
            <td class="py-2 px-4 border-b">{{ $booking->room->name }}</td>
            <td class="py-2 px-4 border-b">{{ $booking->user->name }}</td>
            <td class="py-2 px-4 border-b">{{ $booking->start_time }}</td>
            <td class="py-2 px-4 border-b">{{ $booking->end_time }}</td>
            <td class="py-2 px-4 border-b capitalize">{{ $booking->status }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endif
@endsection
