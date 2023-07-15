<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePengirimenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengirimen', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('no_pengiriman', 255);
            $table->date('tanggal', 255);
            $table->string('lokasi_id', 11);
            $table->string('barang_id', 11);
            $table->string('jumlah_barang', 11);
            $table->string('harga_barang', 11);
            $table->string('kurir_id', 11);
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
        Schema::dropIfExists('pengirimen');
    }
}
