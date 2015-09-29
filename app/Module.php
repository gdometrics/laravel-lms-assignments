<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Module extends Model
{
    protected $fillable = [
        'name'
    ];

    public function assignments()
    {
        return $this->hasMany('App\Assignment');
    }
}
