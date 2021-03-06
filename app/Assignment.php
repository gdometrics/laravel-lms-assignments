<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Assignment extends Model
{
    protected $fillable = [
        'name',
        'description',
        'module_id'
    ];

    public function module()
    {
        return $this->belongsTo('App\Module');
    }
}
