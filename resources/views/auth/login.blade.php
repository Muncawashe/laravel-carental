@extends('layout')
@section('content')
    <div class="bg-white h-18 rounded-none mx-auto my-auto mt-10">
        <h1 class="font-bold text-4xl text-center">Login to your Carental</h1>
    </div>
    <form class="form mt-10 bg-white w-2/5 p-4 shadow mx-auto items-center" method="POST" action="{{ route('index') }}">
        @csrf
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
            <label class="text-xl" for="password">Password</label>
            <input class="h-10 pl-2 text-xl bg-slate-200 rounded" type="password" id="password" value="{{ old('password') }}" name="password">
            @error('password')
                <div class="password">
                    {{ $message }}
                </div>
            @enderror
        </div>
     
        <div>
            <button class="flex mx-auto p-2 rounded font-bold text-white bg-green-900 mt-6 text-xl " type="submit">Login</button> 
        </div>
    </form>
@endsection