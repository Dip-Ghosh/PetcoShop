<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
    	return view('admin.admin');
    }
     public function showDashboard()
    {
    	return view('admin.dashboard');
    }
     public function dashboard()
    {
    	return view('admin.dashboard');
    }
}
