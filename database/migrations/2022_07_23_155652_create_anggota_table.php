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
        Schema::create('Anggota', function (Blueprint $table) {
            $table->id('id_anggota');
            $table->unsignedBigInteger('id_keluarga');
            $table->string('nama');
            $table->string('NIK');
            $table->date('tanggal_lahir');
            $table->enum('status_keanggotaan', ['BPJS', 'umum']);
            $table->foreign('id_keluarga')->references('id_keluarga')->on('keluargas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Anggota');
    }
};
