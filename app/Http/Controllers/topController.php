<?php

namespace App\Http\Controllers;

use App\Recipe;
use Illuminate\Http\Request;

class topController extends Controller
{
    //
    public function  index(){
        $recipes =Recipe::all();

        return view('home',[
            'recipes'=>$recipes
        ]);
    }
}
