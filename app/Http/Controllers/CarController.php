<?php

namespace App\Http\Controllers;


use App\Car;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CarController extends Controller
{
    public function index() {
        $cars = Car::all();

        return $cars;

    }

    public function store(Request $request){
      Car::create($request->all());
    }

}
