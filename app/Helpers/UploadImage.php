<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class UploadImage{

	public static  function store_img($image, $driver)
    {
    	$image_name = Str::random(40) . '.' . $image->extension();
    	$image->storeAs('/', $image_name, $driver);
    	return $image_name;
	}
	public static function getMimeType($encoded_str)
	{
        return explode(';', explode(':', $encoded_str)[1])[0];
    }


    public static function getExtension($encoded_str)
	{
        return explode(';', explode('/', $encoded_str)[1])[0];
	}


	public static function storeFile($encoded_file_str, $driver)
    {
        $extension = self::getExtension($encoded_file_str);
        $file_name = Str::random(40).'.'.$extension;
        $file = base64_decode(substr($encoded_file_str, strpos($encoded_file_str, ",")+1));
        Storage::disk($driver)->put($file_name, $file);
        return $file_name;
    }


}
