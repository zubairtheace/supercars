<?php

namespace App\Http\Controllers;

use Request;
use App\Http\Requests\QuotationRequest;
use App\Http\Controllers\Controller;
use View;
use App\Quotation;
use Auth;
use DB;
use App\Car;
use Mail;

class QuotationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $quotations = Quotation::paginate(10);
        return view('quotation.index', compact('quotations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // dd(Request::segments());
        $car_id = Request::segment(3);
        // dd($segment3);
        $car = collect( DB::select
        ('
            SELECT
            cars.id AS id,
            cars.model AS model,
            cars.type AS type,
            cars.year AS year,
            cars.engine_capacity AS engine_capacity,
            cars.transmission AS transmission,
            cars.mileage AS mileage,
            cars.price AS price,

            makes.name AS make,
            colors.name AS color

            FROM
            cars,
            makes,
            colors

            WHERE
            cars.id = "'.$car_id.'"
            AND
            cars.make_id = makes.id
            AND
            cars.color_id = colors.id
        '))->first();
        // dd($car);
        return view('quotation.create', compact('car'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(QuotationRequest $request)
    {

        if (Quotation::where('user_id',$request['user_id'])->where('car_id', $request['car_id'])->count() == 0){
            $quotation = Quotation::create([
                'title' => $request['title'],
                'user_id' => $request['user_id'],
                'car_id' => $request['car_id'],
                'message' => $request['message']
            ]);

            $car = Car::findOrFail($request['car_id']);

            $title = "Car Quotation"; // can also appen car name here
            $name = Auth::user()->first_name.' '.Auth::user()->last_name;
            $email = 'tofy.zubair@gmail.com'; //Auth::user()->email;

            Mail::send('email.quotation', ['title' => $title, 'content' => $car], function ($message) use ( $email, $name, $title)
            {
                $message->from('support@supercars.io', 'Supercars Customer Service');
                $message->to($email, $name);
                $message->subject($title);
            });

            if ($quotation){
                return redirect('management/car')->with('success', 'You have Successfully generated a Quotation.');
            }
            else{
                return back()->with('error','Failed to save!');
            }
        }
        else{
            return redirect('management/car')->with('error','You have already generated a quotation for this car!');
        }





        // $result = Quotation::create($request->all());
        // if ($result){
        //     return redirect('management/car')->with('success', 'Quotation Added');
        // }
        // else{
        //     return back()->with('error','Failed to save!');
        // }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $quotation = Quotation::findOrFail($id);
        return view('quotation.show', compact('quotation'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $quotation = Quotation::findOrFail($id);
        $result = $quotation->delete();
        if ($result){
            return redirect('quotation')->with('success', 'Quotation deleted');
        }
        else{
            return back()->with('error','Failed to delete!');
        }
    }
}
