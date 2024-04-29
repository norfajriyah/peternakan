<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKesehatanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kesehatan', function (Blueprint $table) {
            $table->bigIncrements('id_kesehatan'); // Primary key
            $table->unsignedBigInteger('periode'); // Foreign key
            $table->foreign('periode')->references('periode')->on('doc')->onDelete('cascade');
            $table->date('tanggal');
            $table->integer('hari_ke');
            $table->enum('jns_obat_pagi', ['Gula Merah', 'Amoxitin', 'Cyprotylogrin', 'Vitakur', 'Enoquyl']); // Adjust enum values as needed
            $table->enum('jns_obat_malam', ['Maxtrime', 'Amilyte']); // Adjust enum values as needed
            $table->enum('jns_obat_hama', ['Delaxtrin', 'Neoantisep']); // Adjust enum values as needed
            $table->string('keterangan', 50)->nullable();
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
        Schema::dropIfExists('kesehatan');
    }
}
