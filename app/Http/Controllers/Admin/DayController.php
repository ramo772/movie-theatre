<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Database\Eloquent\Builder;

use App\Http\Controllers\Controller;
use App\Models\Day;
use App\Http\Requests\Admin\UpdateDayRequest;
use App\Http\Requests\Admin\StoreDayRequest;
use App\Models\DayMovieTime;
use App\Models\Movie;
use App\Models\ShowTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DayController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $days = Day::paginate(10);
        return view('admin.event_days.index', ['data' => $days]);
    }
    public function store(StoreDayRequest $request)
    {
        $day = Day::create($request->validated());
        return redirect()->route('day.index')->with('message', 'Day Added Successfully');
    }
    public function show(Day $day)
    {
        $movies = DB::select('select * from movies ');
        $show_times = ShowTime::whereNotIn('id', $day->show_time->Pluck('id'))->get();
        $events = DayMovieTime::where('day_id', $day->id)->get();
        return view('admin.event_days.show', ['movies' => $movies, 'show_times' => $show_times, 'day' => $day->id, 'count' => count($day->show_time->Pluck('id')), 'events' => $events]);
    }
    public function update(UpdateDayRequest $request, Day $day)
    {
        $day->update($request->validated());
        return redirect()->route('day.index')->with('message', 'Day Updated Successfully');
    }

    public function destroy(Day $day)
    {
        $day->delete();
        return redirect()->route('day.index')->with('message', 'Day Deleted Successfully');
    }

    public function get_show_times(Request $request, Movie $movie_id,  $day_id)
    {
        $day = Day::where('id', $day_id)->get();
        $show_times = DayMovieTime::where('day_id', $day_id)->where('movie_id', $movie_id->id)->with('show_time')->get()->pluck('show_time');
        return response()->json($show_times);
    }
}
