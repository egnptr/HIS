<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('Nama_Farmasis');
            $table->string('Nama_Obat');
            $table->string('Jenis_Obat');
            $table->string('Jumlah');
            $table->string('Harga_Beli');
            $table->string('Harga_Jual');
            $table->text('Supplier');
            $table->date('Tanggal_Kadaluarsa');
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
