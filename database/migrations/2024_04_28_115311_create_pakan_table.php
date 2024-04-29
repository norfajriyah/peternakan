<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePakanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pakan', function (Blueprint $table) {
            $table->bigIncrements('id_pakan'); // Primary key
            $table->unsignedBigInteger('periode'); // Foreign key
            $table->foreign('periode')->references('periode')->on('doc')->onDelete('cascade');
            $table->date('tanggal');
            $table->enum('jenis_pakan', ['Galaxy 00', 'Galaxy 01', 'B 151 C / Strarfeed', '510', '511 Alfa']); // Adjust enum values as needed
            $table->integer('jumlah_pakan');
            $table->integer('hrg_pakan_satuan');
            $table->integer('total_harga');
            $table->timestamps(); // Adds created_at and updated_at columns
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pakan');
    }
}
