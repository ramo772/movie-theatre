<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreMovieRequest;
use App\Http\Requests\Admin\UpdateMovieRequest;
use App\Models\Movie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MovieController extends Controller
{
    public function index(Request $request)
    {
        $movies = Movie::paginate(10);
        //2nd method to get all data
        // $movies = DB::select('select * from movies ');
        // $movies = $this->arrayPaginator($movies, $request);

        // return $movies;
        return view('admin.movies.index',['data'=>$movies]);
    }

    public function store(StoreMovieRequest $request)
    {
        $movie = Movie::create($request->validated());
        return redirect()->route('movie.index')->with('message', 'Movie Added Successfully');

    }

    public function update(UpdateMovieRequest $request, Movie $movie)
    {
        $movie->update($request->validated());
        return redirect()->route('movie.index')->with('message', 'Movie Updated Successfully');

    }
    public function destroy(Movie $movie)
    {
        $movie->delete();
        return redirect()->route('movie.index')->with('message', 'Movie Deleted Successfully');

    }
}
