<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pegawai', function (Blueprint $table){
            $table->id();
            $table->string('Nama_Pegawai');
            $table->string('NIP');
            $table->string('TempatLahir');
            $table->date('TanggalLahir');
            $table->unsignedBigInteger('PangkatGolongan_id');
            $table->unsignedBigInteger('Jabatan_id');
            $table->unsignedBigInteger('UnitKerja_id');
            $table->foreign('PangkatGolongan_id')->references('id')->on('pangkat_golongan');
            $table->foreign('Jabatan_id')->references('id')->on('jabatan');
            $table->foreign('UnitKerja_id')->references('id')->on('unit_kerja');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
