<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Attendee;
use App\Models\Day;
use App\Models\DayMovieTime;
use App\Models\Movie;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\ShowTime::factory()->create([
            'start_at' => '18:00',
            'end_at' => '20:30',
        ]);
        \App\Models\ShowTime::factory()->create([
            'start_at' => '20:30',
            'end_at' => '22:00',
        ]);
        \App\Models\ShowTime::factory()->create([
            'start_at' => '22:30',
            'end_at' => '1:00',
        ]);
        Movie::factory(10)->create();
        Day::factory(7)->create();
        DayMovieTime::factory(18)->create();
        Attendee::factory(20)->create();

    }
}
