<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInfotebusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('infotebus', function (Blueprint $table) {
            $table->id();
            $table->string('Dokter',100);
            $table->string('Nomor_Pasien',100);
            $table->string('Nama_Pasien',100);
            $table->string('Keterangan_Penebusan',100);
            $table->string('Resep_Obat',100);
            $table->integer('Total_Harga');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
