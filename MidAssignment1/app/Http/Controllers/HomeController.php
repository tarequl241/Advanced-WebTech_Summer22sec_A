<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index()
    {
        return view('home.home')
            ->with('page_title', "Home");
    }

    function aboutUs()
    {
        return view('home.about-us')
            ->with('page_title', "About Us");
    }

    function contactUs()
    {
        return view('home.contact-us')
            ->with('page_title', "Contact Us");
    }
}