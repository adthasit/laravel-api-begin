<?php

namespace App\Http\Controllers;


use App\Car;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CarController extends Controller
{
    //GET ALL
    public function index(Request $request) {
        //get ?search=search as request if exists, else empty string (")
        $search = $request->query()?$request->query()['search']:"";

        //return result like brand, gene, year and description
        return $cars = Car::where('brand', 'like', $search.'%')
            ->orWhere('gene', 'like', $search.'%')
            ->orWhere('year', 'like', $search.'%')
            ->orWhere('description', 'like', $search.'%')
            ->get();

        // $cars = Car::all();

        // return $cars;

    }

    //GET ONE
    public function show($carId){
        $car = Car::where('id', $carId)
            ->first();

        return response()->json($car);
    }

    public function store(Request $request){
        Car::create($request->all());
    }
    

    public function update(Request $request, $carId){
        $doc = $request->all();
        Car::where('id', $carId)
            ->update($doc);

        return response()->json("success");
    }

}
