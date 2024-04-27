<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cars;

class CarvillaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cars = Cars::all();
        $latestCars = Cars::latest()->take(3)->get();

        $data = [
            "latestCars" => $latestCars,
            'cars' => $cars,
        ];

        return view("content", $data);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("content");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'model' => 'required',
            'mileage' => 'required',
            'make' => 'required',
            'price' => 'required',
            'horsepower' => 'required',
            'transmission' => 'required',
            'description' => 'required',
            'image'=> 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);


        $car=new Cars();
        $car->model=request("model");
        $car->mileage=request("mileage");
        $car->make=request("make");
        $car->price=request("price");
        $car->horsepower=request("horsepower");
        $car->transmission=request("transmission");
        $car->description=request("description");
        
        if($request->hasfile('image'))
        {
            $file=$request->file('image');
            $extention=$file->getClientOriginalExtension();
            $filename=time(). '.' .$extention;
            $file->move('uploads/',$filename);
            $car->image=$filename;
        }
        $car->save();
        return redirect("/");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $selectedCar=Cars::find($id);
        return view("show", compact("selectedCar"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $car=Cars::find($id);
        return view("update", compact("car"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $car=Cars::find($id);

        $request->validate([
            'model' => 'required',
            'mileage' => 'required',
            'make' => 'required',
            'price' => 'required',
            'horsepower' => 'required',
            'transmission' => 'required',
            'description' => 'required',
            'image'=> 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $car->model=request("model");
        $car->mileage=request("mileage");
        $car->make=request("make");
        $car->price=request("price");
        $car->horsepower=request("horsepower");
        $car->transmission=request("transmission");
        $car->description=request("description");
        
        if($request->hasfile('image'))
        {
            $file=$request->file('image');
            $extention=$file->getClientOriginalExtension();
            $filename=time(). '.' .$extention;
            $file->move('uploads/',$filename);
            $car->image=$filename;
        }
        $car->save();
        return redirect("/");

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $car=Cars::find($id);
        $car->delete();
        return redirect('/');
    }
}
