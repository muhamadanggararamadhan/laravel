<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>@yield('title', 'Room Booking System')</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.3.2/dist/tailwind.min.css" rel="stylesheet">
    <link href='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.css' rel='stylesheet' />
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.js'></script>
</head>
<body class="bg-gray-100 min-h-screen font-sans">
    <div class="min-h-screen flex flex-col">
        <header class="bg-blue-600 text-white p-4 shadow">
            <div class="container mx-auto flex justify-between items-center">
                <h1 class="text-xl font-bold">Room Booking System</h1>
                <nav>
                    <a href="{{ url('/') }}" class="px-3 py-2 hover:bg-blue-700 rounded">Home</a>
                    <a href="{{ route('rooms.index') }}" class="px-3 py-2 hover:bg-blue-700 rounded">Rooms</a>
                    <a href="{{ route('bookings.index') }}" class="px-3 py-2 hover:bg-blue-700 rounded">Bookings</a>
                    <a href="{{ route('users.index') }}" class="px-3 py-2 hover:bg-blue-700 rounded">Users</a>
                    <a href="{{ route('reports.index') }}" class="px-3 py-2 hover:bg-blue-700 rounded">Reports</a>
                </nav>
            </div>
        </header>
        <main class="flex-grow container mx-auto p-4">
            @yield('content')
        </main>
        <footer class="bg-gray-200 text-center p-4 text-sm text-gray-600">
            &copy; {{ date('Y') }} Room Booking System
        </footer>
    </div>
</body>
</html>
