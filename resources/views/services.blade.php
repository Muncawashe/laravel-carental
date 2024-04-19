@extends('layout')
@section('title', 'Services')
@section('content')
    <div class="container mt-8 flex items-center justify-center">
        <div class="grid grid-cols-4 gap-4 content-around">
            <div class="p-2 rounded-md flex flex-col items-center hover:bg-teal-500">
                <div class="flex"><img src="./images/car1.jpg"></div>
                <div class="flex">
                    <h1>Shuttle Services</h1>
                </div>
                <div class="flex">
                    <p>Best for groups, we offer shuttle services between any destination.</p>
                </div>
            </div>
            <div class="p-2 rounded-md flex flex-col items-center hover:bg-teal-500">
                <div class="flex"><img src="./images/emblem.jpg"></div>
                <div class="flex">
                    <h1>Airport Transfers</h1>
                </div>
                <div class="flex">
                    <p>Do not get delayed after checking in, get on the road right away
                        to your destinations with our
                        efficient shuttle services.</p>
                </div>
            </div>
            <div class="p-2 rounded-md flex flex-col items-center hover:bg-teal-500">
                <div class="flex"><img src="./images/emblem.jpg"></div>
                <div class="flex">
                    <h1>Chauffeur Driven Rentals</h1>
                </div>
                <div class="flex">
                    <p>We have specially trained drivers for that chauffeured experience.
                        Punctuality and professionalism are their key attributes.</p>
                </div>
            </div>
            <div class="p-2 rounded-md flex flex-col items-center hover:bg-teal-500">
                <div class="flex"><img src="./images/emblem.jpg"></div>
                <div class="flex">
                    <h1>Self Drive Rentals</h1>
                </div>
                <div class="flex">
                    <p>We understand your needs and as Impala Car Rental, we come in
                         and ensure you drive that dream car of yours even if it is just for a day or two.</p>
                </div>
            </div>
        </div>
    </div>
@endsection
