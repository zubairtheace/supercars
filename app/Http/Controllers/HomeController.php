<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

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
        // $contact = DB::select
        // ('
        //     SELECT
        //     footer_contact_infos.id AS footer_contact_info_id,
        //     footer_contact_infos.phone_number AS phone_number,
        //     footer_contact_infos.email AS email,
        //
        //     footer_opening_hours.id AS footer_opening_hour_id,
        //     footer_opening_hours.week_day AS week_day,
        //     footer_opening_hours.week_time AS week_time,
        //     footer_opening_hours.week_end_day AS week_day,
        //     footer_opening_hours.week_end_time AS week_time
        //
        //     FROM
        //     footer_contact_infos
        //
        // ');


        return view('home');
        // return view('home',compact('contact'));
    }

}
