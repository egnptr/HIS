<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedicalReceiptsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medical_receipt', function (Blueprint $table) {
            $table->id();
            $table->string('patient_name');
            $table->string('doctor_name');
            $table->date('date_in');
            $table->date('date_out');
            $table->string('room_type');
            $table->integer('room_cost');
            $table->integer('medicine_cost');
            $table->integer('consumption_cost');
            $table->integer('lab_cost');
            $table->integer('radiology_cost');
            $table->integer('maintenance_cost');
            $table->integer('total_cost');
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
        Schema::dropIfExists('medical_records');
    }
}
