<?php

namespace App\Http\Controllers\Management;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use View;
use App\Car;
use Image;
use Illuminate\Support\Facades\Validator;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $cars = Car::paginate(10);
      return view('car.index', compact('cars'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('car.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $this->validate($request, [
          'picture' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
      ]);

      //dd($request);
      //image processing
      $image = $request->file('picture');
      $input['imagename'] = time().'.'.$image->getClientOriginalExtension();
      $destinationPath = public_path('/library/thumbnails');
      $img = Image::make($image->getRealPath());
      $img->resize(100, 100, function ($constraint) {
  		    $constraint->aspectRatio();
  		})->save($destinationPath.'/'.$input['imagename']);
      $destinationPath = public_path('/library/images');
      $image->move($destinationPath, $input['imagename']);
      // $this->postImage->add($input);

      // dd($input['imagename']);

      $result = Car::create(array_merge($request->all(), ['picture' => $input['imagename']]));
      if ($result) {
        return redirect('management\car')->with('success', 'Car Added');
      }
      else {
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
        $car = Car::findOrFail($id);
        return view('car.show', compact('car'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $car = Car::findOrFail($id);
        return view('car.edit', compact('car'));
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
        $car = Car::findOrFail($id);

        $this->validate($request, [
            'picture' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        //dd($request);
        //image processing
        $image = $request->file('picture');
        $input['imagename'] = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/library/thumbnails');
        $img = Image::make($image->getRealPath());
        $img->resize(100, 100, function ($constraint) {
    		    $constraint->aspectRatio();
    		})->save($destinationPath.'/'.$input['imagename']);
        $destinationPath = public_path('/library/images');
        $image->move($destinationPath, $input['imagename']);
        // $this->postImage->add($input);

        // dd($input['imagename']);

        $result = Car::create(array_merge($request->all(), ['picture' => $input['imagename']]));
        if ($result) {
          return redirect('management\car')->with('success', 'Car Updated');
        }
        else {
          return back()->with('error','Failed to Update!');
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
        $car = Car::findOrFail($id);
        $result = $car->delete();
        if ($result){
          return redirect('management\car')->with('success', 'Car deleted');
        }
        else{
          return back()->with('error','Failed to delete!');
        }
    }
}
