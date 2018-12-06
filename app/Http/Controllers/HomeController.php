<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
    	return view('index');
    }

    public function flights()
    {
    	return view ('flights');
    }

    public function arrivals()
    {
    	return view ('arrivals');
    }

    public function departures()
    {
        return view ('departures');
    }
}
