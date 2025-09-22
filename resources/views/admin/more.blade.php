@extends('admin.Layouts.form')

@section('main-content')
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12 mx-auto text-center ">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Detail</h4>

                        <div class="button-items">
                            <button type="button" class="btn btn-primary waves-effect waves-light "
                                onclick="window.location.href='/admin/tables-gadai'">
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
                            <div class="row mb-3">

                                <h5 class="mb-sm-0">Foto Barang</h5>
                                
									
                                <div class="row mb-3 col-3 mx-auto text-center">
                                    <div class="d-flex justify-content-center" style="height: 230px;">
                                        <img src="{{ url('assets/upload/barang/'. $gadai->foto) }}" class="img-fluid" alt="Responsive image">
                                    </div>
                                </div>
                        <form method="post" action="{{route('edit.gadai')}}">
							@csrf
							@method('PUT')
						<h5 class="mb-sm-0">Detail Barang</h5><br>
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Nama
                                    Barang</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" placeholder="Nama Barang" name="nama_barang"
                                         value="{{ $gadai->nama_barang }}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">ID
                                    Barang</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" placeholder="ID Barang"  name="id"
                                        value="{{ $gadai->id }}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Pinjaman</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="number" placeholder="{{ number_format($gadai->pinjaman, 0, ',', '.') }}" name="pinjaman"
                                         value="{{$gadai->pinjaman}}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Tanggal Jatuh
                                    Tempo</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" placeholder="3 November 2023" name="durasi"
                                         value="{{ $gadai->durasi }}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Spesifikasi</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" id="NIK" value="{{ $gadai->deskripsi }}" name="deskripsi">
                                </div>
                            </div> 
                            <div class="row mb-3">
                                @if (strtotime($gadai->durasi) < strtotime('-20 days') && $gadai->is_done == false)
                                <label for="example-text-input" class="col-sm-2 col-form-label">
                                    Lelang ?</label>
                                <div class="col-sm-10">
                                    <input class="form-check-input" type="checkbox"
                                         {{$gadai->is_done == 1 ? 'checked' : ''}} name="status" >
                                </div>
                                @else
                                <label for="example-text-input" class="col-sm-2 col-form-label">
                                    Lunas</label>
                                <div class="col-sm-10">
                                    <input class="form-check-input" type="checkbox"
                                         {{$gadai->is_done == 1 ? 'checked' : ''}} name="is_done" >
                                </div>
                                @endif
                            </div>
                            <h5 class="mb-sm-0">Detail Penggadai</h5><br>
                                    <div class="row mb-3">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">Nama
                                            Penggadai</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="text" placeholder="Nama Penggadai" name="user_id"
                                                value="{{ $gadai->user->id }}" hidden>
                                            <input class="form-control" type="text" placeholder="Nama Penggadai"
                                                value="{{ $gadai->user->nama }}" readonly>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">NIK
                                            Penggadai</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="text" placeholder="NIK"
                                                 readonly
                                                value="{{ $gadai->user->nik }}">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">No
                                            Telephone</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="text" placeholder="085-xxx-xxx-xxx"
                                                 value="{{ $gadai->user->telepon }}" readonly>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="button-items">
                                            <button type="submit" class="btn btn-primary waves-effect waves-light ">
                                                Edit Barang
                                            </button>
                                            <button type="button" class="btn btn-danger waves-effect waves-light"
                                                onclick="window.location.href='hapusgadai/{{ $gadai->id }}'">
                                                Hapus Barang
                                            </button>
                                        </div>

                                    </div>
								</form>

                        </div>


                    </div>
                </div> <!-- end col -->
            </div>
            <!-- end row -->


        </div> <!-- container-fluid -->
    </div>
@endsection
