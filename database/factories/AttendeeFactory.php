<?php

namespace Database\Factories;

use App\Models\DayMovieTime;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Attendee>
 */
class AttendeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $event_id = DayMovieTime::inRandomOrder()->implode('id');
        return [
            'name' => $this->faker->name,
            'email' => $this->faker->email,
            'mobile' => $this->faker->phoneNumber,
            'day_movie_times_id' => $event_id[0]
        ];
    }
}
