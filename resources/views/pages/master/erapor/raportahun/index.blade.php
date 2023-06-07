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
                            <div class="page-header-title">
                                <h5 class="m-b-10">Daftar Tahun </h5>
                            </div>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="#!">Data Tahun</a></li>
                                <li class="breadcrumb-item"><a href="#!">Tahun Ajaran</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>


            <!-- [ breadcrumb ] end -->
            <!-- [ Main Content ] start -->
            <div class="row">
                <!-- subscribe start -->
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <!-- Kumpulan Tombol -->
                            <button class="btn btn-sm btn-round has-ripple"
                                style="background-color: #0f52ba; color: #ffffff;" data-toggle="modal"
                                data-target="#tambahtahun"><i class="feather icon-plus"></i> Tahun</button>
                            <!--------------------->
                            <div class="table-responsive">
                                <table id="report-table" class="table mb-0">
                                    <thead>
                                        <tr class="text-center">
                                            <th>No</th>
                                            <th>Tahun</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($raportahun as $no => $res)
                                            <tr class="text-center">
                                                <td>{{ $no + 1 }}</td>
                                                <td>{{ $res->tahun }}</td>
                                                <td class="text-center">
                                                    <a href="#" data-toggle="modal"
                                                        data-target="#modal-edittahun{{ $res->id_raportahun }}"
                                                        class="btn btn-icon btn-info btn-sm"><i
                                                            class="feather icon-edit"></i></a>
                                                    <a href="/master/hapustahunrapor/{{ $res->id_raportahun }}"
                                                        class="btn btn-icon btn-danger btn-sm tombol-hapus"><i
                                                            class="feather icon-trash-2"></i></a>
                                                </td>
                                            </tr>
                                        @endforeach

                                        <!-- [ Form Edit Data Jurusan ] Start -->
                                        @foreach ($raportahun as $no => $res)
                                            <div class="modal fade" id="modal-edittahun{{ $res->id_raportahun }}"
                                                tabindex="-1" role="dialog"
                                                aria-labelledby="myExtraLargeModalLabel"aria-hidden="true">
                                                <div class="modal-dialog modal-md">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title">Edit Tahun</h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form action="master/updateraportahun" method="POST">
                                                                <div class="row">
                                                                    <div class="col-sm-12">
                                                                        <div class="form-group">
                                                                            <label class="floating-label"
                                                                                for="tahun">Tahun</label>
                                                                            <input type="number" class="form-control"
                                                                                name="tahun" value="{{ $res->tahun }}"
                                                                                required>
                                                                            <input type="hidden" class="form-control"
                                                                                name="id_raportahun"
                                                                                value="{{ $res->id_raportahun }}">
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-sm-12">
                                                                        <button class="btn btn-info">Perbaharui</button>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                        <!-- [ Form Edit Data Jurusan ] End -->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- subscribe end -->
            </div>
            <!-- [ Main Content ] end -->
        </div>
    </div>






    <div class="modal fade" id="tambahtahun" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah Tahun</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="master/simpantahunrapor" method="post" enctype="multipart/form-data" role="form">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label class="floating-label">Tahun</label>
                                    <input type="number" class="form-control" name="tahun" placeholder=" ">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <button class="btn btn-primary" id="pnotify-success">Simpan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
