<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MedicationPatient extends Model
{
    protected $guarded = [];

    public function MedTime() {
        return $this->hasMany(MedTime::class, 'med_patient_id');
    }
}
