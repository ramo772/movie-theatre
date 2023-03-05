<?php

use App\Http\Controllers\Admin\AttendeeController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\DayController;
use App\Http\Controllers\Admin\DayMovieTimeController;
use App\Http\Controllers\Admin\MovieController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\ShowTimeController;
use App\Http\Controllers\WelcomeController;
use App\Models\Attendee;
use App\Models\Movie;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', WelcomeController::class);

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', DashboardController::class)->name('dashboard')->middleware('auth');
    Route::resource('movie', MovieController::class);
    Route::resource('day', DayController::class);
    Route::resource('show_times', ShowTimeController::class);
    Route::resource('event', DayMovieTimeController::class);
    Route::resource('attendee', AttendeeController::class)->except('store');
});

Route::post('attendee', [AttendeeController::class, 'store'])->name(
    'attendee.store'
);



Route::get('get_show_times/{movie_id}/{day_id}', [DayController::class, 'get_show_times']);


require __DIR__ . '/auth.php';
