@extends('layouts.app')

@section('title', 'Rooms')

@section('content')
<div class="flex justify-between items-center mb-4">
    <h2 class="text-2xl font-semibold">Rooms</h2>
    <a href="{{ route('rooms.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Add Room</a>
</div>

@if(session('success'))
    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
        {{ session('success') }}
    </div>
@endif

<table class="min-w-full bg-white rounded shadow">
    <thead>
        <tr>
            <th class="py-2 px-4 border-b">Name</th>
            <th class="py-2 px-4 border-b">Location</th>
            <th class="py-2 px-4 border-b">Capacity</th>
            <th class="py-2 px-4 border-b">Description</th>
            <th class="py-2 px-4 border-b">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($rooms as $room)
        <tr>
            <td class="py-2 px-4 border-b">{{ $room->name }}</td>
            <td class="py-2 px-4 border-b">{{ $room->location }}</td>
            <td class="py-2 px-4 border-b">{{ $room->capacity }}</td>
            <td class="py-2 px-4 border-b">{{ $room->description }}</td>
            <td class="py-2 px-4 border-b">
                <a href="{{ route('rooms.edit', $room) }}" class="text-blue-600 hover:underline mr-2">Edit</a>
                <form action="{{ route('rooms.destroy', $room) }}" method="POST" class="inline" onsubmit="return confirm('Are you sure you want to delete this room?');">
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
