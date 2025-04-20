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
        body { font-family: 'Poppins', sans-serif; }
        .sidebar-link { transition: all 0.3s ease; }
        .sidebar-link:hover { background-color: rgba(37, 99, 235, 0.1); }
        .sidebar-link.active { background-color: #2563eb; color: white; }
    </style>
</head>
<body class="bg-gray-100">
    <div class="flex h-screen bg-gray-100">
        <!-- Sidebar -->
        <div class="hidden md:flex md:flex-shrink-0">
            <div class="flex flex-col w-64 bg-white shadow-lg">
                <!-- Logo -->
                <div class="flex items-center h-16 px-4 bg-white border-b">
                    <a href="{{ url('/') }}" class="flex items-center">
                        <i class="fas fa-building text-blue-600 text-2xl mr-2"></i>
                        <span class="text-xl font-bold text-blue-600">RoomBook</span>
                    </a>
                </div>

                <!-- Navigation -->
                <div class="flex flex-col flex-1 overflow-y-auto">
                    <nav class="flex-1 px-2 py-4 space-y-1">
                        <a href="{{ url('/') }}" class="sidebar-link flex items-center px-4 py-3 text-gray-700 rounded-lg">
                            <i class="fas fa-home w-5 h-5 mr-3"></i>
                            <span>Dashboard</span>
                        </a>

                        <a href="{{ route('rooms.index') }}" class="sidebar-link flex items-center px-4 py-3 text-gray-700 rounded-lg">
                            <i class="fas fa-door-open w-5 h-5 mr-3"></i>
                            <span>Rooms</span>
                        </a>

                        <a href="{{ route('bookings.index') }}" class="sidebar-link flex items-center px-4 py-3 text-gray-700 rounded-lg">
                            <i class="fas fa-calendar-alt w-5 h-5 mr-3"></i>
                            <span>Bookings</span>
                        </a>

                        <div class="pt-4 mt-4 border-t border-gray-200">
                            <h3 class="px-4 text-xs font-semibold text-gray-500 uppercase tracking-wider">
                                Administration
                            </h3>
                            <a href="{{ route('users.index') }}" class="sidebar-link flex items-center px-4 py-3 mt-2 text-gray-700 rounded-lg">
                                <i class="fas fa-users w-5 h-5 mr-3"></i>
                                <span>Users</span>
                            </a>

                            <a href="{{ route('reports.index') }}" class="sidebar-link flex items-center px-4 py-3 text-gray-700 rounded-lg">
                                <i class="fas fa-chart-bar w-5 h-5 mr-3"></i>
                                <span>Reports</span>
                            </a>
                        </div>
                    </nav>
                </div>
            </div>
        </div>

        <!-- Main Content -->
        <div class="flex flex-col flex-1 overflow-hidden">
            <!-- Top Navigation -->
            <div class="bg-white shadow">
                <div class="flex items-center justify-between h-16 px-4">
                    <div class="flex items-center">
                        <button id="mobile-menu-button" class="text-gray-500 hover:text-gray-600 md:hidden">
                            <i class="fas fa-bars text-xl"></i>
                        </button>
                        <h1 class="ml-4 text-lg font-semibold text-gray-800">@yield('header', 'Dashboard')</h1>
                    </div>
                    <div class="flex items-center space-x-4">
                        <button class="text-gray-500 hover:text-gray-600">
                            <i class="fas fa-bell text-xl"></i>
                        </button>
                        <div class="relative">
                            <button class="flex items-center text-gray-500 hover:text-gray-600">
                                <i class="fas fa-user-circle text-xl mr-2"></i>
                                <span>Admin</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Page Content -->
            <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-100">
                <div class="container mx-auto px-6 py-8">
                    @yield('content')
                </div>
            </main>
        </div>
    </div>

    <!-- Mobile Sidebar -->
    <div id="mobile-sidebar" class="fixed inset-0 z-40 hidden">
        <!-- Background overlay -->
        <div class="fixed inset-0 bg-gray-600 opacity-75"></div>

        <!-- Sidebar -->
        <div class="relative flex flex-col w-64 max-w-xs bg-white h-full">
            <div class="absolute top-0 right-0 -mr-12 pt-2">
                <button id="close-sidebar-button" class="ml-1 flex items-center justify-center h-10 w-10 rounded-full focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white">
                    <i class="fas fa-times text-white"></i>
                </button>
            </div>

            <!-- Mobile sidebar content (same as desktop) -->
            <div class="flex-1 flex flex-col pt-5 pb-4 overflow-y-auto">
                <div class="flex items-center flex-shrink-0 px-4">
                    <i class="fas fa-building text-blue-600 text-2xl mr-2"></i>
                    <span class="text-xl font-bold text-blue-600">RoomBook</span>
                </div>
                <nav class="mt-5 flex-1 px-2 space-y-1">
                    <!-- Same navigation items as desktop -->
                </nav>
            </div>
        </div>
    </div>

    <script>
        // Mobile menu functionality
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const closeSidebarButton = document.getElementById('close-sidebar-button');
        const mobileSidebar = document.getElementById('mobile-sidebar');

        mobileMenuButton.addEventListener('click', () => {
            mobileSidebar.classList.remove('hidden');
        });

        closeSidebarButton.addEventListener('click', () => {
            mobileSidebar.classList.add('hidden');
        });
    </script>
</body>
</html>
