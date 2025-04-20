@extends('layouts.app')

@section('title', 'Edit Booking')

@section('content')
<h2 class="text-2xl font-semibold mb-4">Edit Booking</h2>

@if ($errors->any())
    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
        <ul class="list-disc pl-5">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('bookings.update', $booking) }}" method="POST" class="max-w-lg">
    @csrf
    @method('PUT')
    <div class="mb-4">
        <label for="room_id" class="block font-medium mb-1">Room</label>
        <select name="room_id" id="room_id" required class="w-full border border-gray-300 rounded px-3 py-2">
            @foreach($rooms as $room)
                <option value="{{ $room->id }}" {{ old('room_id', $booking->room_id) == $room->id ? 'selected' : '' }}>{{ $room->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-4">
        <label for="start_time" class="block font-medium mb-1">Start Time</label>
        <input type="datetime-local" name="start_time" id="start_time" value="{{ old('start_time', \Carbon\Carbon::parse($booking->start_time)->format('Y-m-d\TH:i')) }}" required class="w-full border border-gray-300 rounded px-3 py-2" />
    </div>
    <div class="mb-4">
        <label for="end_time" class="block font-medium mb-1">End Time</label>
        <input type="datetime-local" name="end_time" id="end_time" value="{{ old('end_time', \Carbon\Carbon::parse($booking->end_time)->format('Y-m-d\TH:i')) }}" required class="w-full border border-gray-300 rounded px-3 py-2" />
    </div>
    <div class="mb-4">
        <label for="status" class="block font-medium mb-1">Status</label>
        <select name="status" id="status" required class="w-full border border-gray-300 rounded px-3 py-2">
            <option value="pending" {{ old('status', $booking->status) == 'pending' ? 'selected' : '' }}>Pending</option>
            <option value="approved" {{ old('status', $booking->status) == 'approved' ? 'selected' : '' }}>Approved</option>
            <option value="rejected" {{ old('status', $booking->status) == 'rejected' ? 'selected' : '' }}>Rejected</option>
        </select>
    </div>
    <div>
        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Update Booking</button>
        <a href="{{ route('bookings.index') }}" class="ml-4 text-gray-600 hover:underline">Cancel</a>
    </div>
</form>
@endsection
