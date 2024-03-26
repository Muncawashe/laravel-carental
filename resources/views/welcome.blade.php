@extends('layout')

@section('title', 'Car Rentals')

@section('content')
    <!-- Background Image and Search Form -->
    <div class="flex bg-cover bg-center h-96" style="background-image: url('/images/bg.jpg');">
        <div class="container mx-auto p-8 text-white">
            <h1 class="text-4xl font-semibold mb-4">Find Your Perfect Car</h1>
            <form action="/search" method="GET" class="w-1/4 space-y-4">
                <input type="text" name="vehicle_type" placeholder="Vehicle Type" class="w-full p-2 rounded-md">
                <input type="date" name="pickup_date" class="w-full p-2 rounded-md">
                <input type="date" name="return_date" class="w-full p-2 rounded-md">
                <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded-md">
                    Find Vehicle
                </button>
            </form>
        </div>
    </div>

    <!-- Why Choose Us Section -->
    <div class="container mx-auto mt-8">
        <h2 class="text-2xl font-semibold mb-4">Why Choose Us?</h2>
        <div class="flex space-x-8">
            <div class="flex flex-col items-center">
                <i class="fas fa-car text-3xl mb-2"></i>
                <p>Wide Selection of Vehicles</p>
            </div>
            <div class="flex flex-col items-center">
                <i class="fas fa-clock text-3xl mb-2"></i>
                <p>Flexible Pick-up and Return Times</p>
            </div>
            <div class="flex flex-col items-center">
                <i class="fas fa-dollar-sign text-3xl mb-2"></i>
                <p>Competitive Pricing</p>
            </div>
        </div>
    </div>
@endsection
