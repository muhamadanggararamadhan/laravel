@extends('layouts.app')

@section('title', 'Add Room')

@section('content')
<h2 class="text-2xl font-semibold mb-4">Add Room</h2>

@if ($errors->any())
    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
        <ul class="list-disc pl-5">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('rooms.store') }}" method="POST" class="max-w-lg">
    @csrf
    <div class="mb-4">
        <label for="name" class="block font-medium mb-1">Name</label>
        <input type="text" name="name" id="name" value="{{ old('name') }}" required class="w-full border border-gray-300 rounded px-3 py-2" />
    </div>
    <div class="mb-4">
        <label for="location" class="block font-medium mb-1">Location</label>
        <input type="text" name="location" id="location" value="{{ old('location') }}" class="w-full border border-gray-300 rounded px-3 py-2" />
    </div>
    <div class="mb-4">
        <label for="capacity" class="block font-medium mb-1">Capacity</label>
        <input type="number" name="capacity" id="capacity" value="{{ old('capacity') }}" min="0" class="w-full border border-gray-300 rounded px-3 py-2" />
    </div>
    <div class="mb-4">
        <label for="description" class="block font-medium mb-1">Description</label>
        <textarea name="description" id="description" rows="4" class="w-full border border-gray-300 rounded px-3 py-2">{{ old('description') }}</textarea>
    </div>
    <div>
        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Add Room</button>
        <a href="{{ route('rooms.index') }}" class="ml-4 text-gray-600 hover:underline">Cancel</a>
    </div>
</form>
@endsection
