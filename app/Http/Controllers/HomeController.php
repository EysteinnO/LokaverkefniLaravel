<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
    	return view('index');
    }

    public function ships()
    {
    	return view ('ships');
    }

    public function shipsdata()
    {
    	return view ('shipsdata');
    }
}
