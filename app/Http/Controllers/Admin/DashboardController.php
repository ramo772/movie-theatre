<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Attendee;
use App\Models\Day;
use App\Models\Movie;
use App\Models\ShowTime;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __invoke()
    {
        $movies_count = Movie::count();
        $days = Day::count();
        $show_times = ShowTime::count();
        $attendees = Attendee::count();

        return view('dashboard', ['movies_count' => $movies_count, 'days_count' => $days, 'show_times' => $show_times, 'attendees' => $attendees]);
    }
}
