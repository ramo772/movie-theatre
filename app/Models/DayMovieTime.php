<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DayMovieTime extends Model
{
    use HasFactory;
    protected $fillable = ['day_id', 'movie_id', 'show_time_id'];
    public function show_time()
    {
        return $this->belongsTo(ShowTime::class, 'show_time_id');
    }

    public function day()
    {
        return $this->belongsTo(Day::class, 'day_id');
    }

    public function movie()
    {
        return $this->belongsTo(Movie::class, 'movie_id');
    }
}
