<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MedicationPatient extends Model
{
    protected $guarded = [];

    public function med_times() {
        return $this->hasMany(MedTime::class, 'med_patient_id');
    }
}
