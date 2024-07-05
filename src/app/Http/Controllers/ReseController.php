<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReseController extends Controller
{
    public function shop()
    {
        return view('shop');
    }

    public function thanks()
    {
        return view('thanks');
    }

    public function done()
    {
        return view('done');
    }
    
    public function register()
    {
        return view('register');
    }

    public function login()
    {
        return view('login');
    }
}
