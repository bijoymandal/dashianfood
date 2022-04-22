<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        return view('frontend');
    }
    public function contactpage()
    {
        return view('frontend.contact');
    }
    public function proitems()
    {
        return view('frontend.productpage');
    }
    public function loginpage()
    {
        return view('frontend.loginpage');
    }
    public function registerpage()
    {
        return view('frontend.registration');
    }
    public function vendorside()
    {
        return view('frontend.vendorpage');
    }
}