<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nurse extends Model
{
    protected $guarded = [];

    public function Patient()
    {
        $this->belongsTo('App\Patient', 'patient_id');
    }
}
