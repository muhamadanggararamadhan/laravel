@extends('layouts.app')

@section('title', 'Bookings')

@section('content')
<div class="flex justify-between items-center mb-4">
    <h2 class="text-2xl font-semibold">Bookings</h2>
    <a href="{{ route('bookings.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Add Booking</a>
</div>

@if(session('success'))
    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
        {{ session('success') }}
    </div>
@endif

<table class="min-w-full bg-white rounded shadow">
    <thead>
        <tr>
            <th class="py-2 px-4 border-b">Room</th>
            <th class="py-2 px-4 border-b">User</th>
            <th class="py-2 px-4 border-b">Start Time</th>
            <th class="py-2 px-4 border-b">End Time</th>
            <th class="py-2 px-4 border-b">Status</th>
            <th class="py-2 px-4 border-b">Actions</th>
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
            <td class="py-2 px-4 border-b">
                <a href="{{ route('bookings.edit', $booking) }}" class="text-blue-600 hover:underline mr-2">Edit</a>
                <form action="{{ route('bookings.destroy', $booking) }}" method="POST" class="inline" onsubmit="return confirm('Are you sure you want to delete this booking?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="text-red-600 hover:underline">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
