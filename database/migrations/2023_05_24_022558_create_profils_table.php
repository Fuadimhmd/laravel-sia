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
        Schema::create('profils', function (Blueprint $table) {
            $table->id('id_profil');
            $table->string('npsn');
            $table->string('nama_lembaga');
            $table->string('nama_lembaganaungan');
            $table->string('pemerintah');
            $table->string('pemerintahkop');
            $table->string('alamat_lembaga');
            $table->string('kota_lembaga');
            $table->string('provinsi_lembaga');
            $table->string('notelp');
            $table->string('email');
            $table->string('nama_kepsek');
            $table->string('nip_kepsek');
            $table->string('alamatwebsite');
            $table->string('logo');
            $table->string('image');
            $table->text('pesanberjalan');
            $table->string('status');
            $table->string('video_profil');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profils');
    }
};
