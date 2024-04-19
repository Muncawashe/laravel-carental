@extends('layout')

@section('content')
    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">

        <form class="form bg-white p-6 border-1" method="POST" enctype="multipart/form-data" action="{{ route('bookings.store') }}">
            @csrf
            <div>
                <label class="text-sm" for="make">Car Make</label>
                <input class="text-lg border-1" type="text" id="make" value="{{ old('make') }}" name="make">
                @error('make')
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
                <label class="text-sm" for="departure">Departure City</label>
                <select name="departure" id="departure">
                    <option value="harare">Harare</option>
                    <option value="kwekwe">Kwekwe</option>
                    <option value="bulawayo">Bulawayo</option>
                    <option value="gweru">Gweru</option>
                  </select>
                @error('fuelpkm')
                    <div class="form-error">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div>
                <label class="text-sm" for="image">Image</label>
                <input class="text-lg border-1" type="file" id="image" name="image" value="{{ old('image') }}">
                @error('image')
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
