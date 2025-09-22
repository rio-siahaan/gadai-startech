@extends('admin.Layouts.form')

@section('main-content')
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 ">Form Gadai</h4>                        

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Input Form</a></li>
                                <li class="breadcrumb-item active">Form Gadai</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title mb-4">Formulir Pengajuan Barang Gadai</h4>

                            <div id="progrss-wizard" class="twitter-bs-wizard">
                                <ul class="twitter-bs-wizard-nav nav-justified">
                                    <li class="nav-item">
                                        <a href="#progress-data-penggadai" class="nav-link" data-toggle="tab">
                                            <span class="step-number">01</span>
                                            <span class="step-title">Data Penggadai</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#progress-data-pemberi-gadai" class="nav-link" data-toggle="tab">
                                            <span class="step-number">02</span>
                                            <span class="step-title">Data Pemberi Gadai</span>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="#progress-barang-gadai" class="nav-link" data-toggle="tab">
                                            <span class="step-number">03</span>
                                            <span class="step-title">Barang Gadai</span>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="#progress-pinjaman" class="nav-link" data-toggle="tab">
                                            <span class="step-number">04</span>
                                            <span class="step-title">Pinjaman</span>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="#progress-confirm-detail" class="nav-link" data-toggle="tab">
                                            <span class="step-number">05</span>
                                            <span class="step-title">Konfirmasi</span>
                                        </a>
                                    </li>
                                </ul>

                                <div id="bar" class="progress mt-4">
                                    <div class="progress-bar bg-success progress-bar-striped progress-bar-animated">
                                    </div>
                                </div>
                                <form id="form" name="form" method="POST" action="form-gadai/input"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="tab-content twitter-bs-wizard-tab-content">
                                        <div class="tab-pane" id="progress-data-penggadai">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="id_peng">Nama Penggadai</label><br>
                                                        <select class="js-example-basic-single" name="user_id" id="nama_peng">
                                                            @if ($users == null)
                                                                <option>User tidak ditemukan</option>
                                                            @endif
                                                            @foreach ($users as $user)
                                                                <option value="{{ $user->id }}"> {{ $user->nama }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="nik_penggadai">NIK
                                                            Penggadai</label>
                                                        <input type="text" class="form-control" id="nik_penggadai"
                                                            readonly>
                                                        <p class="text-danger" id="er_peng"></p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-12 mb-3">
                                                    <label for="tel-penggadai-input"
                                                        class="col-sm-2 col-form-label">Telephone</label>
                                                    <div class="col-sm-12">
                                                        <input class="form-control" type="tel"
                                                            placeholder="085-xxx-xxx-xxxx" id="no_tel_penggadai" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="alamat">Alamat</label>
                                                        <textarea id="alamat" class="form-control" rows="2" readonly></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="progress-data-pemberi-gadai">
                                            <div>
                                                <div class="row">
                                                    <!-- cabang gadai -->
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label>Cabang Gadai</label>
                                                            <select class="form-select" id="Kota">
                                                                <option selected>Pilih Kota</option>
                                                                @foreach ($kotas as $kota)
                                                                    <option value="{{ $kota->id }}">
                                                                        {{ $kota->nama_kota }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <!-- Detail Cabang Gadai -->
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label>Detail Cabang Gadai</label>
                                                            <select class="form-select" id="Cabang">
                                                                <option selected>Pilih Cabang</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <!-- Pegawai gadai -->
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label>Pegawai Gadai</label>
                                                            <select class="form-select" id="Pegawai" name="admin_id">
                                                                <option selected>Pilih Pegawai</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label class="form-label"
                                                                for="progress-basicpill-jabatan-input">Jabatan</label>
                                                            <input type="text" class="form-control" id="jabatan"
                                                                readonly>
                                                        </div>
                                                    </div>


                                                </div>
                                                <div class="row">
                                                    <!-- tel pegawai -->
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="tel-pegawai-input">Telephone
                                                                Pegawai</label>
                                                            <input class="form-control" type="tel"
                                                                placeholder="085-xxx-xxx-xxxx" id="tel-pegawai" readonly>
                                                        </div>
                                                    </div>
                                                    <!-- NIK pegawai -->
                                                    <div class="col-lg-6">

                                                        <div class="mb-3">
                                                            <label class="form-label"
                                                                for="progress-basicpill-nik-pegawai-input">NIK
                                                                Pegawai</label>
                                                            <input type="text" class="form-control" id="nik-pegawai"
                                                                readonly>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="tab-pane" id="progress-barang-gadai">
                                            <div>
                                                <div class="row">
                                                    <!-- nama barang -->
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <input type="text" class="form-control"
                                                                id="progress-basicpill-nama-barang-gadai-input"
                                                                name="jmlfoto" id="jmlfoto" hidden>
                                                            <input type="text" class="form-control"
                                                                id="progress-basicpill-nama-barang-gadai-input"
                                                                name="gadaiid" id="gadaiid" hidden>
                                                            <label class="form-label"
                                                                for="progress-basicpill-nama-barang-gadai-input">Nama
                                                                Barang</label>
                                                            <input type="text" class="form-control"
                                                                name="nama_barang">
                                                        </div>
                                                    </div>
                                                    <!-- kelengkapan -->
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label class="form-label"
                                                                for="progress-basicpill-kelengkapan-input">Kelengkapan</label>
                                                            <input type="text" class="form-control"
                                                                name="kelengkapan">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <!-- nomor serial -->
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label class="form-label"
                                                                for="progress-basicpill-nomor-serial-input">Nomor
                                                                Serial</label>
                                                            <input type="text" class="form-control"
                                                                id="progress-basicpill-nomor-serial-input"
                                                                name="serial_number">
                                                        </div>
                                                    </div>

                                                    <!-- Status barang -->
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label>Status Barang</label>
                                                            <input type="text" value="Gadai" readonly class="form-control">
                                                        </div>
                                                    </div>
                                                    <!-- deskripsi barang -->
                                                    <div class="col-lg-12">
                                                        <div class="mb-3">
                                                            <label class="form-label"
                                                                for="progress-basicpill-deskripsi-barang-gadai-input">Deskripsi
                                                                Barang</label>
                                                            <input type="text" class="form-control"
                                                                id="progress-basicpill-deskripsi-barang-gadai-input"
                                                                name="deskripsi">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="mb-3 ">
                                                        <label class="form-label"
                                                            for="progress-basicpill-kategori-input">Kategori</label>
                                                        <select class="form-select" id="kategori" name="kategori">
                                                            <option value="perhiasan">Perhiasan</option>
                                                            <option value="elektronik">Elektronik</option>
                                                            <option value="kendaraan">Kendaraan</option>
                                                            <option value="lainnya">Lainnya</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <label class="form-label"
                                                    for="progress-basicpill-nomor-serial-input">Upload Foto Barang
                                                </label>
                                                <div class="dz-message needsclick" style="text-align:center">
                                                        <div class="mb-3">
                                                            <img class="rounded me-2" alt="200x200" width="300"
                                                                src="{{ url('assets/images/panah.png') }}"
                                                                data-holder-rendered="true">
                                                        </div>
                                                    </div>
                                                    <div class="text-center fallback">
                                                        <input name="fotoBarang" id="swafotoKtp" type="file">
                                                    </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="progress-pinjaman">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="mb-3 ">
                                                        <label class="form-label"
                                                            for="progress-basicpill-pinjaman-input">Pinjaman</label>
                                                        <input type="text" class="form-control"
                                                            id="progress-basicpill-pinjaman-input" name="pinjaman">
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="row ">
                                                <div class="row mb-3">
                                                    <label for="tanggal-gadai-input"
                                                        class="col-sm-2 col-form-label">Tanggal
                                                        Gadai</label>
                                                    <div class="col-sm-4">
                                                        <input class="form-control" type="date"
                                                            value="{{ date('Y-m-d') }}" id="tgl-gadai-input">
                                                    </div>

                                                    <label class="col-sm-1 col-form-label"
                                                        for="progress-basicpill-bunga-input">Bunga</label>
                                                    <div class="col-sm-5">
                                                        <input type="text" class="form-control"
                                                            id="progress-basicpill-bunga-input" name="bunga">
                                                    </div>
                                                </div>


                                                <div class="row mb-3">
                                                    <label for="tanggal-jatuh-tempo-input"
                                                        class="col-sm-2 col-form-label">Tanggal Jatuh
                                                        Tempo</label>
                                                    <div class="col-sm-4">
                                                        <input class="form-control" type="date"
                                                            value="{{ date('Y-m-d') }}" id="tanggal-jatuh-tempo-input"
                                                            name="durasi">
                                                    </div>

                                                    <label class="col-sm-1 col-form-label "
                                                        for="progress-basicpill-durasi-input">Durasi</label>
                                                    <div class="col-sm-5">
                                                        <input type="text" class="form-control" id="Durasi"
                                                            readonly>
                                                    </div>
                                                </div>

                                            </div>

                                        </div>
                                        <div class="tab-pane" id="progress-confirm-detail">
                                            <div class="row justify-content-center">
                                                <div class="col-lg-6">
                                                    <div class="text-center">
                                                        <div class="mb-4">
                                                            <i
                                                                class="mdi mdi-check-circle-outline text-success display-4"></i>
                                                        </div>
                                                        <div>
                                                            <h5>Confirm Detail</h5>
                                                            <p class="text-muted">Pastikan semua data terisi dengan
                                                                benar.</p>
                                                            <button type="submit"
                                                                class="btn btn-success waves-effect waves-light me-1">Submit</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <ul class="pager wizard twitter-bs-wizard-pager-link">
                                    <li class="previous"><a href="javascript: void(0);">Previous</a></li>
                                    <li class="next"><a href="javascript: void(0);">Next</a></li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->

        </div> <!-- container-fluid -->
    </div>
    <!-- End Page-content -->
@endsection
