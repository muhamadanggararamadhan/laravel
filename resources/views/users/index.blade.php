@extends('layouts.app')

@section('title', 'Users')

@section('content')
<div class="flex justify-between items-center mb-4">
    <h2 class="text-2xl font-semibold">Users</h2>
    <a href="{{ route('users.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Add User</a>
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
            <th class="py-2 px-4 border-b">Email</th>
            <th class="py-2 px-4 border-b">Role</th>
            <th class="py-2 px-4 border-b">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($users as $user)
        <tr>
            <td class="py-2 px-4 border-b">{{ $user->name }}</td>
            <td class="py-2 px-4 border-b">{{ $user->email }}</td>
            <td class="py-2 px-4 border-b">{{ ucfirst($user->role) }}</td>
            <td class="py-2 px-4 border-b">
                <a href="{{ route('users.edit', $user) }}" class="text-blue-600 hover:underline mr-2">Edit</a>
                <form action="{{ route('users.destroy', $user) }}" method="POST" class="inline" onsubmit="return confirm('Are you sure you want to delete this user?');">
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
