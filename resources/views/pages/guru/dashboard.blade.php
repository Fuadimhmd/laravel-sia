@extends('layouts.authenticated')

@section('content')
    <!-- [ Main Content ] start -->
    <div class="pcoded-main-container">
        <div class="pcoded-content">
            <!-- [ breadcrumb ] start -->
            <div class="page-header">
                <div class="page-block">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-footer">
                                    <div class="row align-items-center">
                                        <div class="col-9">
                                            <p class="text-dark m-b-0"><span><strong>Layanan Manjemen Sekolah Berbasis
                                                        Digital</strong></span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- [ Main Informasi ] start -->
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row align-items-center">
                                                <div class="col-4 text-right">
                                                    <i class="feather icon-layers f-28"></i>
                                                </div>
                                                <div class="col-8">
                                                    <h6 class="text-dark m-b-0">Tingkat</h6>
                                                    <h4 class="text-dark">{{ $tingkat_count }}</h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer" style="background-color: #FF7706;">
                                            <div class="row align-items-center">
                                                <div class="col-9">
                                                    <p class="text-white m-b-0">Informasi</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row align-items-center">
                                                <div class="col-4 text-right">
                                                    <i class="fas fa-landmark f-28"></i>
                                                </div>
                                                <div class="col-8">
                                                    <h6 class="text-dark m-b-0">Jumlah Kelas</h6>
                                                    <h4 class="text-dark">{{ $kelas_count }}</h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer" style="background-color: #113B9C;">
                                            <div class="row align-items-center">
                                                <div class="col-9">
                                                    <p class="text-white m-b-0">Informasi</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row align-items-center">
                                                <div class="col-4 text-right">
                                                    <i class="fas fa-user-graduate f-28"></i>
                                                </div>
                                                <div class="col-8">
                                                    <h6 class="text-dark m-b-0">Jumlah Siswa</h6>
                                                    <h4 class="text-dark">{{ $siswa_count }}</h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer" style="background-color: #119C2A;">
                                            <div class="row align-items-center">
                                                <div class="col-9">
                                                    <p class="text-white m-b-0">Informasi</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row align-items-center">
                                                <div class="col-4 text-right">
                                                    <i class="fas fa-graduation-cap f-28"></i>
                                                </div>
                                                <div class="col-8">
                                                    <h6 class="text-dark m-b-0">Jumlah Guru</h6>
                                                    <h4 class="text-dark">{{ $guru_count }}</h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer" style="background-color: #147CA9;">
                                            <div class="row align-items-center">
                                                <div class="col-9">
                                                    <p class="text-white m-b-0">Informasi</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Informasi-->
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ breadcrumb ] end -->
            <!-- [ Main Content ] start -->
            <div class="row">
                <div class="col-xl-8 col-lg-12">
                    <div class="card overflow-hidden">
                        <div class="card-body pb-0" style="background-color: #0f52ba; color: #ffffff;">
                            <div class="row text-white">
                                <div class="col-auto">
                                    <h6 class="m-b-5 text-white"><i class="fas fa-building"></i> sd</h6>
                                </div>
                            </div>
                            <div id="sec-ecommerce-chart-line"></div>
                            <div class="row justify-content-center">
                                <div class="col-8">
                                    <div id="sec-ecommerce-chart-bar"></div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <div class="col-3">
                                    <h6>NPSN </h6>
                                    <h6>Status </h6>
                                    <h6>Alamat Lengkap </h6>
                                    <h6>Kabupaten/Kota </h6>
                                    <h6>Provinsi </h6>
                                    <h6>Kepala Sekolah </h6>
                                    <h6>NIP </h6>
                                    <h6>Nomor Telp </h6>
                                    <h6>Alamat Website </h6>
                                    <h6>E-mail </h6>
                                </div>
                                <div class="col-md-0">
                                    <h6>:</h6>
                                    <h6>:</h6>
                                    <h6>:</h6>
                                    <h6>:</h6>
                                    <h6>:</h6>
                                    <h6>:</h6>
                                    <h6>:</h6>
                                    <h6>:</h6>
                                    <h6>:</h6>
                                    <h6>:</h6>
                                </div>
                                <div class="col-8">
                                    <h6>{{ $profil->npsn }}</h6>
                                    <h6>{{ $profil->status ? $profil->status : '-' }}</h6>
                                    <h6>{{ $profil->alamat_lembaga }}</h6>
                                    <h6>{{ $profil->kota_lembaga }}</h6>
                                    <h6>{{ $profil->provinsi_lembaga }}</h6>
                                    <h6>{{ $profil->nama_kepsek }}</h6>
                                    <h6>{{ $profil->nip_kepsek }}</h6>
                                    <h6>{{ $profil->notelp }}</h6>
                                    <h6>{{ $profil->alamatwebsite }}</h6>
                                    <h6>{{ $profil->email }}</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="col-xl-4 col-lg-12">
                    <div class="card overflow-hidden">
                        <div class="card-body pb-0" style="background-color: #CC1F3A; color: #ffffff;">
                            <div class="row text-white">
                                <div class="col-auto">
                                    <h4 class="m-b-5 text-white"><i class="fas fa-align-justify f-28"></i> Informasi</h4>
                                </div>
                            </div>
                            <div id="sec-ecommerce-chart-line"></div>

                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <div class="col-10">
                                    <h6>Aplikasi SIASIK </h6>
                                    <h6>SMK ISTEK KOTA TEGAL </h6>
                                    <h6>Versi php 7.4 </h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- Latest Customers end -->
    </div>
    <!-- [ Main Content ] end -->
    </div>
    </div>
    <!-- Button trigger modal -->
@endsection
