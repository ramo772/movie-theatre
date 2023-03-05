<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DayMovieTime;
use App\Http\Requests\Admin\StoreDayMovieTimeRequest;
use App\Http\Requests\Admin\UpdateDayMovieTimeRequest;

class DayMovieTimeController extends Controller
{
    public function store(StoreDayMovieTimeRequest $request)
    {
        $event = DayMovieTime::create($request->validated());
        return redirect()->back()->with('message', 'Event Added Successfully');
    }
    public function update(UpdateDayMovieTimeRequest $request, DayMovieTime $event)
    {
        $event->update($request->validated());
        return redirect()->back()->with('message', 'Event Updated Successfully');
    }

    public function destroy(DayMovieTime $event)
    {
        $event->delete();
        return redirect()->back()->with('message', 'Event Deleted Successfully');
    }
}
