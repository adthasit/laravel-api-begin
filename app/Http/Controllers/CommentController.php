<?php

namespace App\Http\Controllers;

use App\Comment;

use Illuminate\Http\Request;

class CommentController extends Controller
{
    //GET ALL COMMENT base on carId (ONE TO MANY)
    public function index(Request $request, $carId){
        $comment = Comment::where('carId', $carId)
            ->get();

        return $comment;
    }

    //POST
    public function store(Request $request, $carId){
        $doc = $request->all(); //data from Form obj state
        $doc['carId'] = (int)$carId; //cast string param to integer
        Comment::insert($doc); //use query to insert
        return response()->json('success'); //tell that storing data success
    }
}
