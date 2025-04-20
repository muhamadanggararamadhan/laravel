@extends('layouts.app')

@section('title', 'Edit User')

@section('content')
<h2 class="text-2xl font-semibold mb-4">Edit User</h2>

@if ($errors->any())
    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
        <ul class="list-disc pl-5">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('users.update', $user) }}" method="POST" class="max-w-lg">
    @csrf
    @method('PUT')
    <div class="mb-4">
        <label for="name" class="block font-medium mb-1">Name</label>
        <input type="text" name="name" id="name" value="{{ old('name', $user->name) }}" required class="w-full border border-gray-300 rounded px-3 py-2" />
    </div>
    <div class="mb-4">
        <label for="email" class="block font-medium mb-1">Email</label>
        <input type="email" name="email" id="email" value="{{ old('email', $user->email) }}" required class="w-full border border-gray-300 rounded px-3 py-2" />
    </div>
    <div class="mb-4">
        <label for="password" class="block font-medium mb-1">Password (leave blank to keep current)</label>
        <input type="password" name="password" id="password" class="w-full border border-gray-300 rounded px-3 py-2" />
    </div>
    <div class="mb-4">
        <label for="password_confirmation" class="block font-medium mb-1">Confirm Password</label>
        <input type="password" name="password_confirmation" id="password_confirmation" class="w-full border border-gray-300 rounded px-3 py-2" />
    </div>
    <div class="mb-4">
        <label for="role" class="block font-medium mb-1">Role</label>
        <select name="role" id="role" required class="w-full border border-gray-300 rounded px-3 py-2">
            <option value="user" {{ old('role', $user->role) == 'user' ? 'selected' : '' }}>User</option>
            <option value="admin" {{ old('role', $user->role) == 'admin' ? 'selected' : '' }}>Admin</option>
        </select>
    </div>
    <div>
        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Update User</button>
        <a href="{{ route('users.index') }}" class="ml-4 text-gray-600 hover:underline">Cancel</a>
    </div>
</form>
@endsection
