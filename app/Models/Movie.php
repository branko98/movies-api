<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    const STORE_RULES = [
        'title' => 'required',
        'director' => 'required',
        'imageUrl' => 'url',
        'duration' => 'required|integer|between:1,500',
        'releaseDate' => 'required|date',
    ];

    protected $fillable = [
        'title',
        'director',
        'imageUrl',
        'duration',
        'releaseDate',
    ];

    public static function filter($title, $skip, $take)
   {
       return self::where('title', 'LIKE', '%'.$title .'%')->skip($skip)->take($take)->get();
   }
}
