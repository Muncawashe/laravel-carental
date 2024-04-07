@extends('layout')
@section('title', 'Car Details')
@section('content')

<div class="p-2 rounded-md flex flex-col items-center hover:bg-teal-500">
    <img class="w-3/5" src="./images/suzuki.png">
    <div class="flex">
        <h1>{{ $car['make'] }}</h1>
    </div>
    <div class="flex">
        <h1>{{ $car['model'] }}</h1>
    </div>
    <div class="flex">
        <h1>{{ $car['fuelpkm'], 'liters per kilometer' }}</h1>
    </div>
</div>

@endsection
