<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DayMovieTime;
use App\Http\Requests\Admin\StoreDayMovieTimeRequest;
use App\Http\Requests\Admin\UpdateDayMovieTimeRequest;

class DayMovieTimeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function store(StoreDayMovieTimeRequest $request)
    {
        $event = DayMovieTime::create($request->validated());
        return redirect()->back()->with('message', 'Event Added Successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DayMovieTime  $dayMovieTime
     * @return \Illuminate\Http\Response
     */
    public function show(DayMovieTime $dayMovieTime)
    {
        //
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDayMovieTimeRequest  $request
     * @param  \App\Models\DayMovieTime  $dayMovieTime
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDayMovieTimeRequest $request, DayMovieTime $event)
    {
        $event->update($request->validated());
        return redirect()->back()->with('message', 'Event Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DayMovieTime  $dayMovieTime
     * @return \Illuminate\Http\Response
     */
    public function destroy(DayMovieTime $event)
    {
        $event->delete();
        return redirect()->back()->with('message', 'Event Deleted Successfully');
    }
}
