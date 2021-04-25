<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmrsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emrs', function (Blueprint $table) {
            $table->id();
            $table->biginteger('id_pasien');
            $table->biginteger('id_cin');
            $table->string('blood_pressure');
            $table->string('heart_rate');
            $table->string('blood_sugar');
            $table->string('height');
            $table->string('weight');
            $table->string('diagnosis');
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
        Schema::dropIfExists('emrs');
    }
}
