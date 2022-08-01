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
        Schema::create('riwayat_kunjungan', function (Blueprint $table) {
            $table->id('id_kunjungan');
            $table->unsignedBigInteger('id_poli');
            $table->unsignedBigInteger('id_anggota');
            $table->unsignedBigInteger('id_dokter');
            $table->text('keterangan');

            $table->foreign('id_poli')->references('id_poli')->on('poli')->onDelete('cascade');
            $table->foreign('id_anggota')->references('id_anggota')->on('anggotas')->onDelete('cascade');
            $table->foreign('id_dokter')->references('id_dokter')->on('dokter')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('riwayat_kunjungan');
    }
};
