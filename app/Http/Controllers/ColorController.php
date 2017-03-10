<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;
use App\Color;
use Illuminate\Support\Facades\Validator;

class ColorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $colors = Color::paginate(10);
      return view('color.index', compact('colors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View::make('color.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request);
        $result = Color::create($request->all());
        if ($result){
          return redirect('color')->with('success', 'Color Added');
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
      $color = Color::findOrFail($id);
      return view('color.show', compact('color'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $color = Color::findOrFail($id);
        return view('color.edit', compact('color'));
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
        $color = Color::findOrFail($id);
        $result = $color->update($request->all());
        if ($result){
          return redirect('color')->with('success', 'Color Updated');
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
      $color = Color::findOrFail($id);
      $result = $color->delete();
      if ($result){
        return redirect('color')->with('success', 'Color deleted');
      }
      else{
        return back()->with('error','Failed to delete!');
      }
    }    
}
