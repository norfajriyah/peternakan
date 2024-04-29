<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doc', function (Blueprint $table) {
            $table->bigIncrements('periode'); // Primary key
            $table->unsignedBigInteger('id_user'); // Foreign key
            $table->foreign('id_user')->references('id_user')->on('users')->onDelete('cascade');
            $table->date('tanggal');
            $table->string('distributor', 50);
            $table->enum('jns_ayam', ['Type1', 'Type2', 'Type3']); // Adjust enum values as needed
            $table->integer('jumlah_ayam');
            $table->string('harga_kontrak', 50);
            $table->string('total_harga', 50);
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
        Schema::dropIfExists('doc');
    }
}
