@extends('layout')

@section('content')
    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">

        <form class="grid grid-cols-4 gap-4 form bg-white p-6 border-1 rounded-xl mt-12" method="POST" enctype="multipart/form-data"
            action="{{ route('bookings.store') }}">
            @csrf
            <div class="">
                <label class="text-sm" for="make">Car Make</label>
                <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg  w-full ps-10 p-2.5" type="text" id="make" value="{{ old('make') }}" name="make">
                @error('make')
                    <div class="form-error">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div>
                <label class="text-sm" for="model">Model</label>
                <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg  w-full ps-10 p-2.5" type="text" id="model" name="model" value="{{ old('model') }}">
                @error('model')
                    <div class="form-error">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div>
                <label class="text-sm" for="departure">Departure City</label>
                <select class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg  w-full ps-10 p-2.5" name="departure" id="departure">
                    <option value="harare">Harare</option>
                    <option value="kwekwe">Kwekwe</option>
                    <option value="bulawayo">Bulawayo</option>
                    <option value="gweru">Gweru</option>
                </select>
                @error('departure')
                    <div class="form-error">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div>
                <label class="text-sm" for="collection">Pick Up Date</label>
                <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg  w-full ps-10 p-2.5" type="date" id="collection" name="collection"
                    value="{{ old('collection') }}">
                @error('collection')
                    <div class="form-error">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div>
                <label class="text-sm" for="destination">Destination City</label>
                <select class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg  w-full ps-10 p-2.5" name="destination" id="destination">
                    <option value="harare">Harare</option>
                    <option value="kwekwe">Kwekwe</option>
                    <option value="bulawayo">Bulawayo</option>
                    <option value="gweru">Gweru</option>
                </select>
                @error('destination')
                    <div class="form-error">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div>
                <label class="text-sm" for="dropoff">Drop Off Date</label>
                <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg  w-full ps-10 p-2.5" type="date" id="dropoff" name="dropoff" value="{{ old('dropoff') }}">
                @error('dropoff')
                    <div class="form-error">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div>
                <label class="text-sm" for="name">Full Name</label>
                <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg  w-full ps-10 p-2.5" type="text" id="name" value="{{ old('name') }}" name="name">
                @error('name')
                    <div class="form-error">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div>
                <label class="text-sm" for="email">Email</label>
                <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg  w-full ps-10 p-2.5" type="email" id="email" value="{{ old('email') }}" name="email">
                @error('email')
                    <div class="form-error">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div>
                <label class="text-sm" for="phone">Phone Number</label>
                <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg  w-full ps-10 p-2.5" type="text" id="phone" value="{{ old('phone') }}" name="phone">
                @error('phone')
                    <div class="form-error">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div>
                <label class="text-sm" for="phone">Message</label>
                <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg  w-full ps-10 p-2.5" type="text" id="message" value="{{ old('message') }}" name="message">
                @error('message')
                    <div class="form-error">
                        {{ $message }}
                    </div>
                @enderror

            </div>

            <div class="flex">
                <button class="ml-4 mb-0 bg-transparent hover:bg-green-500 text-green-700 font-semibold hover:text-white py-2 px-4 border border-green-500 hover:border-transparent rounded" type="submit">Book Vehicle</button>
            </div>
        </form>
        @if(Session::has('success'))
                    <div class="alert alert-success ">
                        {{ Session::get('success') }}
                    </div>
        @endif

    </div>
@endsection
