<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movie;

class PageController extends Controller
{

    public function index()
    {

        $movies = Movie::all();

        return view('home', compact('movies'));
    }

    public function vote()
    {
        $movies = Movie::where('vote', '>', 8.5)->get();

        return view('vote', compact('movies'));
    }

    public function nationality()
    {
        $movies = Movie::where('nationality', 'american/british')->get();

        return view('nationality', compact('movies'));
    }

    public function date()
    {
        $movies = Movie::orderBy('date', 'desc')->get();

        return view('date', compact('movies'));
    }

    public function findId()
    {
        $movie = Movie::find(3);

        return view('findId', compact('movie'));
    }
}
