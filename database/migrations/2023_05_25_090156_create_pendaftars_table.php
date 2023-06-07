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
        Schema::create('pendaftars', function (Blueprint $table) {
            $table->id('id_pendaftar');
            $table->string('nis', '100');
            $table->string('nik', '16');
            $table->string('nisn', '100');
            $table->string('noinduk', '100');
            $table->string('nokk', '25');
            $table->string('nama_lengkap', '100');
            $table->string('tempatlahir', '100');
            $table->string('tanggallahir', '100');
            $table->string('jeniskelamin', '25');
            $table->string('agama', '25');
            $table->string('hobi', '100');
            $table->string('citacita', '100');
            $table->string('anakke', '11');
            $table->string('jumlahsaudara', '2');
            $table->string('jarakkesekolah', '10');
            $table->string('transportasi', '100');
            $table->string('kewarganegaraan', '100');
            $table->string('siswa_alamat', '100');
            $table->string('siswa_nohp', '12');
            $table->string('siswa_desakel', '100');
            $table->string('siswa_kecamatan', '100');
            $table->string('siswa_kabupaten', '100');
            $table->string('siswa_provinsi', '100');
            $table->string('siswa_kodepos', '100');
            $table->string('siswa_tinggal', '100');
            $table->string('siswa_tingkat', '25');
            $table->string('siswa_kelas', '100');
            $table->string('siswa_nomorabsen', '10');
            $table->string('asal_sekolah', '75');
            $table->string('asal_noskhu', '100');
            $table->string('asal_noijazah', '100');
            $table->string('asal_nilaiun', '100');
            $table->string('asal_tanggal', '100');
            $table->string('asal_lamapendidikan', '10');
            $table->string('ayah_nik', '25');
            $table->string('ayah_nama', '100');
            $table->string('ayah_alamat', '100');
            $table->string('ayah_desakel', '100');
            $table->string('ayah_kecamatan', '100');
            $table->string('ayah_kabupaten', '100');
            $table->string('ayah_provinsi', '100');
            $table->string('ayah_kodepos', '100');
            $table->string('ayah_tempatlahir', '100');
            $table->string('ayah_tanggallahir', '100');
            $table->string('ayah_agama', '100');
            $table->string('ayah_kewarganegaraan', '100');
            $table->string('ayah_pendidikan', '10');
            $table->string('ayah_pekerjaan', '25');
            $table->string('ayah_penghasilan', '100');
            $table->string('ayah_nohp', '100');
            $table->string('ayah_status', '100');
            $table->string('ibu_nik', '25');
            $table->string('ibu_nama', '100');
            $table->string('ibu_alamat', '100');
            $table->string('ibu_desakel', '100');
            $table->string('ibu_kecamatan', '100');
            $table->string('ibu_kabupaten', '100');
            $table->string('ibu_provinsi', '100');
            $table->string('ibu_kodepos', '100');
            $table->string('ibu_tempatlahir', '100');
            $table->string('ibu_tanggallahir', '100');
            $table->string('ibu_agama', '100');
            $table->string('ibu_kewarganegaraan', '100');
            $table->string('ibu_status', '100');
            $table->string('ibu_pendidikan', '100');
            $table->string('ibu_pekerjaan', '25');
            $table->string('ibu_penghasilan', '100');
            $table->string('ibu_nohp', '100');
            $table->string('wali_nik', '100');
            $table->string('wali_nama', '100');
            $table->string('wali_alamat', '100');
            $table->string('wali_desakel', '100');
            $table->string('wali_kecamatan', '100');
            $table->string('wali_kabupaten', '100');
            $table->string('wali_provinsi', '100');
            $table->string('wali_kodepos', '100');
            $table->string('wali_tempatlahir', '100');
            $table->string('wali_tanggallahir', '100');
            $table->string('wali_agama', '100');
            $table->string('wali_kewarganegaraan', '100');
            $table->string('wali_pendidikan', '100');
            $table->string('wali_pekerjaan', '100');
            $table->string('wali_penghasilan', '100');
            $table->string('wali_nohp', '100');
            $table->string('wali_status', '100');
            $table->string('email', '100');
            $table->string('username', '100');
            $table->string('password', '100');
            $table->string('role', '100');
            $table->string('status_anakyatim', '100');
            $table->string('bahasa', '100');
            $table->string('pendukung_tinggibadan', '10');
            $table->string('pendukung_beratbadan', '10');
            $table->string('pendukung_golongandarah', '255');
            $table->string('pendukung_penyakit', '255');
            $table->string('pendukung_kelainanjasmani', '255');
            $table->string('pindahan_asalsekolah', '255');
            $table->string('pindahan_alasan', '255');
            $table->string('pindahan_tanggal', '255');
            $table->string('kegemaran_kesenian', '255');
            $table->string('kegemaran_olahraga', '255');
            $table->string('kegemaran_organisasi', '255');
            $table->string('kegemaran_lainlain', '255');
            $table->string('beasiswa_nama', '255');
            $table->string('beasiswa_tahun', '255');
            $table->string('beasiswa_nominal', '255');
            $table->string('lulus_tahun', '255');
            $table->string('lulus_tanggalijazah', '255');
            $table->string('lulus_noijazah', '255');
            $table->string('lulus_tanggalskhu', '255');
            $table->string('lulus_noskhu', '255');
            $table->string('lanjut_nama', '255');
            $table->string('lanjut_bekerja', '255');
            $table->string('lanjut_bekerjamulai', '255');
            $table->string('lanjut_bekerjaperusahaan', '255');
            $table->string('lanjut_penghasilan', '255');
            $table->string('status', '255');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pendaftars');
    }
};
