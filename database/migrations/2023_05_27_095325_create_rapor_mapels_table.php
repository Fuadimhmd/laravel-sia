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
        Schema::create('rapormapels', function (Blueprint $table) {
            $table->id('id_rapormapel');
            $table->string("nama_mapel", 100);
            $table->string("kode_mapel", 100);
            $table->string("kelompok_mapel", 50);
            $table->string("kkm", 255);
            $table->string("no_urut", 10);
            $table->string("id_role", 50);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rapor_mapels');
    }
};
