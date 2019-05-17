<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MedTime extends Model
{
    protected $guarded = [];

    public function MedicationPatient() {
        return $this->belongsTo(MedicationPatient::class, 'med_patient_id');
    }
}
