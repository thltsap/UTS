<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWarehousesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('warehouses', function (Blueprint $table) {
            $table->string('id_barang', 10)->primary();
            $table->string('kode_barang')->unique();
            $table->string('nama_barang');
            $table->string('kategori_barang');
            $table->double('harga');
            $table->integer('qty');
            $table->date('tanggal_barang_masuk')->nullable();
            $table->date('tanggal_barang_keluar')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('warehouses');
    }
}
