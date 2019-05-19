<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $fillable = [
        'name', 'level', 'instructorNote','barcode',
    ];

    public function AdmissionRecord() {
        $this->belongsTo(AdmissionRecord::class);
    }

    public function PatientHistory() {
        $this->belongsTo(PatientHistory::class);
    }

    public function medication()
    {
        return $this->belongsToMany('App\Medication')
            ->withPivot('day', 'time', 'given','givenby','lock');
    }

}
