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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAttendeeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAttendeeRequest $request)
    {
        $event = DayMovieTime::where('day_id', $request->day_id)->where('movie_id', $request->movie_id)->where('show_time_id', $request->show_time_id)->get();
        $attendee = Attendee::create($request->validated()+['day_movie_times_id'=>$event[0]->id]);
        return redirect()->back()->with('message', 'Ticket Booked Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Attendee  $attendee
     * @return \Illuminate\Http\Response
     */
    public function show(Attendee $attendee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Attendee  $attendee
     * @return \Illuminate\Http\Response
     */
    public function edit(Attendee $attendee)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAttendeeRequest  $request
     * @param  \App\Models\Attendee  $attendee
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAttendeeRequest $request, Attendee $attendee)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Attendee  $attendee
     * @return \Illuminate\Http\Response
     */
    public function destroy(Attendee $attendee)
    {
        //
    }
}
