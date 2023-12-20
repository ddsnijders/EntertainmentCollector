<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movies;

class AddShowController extends Controller
{
    public function show() {
        return view('addshow',);
    }

    public function store(){
        $request = request();
        $movie = new Movies();
        $movie->setTitle(request('title'));
        
        print_r($movie);

        return null;
        
    }
}
