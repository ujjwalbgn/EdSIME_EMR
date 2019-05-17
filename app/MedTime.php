<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MedTime extends Model
{
    protected $guarded = [];

    public function med_patient() {
        return $this->belongsTo(MedicationPatient::class, 'med_patient_id');
    }
}
