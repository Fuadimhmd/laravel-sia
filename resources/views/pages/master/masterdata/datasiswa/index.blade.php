@extends('layouts.admin')

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
                                <h5 class="m-b-10">Data Tingkat</h5>
                            </div>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="#!">Sekolah</a></li>
                                <li class="breadcrumb-item"><a href="#!">Data Tingkat</a></li>
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
                        <div class="card-header">
                            <button class="btn btn-sm btn-round has-ripple"
                                style="background-color: #0f52ba; color: #ffffff;" data-toggle="modal"
                                data-target="#modal-report"><i class="feather icon-plus"></i> Tingkat</button>
                            <a href="{{ route('master.datatingkat.erase') }}"
                                style="background-color: #FF0000; color: #ffffff;"
                                class="btn btn-sm btn-round has-ripple"><i class="fa fa-download"></i>Kosongkan Tingkat</a>

                            @if (Session::has('deleted'))
                                <div class="alert alert-info">{{ Session::get('message') }}</div>
                                <div class="col-xl-6 alert alert-danger">
                                    <a href="#" class="close" data-dismiss="alert">&times;</a>
                                    <strong></strong> <?php echo $this->session->flashdata('hapus_berhasil'); ?>
                                </div>
                            @endif

                            @if (Session::has('created'))
                                <div class="col-xl-6 alert alert-info">
                                    <a href="#" class="close" data-dismiss="alert">&times;</a>
                                    <strong></strong> <?php echo $this->session->flashdata('tambah_berhasil'); ?>
                                </div>
                            @endif

                            @if (Session::has('imported'))
                                <div class="col-xl-6 alert alert-info">
                                    <a href="#" class="close" data-dismiss="alert">&times;</a>
                                    <strong>Proses Selesai </strong> <?php echo $this->session->flashdata('import_berhasil'); ?>
                                </div>
                            @endif
                        </div>

                        <div class="card-body">

                            <div class="table-responsive">
                                <table id="report-table" class="table table-bordered table-striped mb-0">
                                    <thead>
                                        <tr class="text-center">
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Kelas</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Tempat,Tanggal Lahir</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($datasiswa as $no => $res)
                                            <tr>
                                                <td class="text-center">{{ $no + 1 }}</td>
                                                <td>
                                                    <div class="d-inline-block align-middle">
                                                        <img src="/resources/images/pengguna/nophoto.jpg" alt="user image"
                                                            class="img-radius align-top m-r-15" style="width:40px;">
                                                        <div class="d-inline-block">
                                                            <h6 class="m-b-0">{{ $res->nama_lengkap }}</h6>
                                                            <p class="m-b-0">{{ $res->nik }}</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-center">{{ $res->nama_kelas }}</td>
                                                <td class="text-center">{{ $res->jeniskelamin }}</td>
                                                <td class="text-center">{{ $res->tempatlahir }}, {{ $res->tanggallahir }}
                                                </td>
                                                <td class="text-center">
                                                    <a href="#" data-toggle="modal"
                                                        data-target="#modal-edittingkat{{ $res->id_tingkat }}"
                                                        style="background-color: #01605A; color: #ffffff;"
                                                        class="btn btn-icon btn-sm"><i class="feather icon-edit"></i></a>
                                                    <a href="master/hapustingkat/{{ $res->id_tingkat }}"
                                                        class="btn btn-icon btn-sm tombol-hapus"
                                                        style="background-color: #FF0000; color: #ffffff;"><i
                                                            class="feather icon-trash-2"></i></a>
                                                </td>
                                            </tr>
                                            <div class="modal fade" id="modal-edittingkat{{ $res->id_tingkat }}"
                                                tabindex="-1" role="dialog"
                                                aria-labelledby="myExtraLargeModalLabel"aria-hidden="true">
                                                <div class="modal-dialog modal-md">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title">Edit Data Tingkat</h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form action="master/updatekelas" method="POST">
                                                                <div class="row">

                                                                    <div class="col-sm-12">
                                                                        <div class="form-group">
                                                                            <label class="floating-label"
                                                                                for="nama_tingkat">Nama Tingkat</label>
                                                                            <input type="text" class="form-control"
                                                                                name="nama_tingkat"
                                                                                value="{{ $res->nama_tingkat }}"
                                                                                oninput="this.value = this.value.toUpperCase()"
                                                                                autocomplete="off">
                                                                            <input type="hidden" class="form-control"
                                                                                name="id_tingkat"
                                                                                value="{{ $res->id_tingkat }}"
                                                                                placeholder="XII">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-12">
                                                                        <button class="btn"
                                                                            style="background-color: #037823; color: #ffffff;">Perbaharui</button>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
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





    <div class="modal fade" id="modal-report" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah Tingkat</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('master.datakelas.store') }}" method="post" enctype="multipart/form-data"
                        role="form">
                        <div class="row">

                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label class="floating-label" for="nama_tingkat">Nama Tingkat</label>
                                    <input type="text" class="form-control" name="nama_tingkat" placeholder="X"
                                        oninput="this.value = this.value.toUpperCase()" autocomplete="off">
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <button class="btn" style="background-color: #037823; color: #ffffff;"
                                    id="pnotify-success">Simpan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>




    <!-- [ Main Content ] end -->
@endsection
