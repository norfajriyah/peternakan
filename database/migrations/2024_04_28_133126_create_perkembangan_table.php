<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePerkembanganTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perkembangan', function (Blueprint $table) {
            $table->bigIncrements('id_perkembangan'); // Primary key
            $table->unsignedBigInteger('periode'); // Foreign key
            $table->foreign('periode')->references('periode')->on('doc')->onDelete('cascade');
            $table->date('tanggal');
            $table->integer('jml_populasi');
            $table->string('atrain', 50);
            $table->string('bw_datang', 50);
            $table->string('kondisi', 50);
            $table->integer('umur');
            $table->integer('std_feed');
            $table->integer('act_feed');
            $table->integer('mati_deplesi');
            $table->integer('culling_deplesi');
            $table->integer('afkir_deplesi');
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
        Schema::dropIfExists('perkembangan');
    }
}
