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
        return view('our-cars');
    }

    public function contactus()
    {
        return view('contact-us');
    }

    public function frequentlyaskedquestions()
    {
        return view('frequently-asked-questions');
    }

    public function admin()
    {
        return view('admin');
    }
}
