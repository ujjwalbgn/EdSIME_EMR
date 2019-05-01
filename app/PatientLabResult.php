<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PatientLabResult extends Model
{
    protected $guarded = [];

    public function patient(){
        $this->belongsTo(Patient::class);
    }
}
