<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCinsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cins', function (Blueprint $table) {
            $table->id('id_cin');
            $table->foreignId('id_patient');
            $table->foreignId('id_doctor');
            $table->date('date_in');
            $table->date('date_out');
            $table->string('group_case');
            $table->string('case_detail');
            $table->string('type');
            $table->string('status');
            $table->string('scanning_tool');
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
        Schema::dropIfExists('cins');
    }
}
