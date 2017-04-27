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

    public function store(Request $request){
      Car::create($request->all());
    }

}
