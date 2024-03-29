<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMedicationPatientTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medication_patient', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('medication_id');
            $table->foreign('medication_id')->references('id')->on('medications')->ondelete('cascade');
            $table->unsignedInteger('patient_id');
            $table->foreign('patient_id')->references('id')->on('patients')->ondelete('cascade');
            $table->string('day')->nullable();
            $table->string('time')->nullable();
            $table->boolean('given')->default('0');
            $table->string('givenby')->nullable();
            $table->boolean('lock')->default('1');
            $table->boolean('prn')->default('0');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('medication_patient');
    }
}
