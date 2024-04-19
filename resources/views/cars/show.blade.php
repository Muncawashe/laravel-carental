@extends('layout')
@section('title', 'Car Details')
@section('content')
<div class="flex p-4 mt-8">
    <div class="flex w-1/2 bg-red-500">
        <img src="/storage/{{$car->image}}">
    </div>
    <div class="flex w-1/2 ">
        <div class="p-2 rounded-md flex flex-col">
            <div class="flex m-4">
                <h1>{{ $car['make'] }}</h1>
                <h1> </h1>
                <h1>{{ $car['model'] }}</h1>
                <hr>
            </div>
            <div class="flex m-4">
                <h1>{{ $car['fuelpkm'] }}</h1>
            </div>
            <div>
                <button class="ml-4 mb-0 bg-transparent hover:bg-green-500 text-green-700 font-semibold hover:text-white py-2 px-4 border border-green-500 hover:border-transparent rounded">Book Now</button>
            </div>
        </div>
    </div>
</div>

{{-- <div class="p-2 rounded-md flex flex-col items-center hover:bg-teal-500">
    <img class="w-3/5" src="/storage/{{$car->image}}">
    <div class="flex">
        <h1>{{ $car['make'] }}</h1>
    </div>
    <div class="flex">
        <h1>{{ $car['model'] }}</h1>
    </div>
    <div class="flex">
        <h1>{{ $car['fuelpkm'] }}</h1>
    </div>
</div> --}}

@endsection
