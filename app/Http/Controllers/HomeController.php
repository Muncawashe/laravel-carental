<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        return view('welcome');
    }

    public function register(){
        return view('auth.register');
    }

    public function login(){
        return view('auth.login');
    }

    public function contact(){
        return view('contact');
    }
    public function vehicles(){
        return view('vehicles');
    }

    public function services(){
        return view('services');
    }
}
