<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMedTimesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('med_times', function(Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('med_patient_id');
            $table->foreign('med_patient_id')
                ->references('id')->on('medication_patient')
                ->onDelete('cascade');
            $table->string('day');
            $table->string('time');
            $table->boolean('given')->default('0');
            $table->string('givenby')->nullable();
            $table->boolean('lock')->default('1');
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
        Schema::dropIfExists('med_times');
    }
}
