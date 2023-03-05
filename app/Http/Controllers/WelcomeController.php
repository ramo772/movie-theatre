<?php

namespace App\Http\Controllers;

use App\Models\DayMovieTime;
use App\Models\Movie;
use App\Models\ShowTime;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function __invoke(Request $request)
    {
        $movies = Movie::whereHas('event')->get();
        return view('welcome',['movies'=>$movies]);

    }
}
