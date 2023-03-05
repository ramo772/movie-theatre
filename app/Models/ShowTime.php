<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShowTime extends Model
{
    use HasFactory;
    protected $fillable = ['start_at','end_at'];

/**
 * The days that belong to the ShowTime
 *
 * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
 */
public function days()
{
    return $this->belongsToMany(Day::class, 'day_movie_times', 'show_time_id', 'day_id');
}
public function getStartAtAttribute($value)
{
    return \Carbon\Carbon::parse($value)->format('g:i A') ;
}

public function getEndAtAttribute($value)
{
    return \Carbon\Carbon::parse($value)->format('g:i A') ;
}
}
