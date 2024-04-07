@extends('layout')

@section('content')
    <div class="bg-white p-4 rounded-lg">
        <h1 class="text-emerald-800 text-2xl font-semibold mb-4">Contact Us</h1>
        <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod, nunc eget bibendum aliquet, justo elit tincidunt libero, vel tincidunt justo elit vel libero.</p>
        <p class="mb-4">You can reach us through the following channels:</p>
        <p class="mb-4">Phone: +263 786 399 589</p>
    </div>
    <div class="container mt-8 flex items-center justify-center">
        <div class="grid grid-cols-4 gap-4 content-around">
            <a href="https://www.instagram.com/oppenheimmer._/"><div class="p-2 rounded-md flex flex-col items-center hover:bg-teal-500">
                <div class="flex"><img class="w-10" src="./images/instagram.png"></div>
                <div class="flex">
                    <h1>Instagram</h1>
                </div>
                <div class="flex">
                    <p>Follow Us @zcc</p>
                </div>
            </div></a>
            <a href="https://www.facebook.com/mukuru.michael.7/"><div class="p-2 rounded-md flex flex-col items-center hover:bg-teal-500">
                <div class="flex"><img class="w-10" src="./images/facebook.png"></div>
                <div class="flex">
                    <h1>Facebook</h1>
                </div>
                <div class="flex">
                    <p>Follow Us @zcc</p>
                </div>
            </div></a>
            <a href="https://www.facebook.com/mukuru.michael.7/"><div class="p-2 rounded-md flex flex-col items-center hover:bg-teal-500">
                <div class="flex"><img class="w-10" src="./images/whatsapp.png"></div>
                <div class="flex">
                    <h1>WhatsApp</h1>
                </div>
                <div class="flex">
                    <p>Follow Us @zcc</p>
                </div>
            </div></a>
            <a href="https://www.facebook.com/mukuru.michael.7/"><div class="p-2 rounded-md flex flex-col items-center hover:bg-teal-500">
                <div class="flex"><img class="w-10" src="./images/x.png"></div>
                <div class="flex">
                    <h1>X</h1>
                </div>
                <div class="flex">
                    <p>Follow Us @zcc</p>
                </div>
            </div></a>
        </div>
    </div>
@endsection
