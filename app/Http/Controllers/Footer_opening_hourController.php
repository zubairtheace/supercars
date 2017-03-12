<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;
use App\Footer_opening_hour;
use App\Http\Requests\CreateFooter_opening_hourFormRequest;


class Footer_opening_hourController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $footer_opening_hours = Footer_opening_hour::paginate(10);
        return view('footer_opening_hour.index', compact('footer_opening_hours'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View::make('footer_opening_hour.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateFooter_opening_hourFormRequest $request)
    {
        $result = Footer_opening_hour::create($request->all());
        if ($result){
          return redirect('footer_opening_hour')->with('success', 'Opening Hours Added');
        }
        else{
          return back()->with('error','Failed to save!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $footer_opening_hour = Footer_opening_hour::findOrFail($id);
        return view('footer_opening_hour.show', compact('footer_opening_hour'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $footer_opening_hour = Footer_opening_hour::findOrFail($id);
        return view('footer_opening_hour.edit', compact('footer_opening_hour'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CreateFooter_opening_hourFormRequest $request, $id)
    {
        $footer_opening_hour = Footer_opening_hour::findOrFail($id);
        $result = $footer_opening_hour->update($request->all());
        if ($result){
          return redirect('footer_opening_hour')->with('success', 'Opening Hours Updated');
        }
        else{
          return back()->with('error','Failed to update!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $footer_opening_hour = Footer_opening_hour::findOrFail($id);
        $result = $footer_opening_hour->delete();
        if ($result){
          return redirect('footer_opening_hour')->with('success', 'Opening Hours deleted');
        }
        else{
          return back()->with('error','Failed to delete!');
        }
    }
}
