<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdmissionRecord extends Model
{
    protected $guarded = [];

    public function patient(){
        $this->belongsTo(Patient::class);
    }
}
