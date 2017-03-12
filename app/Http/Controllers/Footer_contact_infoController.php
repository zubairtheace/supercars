<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;
use App\Footer_contact_info;
use App\Http\Requests\CreateFooter_contact_infoFormRequest;

class Footer_contact_infoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $footer_contact_infos = Footer_contact_info::paginate(10);
        return view('footer_contact_info.index', compact('footer_contact_infos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View::make('footer_contact_info.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateFooter_contact_infoFormRequest $request)
    {
        $result = Footer_contact_info::create($request->all());
        if ($result){
          return redirect('footer_contact_info')->with('success', 'Contact Info Added');
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
        $footer_contact_info = Footer_contact_info::findOrFail($id);
        return view('footer_contact_info.show', compact('footer_contact_info'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $footer_contact_info = Footer_contact_info::findOrFail($id);
        return view('footer_contact_info.edit', compact('footer_contact_info'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CreateFooter_contact_infoFormRequest $request, $id)
    {
        $footer_contact_info = Footer_contact_info::findOrFail($id);
        $result = $footer_contact_info->update($request->all());
        if ($result){
          return redirect('footer_contact_info')->with('success', 'Contact Info Updated');
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
        $footer_contact_info = Footer_contact_info::findOrFail($id);
        $result = $footer_contact_info->delete();
        if ($result){
          return redirect('footer_contact_info')->with('success', 'Contact Info deleted');
        }
        else{
          return back()->with('error','Failed to delete!');
        }
    }
}
