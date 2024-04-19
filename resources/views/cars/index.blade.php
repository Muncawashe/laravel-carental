@extends('layout')
@section('title', 'Vehicles')
@section('content')
    <div class="flex space-x-2">
        <div class="flex-col w-1/4 bg-grey-800 p-4">
            <div class="flex-col space-y-4">
                <h1 class="font-bold text-2xl">Search // Filter</h1>
                <form>
                    <label for="default-search"
                        class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-gray-300">Search</label>
                    <div class="relative">
                        <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                            <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                            </svg>
                        </div>
                        <input type="search" id="filter-search"
                            class="block p-4 pl-10 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Search Cars e.g BMW..." required>
                        <button type="submit"
                            class="text-white absolute right-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
                    </div>
                </form>

                <form class="max-w-sm mx-auto">
                    <label for="countries" class="font-bold  text-2xl">Select Brand</label>
                    <select id="countries"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option selected>Brands</option>
                        <option value="mazda">Mazda</option>
                        <option value="bmw">BMW</option>
                        <option value="benz">Mercedes</option>
                        <option value="toyota">Toyota</option>
                        <option value="vw">VW</option>
                        <option value="lexus">Lexus</option>
                        <option value="kia">Kia</option>
                        <option value="nissan">Nissan</option>
                    </select>
                </form>

                <ul class="space-y-4 font-bold">
                    <div class="hover:bg-teal-800 p-2 rounded-md hover:translate-x-2">
                        <li class="text-xl"><a href="#">Sedans</a></li>
                    </div>
                    <div class="hover:bg-teal-800 p-2 rounded-md hover:translate-x-2">
                        <li class="text-xl"><a href="#">SUV</a></li>
                    </div>
                    <div class="hover:bg-teal-800 p-2 rounded-md hover:translate-x-2">
                        <li class="text-xl"><a href="#">Fuel Saver</a></li>
                    </div>
                    <div class="hover:bg-teal-800 p-2 rounded-md hover:translate-x-2">
                        <li class="text-xl"><a href="#">Trucks</a></li>
                    </div>
                </ul>
            </div>
        </div>
        <div class="flex-col w-3/4 bg-white p-2">
            <div class="container mt-8 flex items-center justify-center">
                <h1 class="font-bold text-teal-500 text-5xl">Cars Available</h1>

            </div>

            <div class="container mt-8 flex items-center justify-center">
                <div class="grid grid-cols-4 gap-4 content-around">
                    @if (is_countable($cars) && count($cars) > 0)
                        @foreach ($cars as $car)
                        <a href="{{ route('cars.show', ['car' => $car['id']])}}">
                            <div class="p-2 rounded-md flex flex-col items-center hover:bg-slate-100">
                                <img src="/storage/{{$car->image}}">
                                <div class="flex">
                                    <h1 class="font-bold text-xl">{{ $car['make'] }}</h1>
                                </div>
                                <div class="flex">
                                    <h1>{{ $car['model'] }}</h1>
                                </div>
                                <div class="flex">
                                    <h1>{{ $car['fuelpkm'] }}</h1>
                                </div>
                            </div>
                        </a>
                        @endforeach
                    @else
                        <h2 class="text-gray-5">There are no cars to display</h2>
                    @endif


                </div>
            </div>
        </div>

    </div>
    </div>

@endsection
