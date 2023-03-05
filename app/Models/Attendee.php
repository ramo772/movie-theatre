<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendee extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'email', 'mobile', 'day_movie_times_id'];

    /**
     * Get the event that owns the Attendee
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function event()
    {
        return $this->belongsTo(DayMovieTime::class, 'day_movie_times_id');
    }
}
