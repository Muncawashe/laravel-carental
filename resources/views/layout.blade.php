<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite('resources/css/app.css')

        <title>@yield('title')</title>
    </head>

<body class="bg-gray-100">
    <nav class="navbar bg-emerald-800 p-4">
        <a href="/" class="navbar-brand text-white font-semibold text-xl">Car Rentals</a>
        <ul class="navbar-nav flex space-x-4">
            <li class="nav-item">
                <a href="{{ route('cars.index') }}" class="nav-link text-blue-200 hover:text-white">Vehicles</a>
            </li>
            <li class="nav-item">
                <a href="{{ route('home.services') }}" class="nav-link text-blue-200 hover:text-white">Services</a>
            </li>
            <li class="nav-item">
                <a href="{{ route('cars.vehicles') }}" class="nav-link text-blue-200 hover:text-white">Locations</a>
            </li>
            <li class="nav-item">
                <a href="{{ route('home.contact') }}" class="nav-link text-blue-200 hover:text-white">Contact</a>
            </li>
            <li class="nav-item">
                <a href="{{ route('bookings.index') }}" class="nav-link text-blue-200 hover:text-white">Bookings</a>
            </li>
        </ul>
    </nav>

    <div class="container mx-auto">
        @yield('content')
    </div>

    {{-- <footer class="bg-emerald-800 text-white text-center py-4 fixed bottom-0 w-full">
        <div class="flex justify-center space-x-4">
            <a href="#" class="hover:text-yellow-300">
                <i class="fab fa-facebook"></i>
            </a>
            <a href="#" class="hover:text-yellow-300">
                <i class="fab fa-twitter"></i>
            </a>
            <a href="#" class="hover:text-yellow-300">
                <i class="fab fa-instagram"></i>
            </a>
        </div>
        <p>© {{ date('Y') }} Car Rentals. All rights reserved.</p>
    </footer> --}}

</body>
</html>

