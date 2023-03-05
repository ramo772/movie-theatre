<?php

namespace App\Models;

use App\Helpers\UploadImage;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'image'];

    public function event()
    {
        return $this->hasMany(DayMovieTime::class);
    }
    public function setImageAttribute($value)
    {
        $this->attributes['image'] =  UploadImage::store_img($value, 'movie_images');
    }
    public function getImageAttribute($value)
    {
        return asset('storage/movie/images/' . $value);
    }
}
