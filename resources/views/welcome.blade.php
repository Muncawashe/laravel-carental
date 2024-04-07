@extends('layout')

@section('title', 'Car Rentals')

@section('content')
    <!-- Background Image and Search Form -->
    <div class="flex bg-cover bg-center h-120" style="background-image: url('/images/header.jpg');">
        <div class="container mx-auto p-8 text-white">
            <h1 class="text-5xl font-semibold mb-2 text-red-500">FIND YOUR PERFECT CAR</h1>
            <form action="/search" method="GET" class="bg-teal-500 p-2 rounded-xl w-1/4 space-y-2">
                <label class="font-bold ">Vehicle Type</label>
                <input type="text" name="vehicle_type" placeholder="Vehicle Type" class="text-black w-full p-2 rounded-md">
                <label class="font-bold ">Pickup Date</label>
                <input type="date" name="pickup_date" class="text-black w-full p-2 rounded-md">
                <label class="font-bold ">Return Date</label>
                <input type="date" name="return_date" class="text-black w-full p-2 rounded-md">
                <button type="submit" class="bg-blue-500 font-bold hover:bg-blue-600 text-white py-2 px-4 rounded-md ">
                    Find Vehicle
                </button>
            </form>
        </div>
    </div>


    <div class="container mt-8 flex items-center justify-center">
        <h1 class="font-bold text-teal-500 text-5xl">Affiliates</h1>

    </div>

    <div class="container mt-8 flex items-center justify-center">
        <div class="flex space-x-8">
            <div class="p-2 rounded-md flex flex-col items-center hover:bg-teal-500 hover:translate-y-2">
                <img class="w-3/5" src="./images/suzuki.png">
            </div>
            <div class="p-2 rounded-md flex flex-col items-center hover:bg-teal-500">
                <img class="mt-4" src="./images/audi.png">
            </div>
            <div class="p-2 rounded-md flex flex-col items-center hover:bg-teal-500">
                <img src="./images/honda.png">
            </div>
        </div>
    </div>

    <!-- Why Choose Us Section -->
    <div class="container mt-8 flex items-center justify-center">
        <h1 class="font-bold text-teal-500 text-5xl">Why Choose Us?</h1>
    </div>
    <div class="container mt-8 flex items-center justify-center">
        <div class="flex space-x-8">
            <div class="p-2 rounded-md flex flex-col items-center hover:bg-teal-500">
                <h1 class="text-xl font-bold">Wide Selection of Vehicles></h1>
                <p> We offer an extensive fleet of vehicles to cater to your unique needs,
                    preferences, and budget. From compact cars to luxury sedans,
                     spacious SUVs, and vans, you're sure to find the perfect vehicle for your trip.</p>
            </div>
            <div class="p-2 rounded-md flex flex-col items-center hover:bg-teal-500">
                <h1 class="text-xl font-bold">Flexible Pick-up and Return Times</h1>
                <p> We understand that travel plans can change unexpectedly. That's why we offer
                convenient and flexible pick-up and return times to accommodate your schedule.
                We work around your needs to provide a stress-free car rental experience.</p>

            </div>
            <div class="p-2 rounded-md flex flex-col items-center hover:bg-teal-500">
                <h1 class="text-xl font-bold">Competitive Pricing</h1>
                <p>: Our prices are highly competitive without compromising the quality of
                     our vehicles and service. We offer transparent pricing with no hidden fees,
                     so you can enjoy the best value for your money.</p>
            </div>
        </div>
    </div>


@endsection
