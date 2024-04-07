@extends('layout')

@section('content')
    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">

        <form class="form bg-white p-6 border-1" method="POST" action="{{ route('cars.store') }}">
            @csrf
            <div>
                <label class="text-sm" for="make">Car make</label>
                <input class="text-lg border-1" type="text" id="make" value="{{ old('make') }}" name="make">
                @error('car-make')
                    <div class="form-error">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div>
                <label class="text-sm" for="model">model</label>
                <input class="text-lg border-1" type="text" id="model" name="model" value="{{ old('model') }}">
                @error('model')
                    <div class="form-error">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div>
                <label class="text-sm" for="fuelpkm">Fuel Consumption</label>
                <input class="text-lg border-1" type="text" id="fuelpkm" name="fuelpkm" value="{{ old('fuelpkm') }}">
                @error('fuelpkm')
                    <div class="form-error">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div>
                <button class=" border-1" type="submit">Submit</button>
            </div>
        </form>

    </div>
@endsection
