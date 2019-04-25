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
}
