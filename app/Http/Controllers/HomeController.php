<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function ourcars()
    {
        return view('pages/our-cars');
    }

    public function contactus()
    {
        return view('pages/contact-us');
    }

    public function frequentlyaskedquestions()
    {
        return view('pages/frequently-asked-questions');
    }

    public function admin()
    {
        return view('pages/admin');
    }
}
