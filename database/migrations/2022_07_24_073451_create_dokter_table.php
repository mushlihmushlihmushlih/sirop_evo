<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dokters', function (Blueprint $table) {
            $table->id('id_dokter');
            $table->string('nama_dokter');
            $table->unsignedBigInteger('id_poli');
            $table->text('alamat_dokter');
            $table->string('email_dokter');
            $table->foreign('id_poli')->references('id_poli')->on('polis')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dokter');
    }
};
