<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Movie;

class PageController extends Controller
{
    public function index()
    {
        $movies = Movie::all();
        return view("home", compact("movies"));
    }
    public function show(Movie $movie)
    {
        // $book = Movie::find($id);
        // if (empty ($movie)) {
        //     return abort(404);
        // }
        return view("show", compact("movie"));
    }
}
