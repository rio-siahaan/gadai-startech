@extends('admin.Layouts.form')

@section('main-content')
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12 mx-auto text-center ">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Verifikasi</h4>

                        <div class="page-title-right">
                            <button type="button" class="btn btn-primary waves-effect waves-light "
                                onclick="window.location.href='/admin/daftar-akun'">
                                Kembali <i class="ri-arrow-left-line align-middle ms-2"></i>
                            </button>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <!-- Foto KTP dan Foto Data Diri dengan KTP -->
                            <div class="row mb-3">
                                <div class="col-6 mx-auto text-center">
                                    <h4 class="card-title">Foto KTP</h4>


                                    <div class="d-flex justify-content-center" style="height: 300px;">
                                        <img src="{{ url('assets/upload/ktp/'.$user->foto_ktp) }}" class="img-fluid" alt="Responsive image">
                                    </div>
                                </div>

                                <div class="col-6 mx-auto text-center">
                                    <h4 class="card-title">Foto Diri dengana KTP</h4>


                                    <div class="d-flex justify-content-center" style="height: 300px;">
                                        <img src="{{ url('assets/upload/swafoto/'.$user->foto_swaktp) }}" class="img-fluid" alt="Responsive image">
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">NIK</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" value="{{$user->nik}}" readonly id="NIK">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Nama</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" value="{{$user->nama}}" readonly id="nama">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">No
                                    Telephone</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" value="{{$user->telepon}}" readonly id="notel">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Provinsi</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" value="{{$provinsi->name}}" readonly id="prov">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Kabupaten/Kota</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" value="{{$kota->name}}" readonly id="kabkota">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Alamat</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" value="{{$user->alamat}}" readonly id="alamat">
                                </div>
                            </div>
                            <!-- tombol tolak terima -->
                            <div class="col-12 text-end">
                                <div class="button-items">

                                    <form method="post" action="{{ route('admin.verifikasi', ['user' => $user->id]) }}">
                                        @csrf
                                        <button type="submit" class="btn btn-success waves-effect waves-light" name="action" value="terima">
                                            <i class="ri-check-line align-middle me-2"></i> Terima
                                        </button>
    
                                        <button type="submit" class="btn btn-danger waves-effect waves-light" name="action" value="tolak">
                                            <i class="ri-close-line align-middle me-2"></i> Tolak
                                        </button>
    
                                    </form>
                                </div>
                            </div>
                        </div>


                    </div>
                </div> <!-- end col -->
            </div>
            <!-- end row -->


        </div> <!-- container-fluid -->
    </div>
@endsection
