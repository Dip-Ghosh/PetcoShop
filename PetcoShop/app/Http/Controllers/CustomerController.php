<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\customer;

class CustomerController extends Controller
{
    //
    public function signin(){
    	//dd(request()->all());

    	$customer = new customer;

    	



    }

    public function signup(){
    	//dd(request()->all());

    	$customer = new customer;

    	$customer->customer_name = request('name');
    	$customer->email = request('email');
    	$customer->password = request('password');
    	$customer->phoneNO = request('phone');

    	$customer->save();

    	return redirect('\signin')


    }




}
