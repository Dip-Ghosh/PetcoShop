<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Homecontroller extends Controller
{
    public fun ction index()
    { 
    	return view('pages.home');
    }
}
