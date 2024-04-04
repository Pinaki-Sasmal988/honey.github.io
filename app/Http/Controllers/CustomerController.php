<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function aboutUs(){
        return view('customer.about');
    }
    public function home(){
        return view('customer.home');
    }
    public function contact(){
        return view('customer.contact');
    }
    public function order(){
        return view('customer.order');
    }
    public function addToCard(){
        return view('customer.addToCard');
    }
}
