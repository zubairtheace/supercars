<?php

namespace App\Http\Controllers;

use App\User;
use DB;
use Illuminate\Http\Request;
use Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = DB::select
        ('
            SELECT
            users.id AS id,
            users.first_name AS first_name,
            users.last_name AS last_name,
            users.user_type AS user_type

            FROM
            users
        ');

        return view('user.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = collect( DB::select
        ('
            SELECT
            users.id AS id,
            users.first_name AS first_name,
            users.last_name AS last_name,
            users.user_type AS user_type,
            users.nic AS nic,
            users.gender AS gender,
            users.dob AS dob,
            users.address AS address,
            users.phone_number AS phone_number,
            users.email AS email

            FROM
            users

            WHERE
            users.id = "'.$id.'"

        '))->first();
        // dd($user);
        return view('user.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('user.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $data, $id)
    {
        $user = User::find($id);
        $user->first_name = $data['first_name'];
        $user->last_name = $data['last_name'];
        $user->user_type = $data['user_type'];
        $user->nic = $data['nic'];
        $user->gender = $data['gender'];
        $user->dob = $data['dob'];
        $user->address = $data['address'];
        $user->phone_number = $data['phone_number'];
        $user->email = $data['email'];
        $result = $user->save();

        if (Auth::user()->user_type == "registered"){

            if ($result){
                return redirect()->route('user.show', Auth::user()->id)->with('success', 'Profile Updated');
            }
            else{
                return back()->with('error','Failed to save!');
            }
        }
        else{

            if ($result){
                return redirect('user')->with('success', 'User Updated');
            }
            else{
                return back()->with('error','Failed to save!');
            }
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
        $user = User::findOrFail($id);
        $result = $user->delete();
        if ($result){
            return redirect('user')->with('success', 'User deleted');
        }
        else{
            return back()->with('error','Failed to delete!');
        }
    }
}
