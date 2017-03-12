<?php

namespace App\Http\Controllers\Management;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use View;
use App\Make;
use App\Http\Requests\CreateMakeFormRequest;

class MakeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $makes = Make::paginate(10);
        return view('make.index', compact('makes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View::make('make.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateMakeFormRequest $request)
    {
      $result = Make::create($request->all());
      if ($result){
        return redirect('management\make')->with('success', 'Car Make Added');
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
        $make = Make::findOrFail($id);
        return view('make.show', compact('make'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $make = Make::findOrFail($id);
        return view('make.edit', compact('make'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CreateMakeFormRequest $request, $id)
    {
        $make = Make::findOrFail($id);
        $result = $make->update($request->all());
        if ($result){
          return redirect('management\make')->with('success', 'Make Updated');
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
        $make = Make::findOrFail($id);
        $result = $make->delete();
        if ($result){
          return redirect('management\make')->with('success', 'Make deleted');
        }
        else{
          return back()->with('error','Failed to delete!');
        }
    }
}
