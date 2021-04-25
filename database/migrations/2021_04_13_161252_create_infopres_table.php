<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInfopresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('infopres', function (Blueprint $table) {
            $table->id();
            $table->string('Doctors');
            $table->string('Patients');
            $table->date('Date_Of_Birth');
            $table->string('Obat_1');
            $table->integer('Dosis_Obat_1');
            $table->string('Obat_2');
            $table->integer('Dosis_Obat_2')
            $table->string('Obat_3');
            $table->integer('Dosis_Obat_3')
            $table->string('Obat_4');
            $table->integer('Dosis_Obat_4')
            $table->string('Obat_5');
            $table->integer('Dosis_Obat_5')
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('infopres');
    }
}
