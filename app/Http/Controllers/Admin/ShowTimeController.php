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
        //2nd method to get all data
        // $movies = DB::select('select * from movies ');
        // $movies = $this->arrayPaginator($movies, $request);

        // return $movies;
        return view('admin.show_times.index', ['data' => $show_times]);
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
     * @param  \App\Http\Requests\StoreShowTimeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreShowTimeRequest $request)
    {
        $show_time = ShowTime::create($request->validated());
        return redirect()->route('show_times.index')->with('message', 'Show Time Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ShowTime  $showTime
     * @return \Illuminate\Http\Response
     */
    public function show(ShowTime $showTime)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ShowTime  $showTime
     * @return \Illuminate\Http\Response
     */
    public function edit(ShowTime $showTime)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateShowTimeRequest  $request
     * @param  \App\Models\ShowTime  $showTime
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateShowTimeRequest $request, ShowTime $showTime)
    {
        $showTime->update($request->validated());
        return redirect()->route('show_times.index')->with('message', 'Show Time Updated Successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ShowTime  $showTime
     * @return \Illuminate\Http\Response
     */
    public function destroy(ShowTime $showTime)
    {
        $showTime->delete();
        return redirect()->route('show_times.index')->with('message', 'Show Time Deleted Successfully');
    }
}
