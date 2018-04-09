<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id','name', 'file', 'description',
    ];

    public static function create(array $attributes = [])
    {
        $model = static::query()->create($attributes);


        return $model;
    }

}
