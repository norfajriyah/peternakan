<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenjualanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penjualan', function (Blueprint $table) {
            $table->bigIncrements('id_penjualan');
            $table->unsignedBigInteger('periode');
            $table->foreign('periode')->references('periode')->on('doc')->onDelete('cascade');
            $table->date('tanggal');
            $table->string('mitra', 50);
            $table->string('alamat', 50);
            $table->string('nama_pembeli', 50);
            $table->string('no_mobil', 10);
            $table->string('nama_driver', 50);
            $table->integer('jml_ayam_panen');
            $table->integer('berat_rr');
            $table->integer('harga_kg');
            $table->integer('total_harga_jual');
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
        Schema::dropIfExists('penjualan');
    }
}
