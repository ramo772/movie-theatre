<?php

namespace Database\Factories;

use App\Models\Day;
use App\Models\Movie;
use App\Models\ShowTime;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\DayMovieTime>
 */
class DayMovieTimeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {

        $day = Day::inRandomOrder()->implode('id');
        $show_time_id = ShowTime::inRandomOrder()->implode('id');
        $movie_id = Movie::inRandomOrder()->implode('id');
        return [
            'day_id' => $day[0],
            'show_time_id' => $show_time_id[0],
            'movie_id' => $movie_id[0],
        ];
    }
}
