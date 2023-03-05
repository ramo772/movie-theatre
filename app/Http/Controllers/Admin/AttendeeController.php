<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Attendee;
use App\Http\Requests\StoreAttendeeRequest;
use App\Http\Requests\UpdateAttendeeRequest;
use App\Models\DayMovieTime;

class AttendeeController extends Controller
{

    public function index()
    {
        $attendees = Attendee::paginate(10);
        return view('admin.attendee.index', ['data' => $attendees]);
    }

    public function store(StoreAttendeeRequest $request)
    {
        $event = DayMovieTime::where('day_id', $request->day_id)->where('movie_id', $request->movie_id)->where('show_time_id', $request->show_time_id)->get();
        $attendee = Attendee::create($request->validated()+['day_movie_times_id'=>$event[0]->id]);
        return redirect()->back()->with('message', 'Ticket Booked Successfully');
    }

}
