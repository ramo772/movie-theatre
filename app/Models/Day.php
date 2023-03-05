<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Day extends Model
{
    use HasFactory;
    protected $fillable = ['day'];

    // public function getRouteKeyName()
    // {
    //     return 'day';
    // }

    public function show_time()
    {
        return $this->belongsToMany(ShowTime::class, 'day_movie_times', 'day_id', 'show_time_id');
    }

    public function getDayAttribute($value)
    {
        return   \Carbon\Carbon::parse($value)->format('M d,  Y');
    }
}
