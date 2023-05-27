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
        Schema::create('menu_siswas', function (Blueprint $table) {
            $table->id('id_menu');
            $table->string("nama_menu");
            $table->string("deskripsi");
            $table->string("url");
            $table->enum('status', ['AKTIF', 'NONAKTIF']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('menu_siswas');
    }
};
