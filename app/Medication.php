<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medication extends Model
{
    protected $guarded = [];

    public function patient()
    {
        return $this->belongsToMany('App\Patient');
    }
}
