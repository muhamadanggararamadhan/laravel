<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>@yield('title', 'Room Booking System')</title>
    <link href="https://cdn.tailwindcss.com" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f8fafc;
        }
        .nav-link {
            position: relative;
        }
        .nav-link::after {
            content: '';
            position: absolute;
            bottom: -2px;
            left: 0;
            width: 0;
            height: 2px;
            background-color: #2563eb;
            transition: width 0.3s ease;
        }
        .nav-link:hover::after {
            width: 100%;
        }
    </style>
</head>
<body class="min-h-screen flex flex-col">
    <!-- Navigation -->
    <nav class="bg-white shadow-md">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex">
                    <div class="flex-shrink-0 flex items-center">
                        <a href="{{ url('/') }}" class="flex items-center space-x-2">
                            <i class="fas fa-building text-blue-600 text-2xl"></i>
                            <span class="text-xl font-bold bg-gradient-to-r from-blue-600 to-blue-800 text-transparent bg-clip-text">
                                RoomBook
                            </span>
                        </a>
                    </div>
                </div>

                <!-- Desktop Navigation -->
                <div class="hidden sm:flex sm:items-center sm:space-x-8">
                    <a href="{{ route('rooms.index') }}" class="nav-link flex items-center px-3 py-2 text-gray-700 hover:text-blue-600 transition-colors duration-200">
                        <i class="fas fa-door-open mr-2"></i>
                        <span>Rooms</span>
                    </a>
                    <a href="{{ route('bookings.index') }}" class="nav-link flex items-center px-3 py-2 text-gray-700 hover:text-blue-600 transition-colors duration-200">
                        <i class="fas fa-calendar-alt mr-2"></i>
                        <span>Bookings</span>
                    </a>
                    <a href="{{ route('users.index') }}" class="nav-link flex items-center px-3 py-2 text-gray-700 hover:text-blue-600 transition-colors duration-200">
                        <i class="fas fa-users mr-2"></i>
                        <span>Users</span>
                    </a>
                    <a href="{{ route('reports.index') }}" class="nav-link flex items-center px-3 py-2 text-gray-700 hover:text-blue-600 transition-colors duration-200">
                        <i class="fas fa-chart-bar mr-2"></i>
                        <span>Reports</span>
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Mobile Navigation -->
    <div class="sm:hidden bg-white border-t shadow-md">
        <div class="grid grid-cols-4 gap-1 p-2">
            <a href="{{ route('rooms.index') }}" class="flex flex-col items-center py-2 text-gray-700 hover:text-blue-600 transition-colors duration-200">
                <i class="fas fa-door-open mb-1"></i>
                <span class="text-xs">Rooms</span>
            </a>
            <a href="{{ route('bookings.index') }}" class="flex flex-col items-center py-2 text-gray-700 hover:text-blue-600 transition-colors duration-200">
                <i class="fas fa-calendar-alt mb-1"></i>
                <span class="text-xs">Bookings</span>
            </a>
            <a href="{{ route('users.index') }}" class="flex flex-col items-center py-2 text-gray-700 hover:text-blue-600 transition-colors duration-200">
                <i class="fas fa-users mb-1"></i>
                <span class="text-xs">Users</span>
            </a>
            <a href="{{ route('reports.index') }}" class="flex flex-col items-center py-2 text-gray-700 hover:text-blue-600 transition-colors duration-200">
                <i class="fas fa-chart-bar mb-1"></i>
                <span class="text-xs">Reports</span>
            </a>
        </div>
    </div>

    <!-- Main Content -->
    <main class="flex-grow">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-white shadow-md mt-8">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <div class="text-gray-600 text-sm mb-4 md:mb-0">
                    &copy; {{ date('Y') }} RoomBook. All rights reserved.
                </div>
                <div class="flex space-x-6">
                    <a href="#" class="text-gray-500 hover:text-blue-600 transition-colors duration-200">
                        <i class="fab fa-facebook text-xl"></i>
                    </a>
                    <a href="#" class="text-gray-500 hover:text-blue-400 transition-colors duration-200">
                        <i class="fab fa-twitter text-xl"></i>
                    </a>
                    <a href="#" class="text-gray-500 hover:text-pink-600 transition-colors duration-200">
                        <i class="fab fa-instagram text-xl"></i>
                    </a>
                    <a href="#" class="text-gray-500 hover:text-blue-800 transition-colors duration-200">
                        <i class="fab fa-linkedin text-xl"></i>
                    </a>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>
