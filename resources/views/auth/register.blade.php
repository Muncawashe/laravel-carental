@extends('layout')
@section('content')
    <div class="bg-white h-18 rounded-none mx-auto my-auto mt-10">
        <h1 class="font-bold text-4xl text-center">Create your Carental account</h1>
    </div>
    <form class="form  bg-white w-2/5 p-4 shadow mx-auto items-center" method="POST" action="{{ route('index') }}">
        @csrf
        <div class="flex-col space-x-2 space-y-4">
            <label class="text-xl" for="firstname">First Name</label>
            <input class="h-10 pl-2 text-xl bg-slate-200 rounded" type="text" id="firstname" value="{{ old('firstname') }}" name="firstname">
            @error('firstname')
                <div class="form-error">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="flex-col space-x-2 space-y-4">
            <label class="text-xl" for="surname">Surname</label>
            <input class="h-10 pl-2 text-xl bg-slate-200 rounded" type="text" id="surname" value="{{ old('surname') }}" name="surname">
            @error('surname')
                <div class="form-error">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="flex-col space-x-2 space-y-4">
            <label class="text-xl" for="surname">email</label>
            <input class="h-10 pl-2 text-xl bg-slate-200 rounded" type="text" id="email" value="{{ old('email') }}" name="email">
            @error('email')
                <div class="form-error">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="flex-col space-x-2 space-y-4">
            <label class="text-xl" for="username">username</label>
            <input class="h-10 pl-2 text-xl bg-slate-200 rounded" type="text" id="username" value="{{ old('username') }}" name="username">
            @error('username')
                <div class="form-error">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="flex-col space-x-2 space-y-4">
            <label class="text-xl" for="education">Education</label>
            <select class="h-10 pl-2 text-xl bg-slate-200 rounded" type="text" id="education" value="{{ old('education') }}" name="education">
                <option>High School</option>
                <option>Undergraduate</option>
                <option>Masters</option>
            </select>
            @error('education')
                <div class="education">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="flex-col space-x-2 space-y-4">
            <label class="text-xl" for="password">Password</label>
            <input class="h-10 pl-2 text-xl bg-slate-200 rounded" type="password" id="password" value="{{ old('password') }}" name="password">
            @error('password')
                <div class="password">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="flex-col space-x-2 space-y-4">
            <label class="text-xl" for="password_confirm">Confirm Password</label>
            <input class="h-10 pl-2 text-xl bg-slate-200 rounded" type="password_confirm" id="password_confirm" value="{{ old('password_confirm') }}" name="password_confirm">
            @error('password_confirm')
                <div class="password_confirm">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div>
            <button class="flex mx-auto p-2 rounded font-bold text-white bg-green-900 mt-6 " type="submit">Register</button> 
        </div>
    </form>
@endsection