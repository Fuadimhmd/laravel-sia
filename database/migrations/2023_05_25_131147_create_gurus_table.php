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
        Schema::create('gurus', function (Blueprint $table) {
            $table->id('id_guru');
            $table->string('nip', '255');
            $table->enum('jeniskelamin', ['L', 'P']);
            $table->string('nama_guru', '255');
            $table->string('alamat', '255');
            $table->string('foto_guru', '255');
            $table->string('username', '50');
            $table->string('password', '50');
            $table->string('role', '50');
            $table->string('namamapel', '100');
            $table->string('email', '255');
            $table->string('notelp', '255');
            $table->string('pangkat', '255');
            $table->string('golongan', '255');
            $table->string('jenisjabatan', '255');
            $table->string('status_guru', '255');
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gurus');
    }
};
