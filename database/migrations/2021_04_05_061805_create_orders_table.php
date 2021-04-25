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
            $table->string('Nama_Obat',100);
            $table->string('Jenis_Obat',100);
            $table->string('Kategori_Obat',100);
            $table->integer('Jumlah');
            $table->integer('Harga_Beli');
            $table->integer('Harga_Jual');
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
