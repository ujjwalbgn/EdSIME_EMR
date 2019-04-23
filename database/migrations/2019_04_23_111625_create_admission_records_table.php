<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdmissionRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admission_records', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('patient_id');
            $table->foreign('patient_id')
                ->references('id')->on('patients')
                ->onDelete('cascade');
            $table->string('medical_record_no')->nullable();
            $table->string('healthcare_provider')->nullable();
            $table->string('address')->nullable();
            $table->string('occupation')->nullable();
            $table->string('religion')->nullable();
            $table->string('ethnicity')->nullable();
            $table->string('culture')->nullable();
            $table->string('nationality')->nullable();
            $table->string('sex')->nullable();
            $table->string('relative_name')->nullable();
            $table->string('relative_home_phone')->nullable();
            $table->string('relative_business_phone')->nullable();
            $table->string('relative_address')->nullable();
            $table->string('emergency_contact_name')->nullable();
            $table->string('emergency_contact_home_phone')->nullable();
            $table->string('emergency_contact_home_address')->nullable();
            $table->string('emergency_contact_business_phone')->nullable();
            $table->string('insurance_name')->nullable();
            $table->string('insurance_group_number')->nullable();
            $table->string('advance_directive')->nullable();
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
        Schema::dropIfExists('admission_records');
    }
}
