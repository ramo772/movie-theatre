<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ShowTime;
use App\Http\Requests\Admin\StoreShowTimeRequest;
use App\Http\Requests\Admin\UpdateShowTimeRequest;

class ShowTimeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $show_times = ShowTime::paginate(10);
        return view('admin.show_times.index', ['data' => $show_times]);
    }
    public function store(StoreShowTimeRequest $request)
    {
        $show_time = ShowTime::create($request->validated());
        return redirect()->route('show_times.index')->with('message', 'Show Time Added Successfully');
    }
    public function update(UpdateShowTimeRequest $request, ShowTime $showTime)
    {
        $showTime->update($request->validated());
        return redirect()->route('show_times.index')->with('message', 'Show Time Updated Successfully');
    }
    public function destroy(ShowTime $showTime)
    {
        $showTime->delete();
        return redirect()->route('show_times.index')->with('message', 'Show Time Deleted Successfully');
    }
}
