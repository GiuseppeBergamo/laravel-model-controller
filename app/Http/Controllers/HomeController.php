<?php

namespace App\Http\Controllers;

use App\Movie;

class HomeController extends Controller
{
    function index(){



        $movies = Movie::all();
        return view('home', compact('movies'));
    }
}
