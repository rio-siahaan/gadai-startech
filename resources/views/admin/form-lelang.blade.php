@extends('admin.Layouts.form')

@section('main-content')
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Form Lelang</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Input Form</a></li>
                                <li class="breadcrumb-item active">Form Lelang</li>
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
                            <h4 class="card-title mb-4">Formulir Barang Lelang</h4>

                            <div id="progrss-wizard" class="twitter-bs-wizard">
                                <ul class="twitter-bs-wizard-nav nav-justified">
                                    <li class="nav-item">
                                        <a href="#progress-barang-lelang" class="nav-link" data-toggle="tab">
                                            <span class="step-number">01</span>
                                            <span class="step-title">Barang Lelang</span>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="#aturan-lelang" class="nav-link" data-toggle="tab">
                                            <span class="step-number">02</span>
                                            <span class="step-title">Aturan Lelang</span>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="#progress-confirm-detail" class="nav-link" data-toggle="tab">
                                            <span class="step-number">03</span>
                                            <span class="step-title">Konfirmasi</span>
                                        </a>
                                    </li>
                                </ul>

                                <div id="bar" class="progress mt-4">
                                    <div class="progress-bar bg-success progress-bar-striped progress-bar-animated">
                                    </div>
                                </div>
                                <form id="form1lelang" action="{{route('tambah.lelang')}}" method="post">
								@csrf
                                <div class="tab-content twitter-bs-wizard-tab-content">
                                        <div class="tab-pane" id="progress-barang-lelang">
                                            <div>
                                                <p>Berisi spesifikasi barang yang akan di lelang</p>
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label>Nama Barang</label><br>
                                                            <select class="js-example-basic-single" name="gadai_id" id="gadai">
                                                                @foreach ($barangs as $barang)
                                                                    <option value="{{ $barang->id }}"> {{ $barang->nama_barang }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label class="form-label"
                                                                for="progress-basicpill-harga-dasar-input">Harga
                                                                Dasar</label>
                                                            <input type="number" class="form-control" name='harga_awal'
                                                                id="progress-basicpill-harga-dasar-input">
                                                        </div>
                                                    </div>
                                                </div>                                               
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="aturan-lelang">
                                            <p>Berisi hal yang bersangkutan dengan proses pelelangan</p>
                                            <div class="row">
                                                <div class="row mb-3">
                                                    <label for="tanggal-lelang-input"
                                                        class="col-sm-3 col-form-label">Tanggal Akhir
                                                        Pelelangan</label>
                                                    <div class="col-sm-12">
                                                        <input class="form-control" type="date" value="{{$current}}" name="deadline"
                                                            id="tanggal-lelang-input">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label>Cabang Lelang</label>
                                                        <select class="form-select">
                                                            <option selected>Pilih Kota Cabang</option>
                                                            <option value="Solo">Solo</option>
                                                            <option value="Semarang">Semarang</option>
                                                            <option value="Jogjakarta">Jogjakarta</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label>Detail Cabang Lelang</label>
                                                        <select class="form-select">
                                                            <option selected>Pilih Cabang</option>
                                                            <option value="Jebres">Cabang Jebres</option>
                                                            <option value="Gading">Cabang Gading</option>
                                                            <option value="Pabelan">Cabang Pabelan</option>
                                                            <option value="Nusukan">Cabang Nusukan</option>
                                                        </select>
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
@endsection
