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

    public function about()
    {
        return view ('about');
    }

    public function contact()
    {
        return view ('contact');
    }

    public function carpool()
    {
        return view ('Carpool.carpool');
    }

    public function gas()
    {
        return view ('GasStations.gas');
    }

   
}
