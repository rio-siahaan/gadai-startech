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
                                onclick="window.location.href='/admin/tables-lelang'">
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
                                <div class="col-6 mx-auto text-center">
                                    <h4 class="card-title">Foto Barang</h4>
                                    <div class="d-flex justify-content-around">
										@foreach($fotogadais as $f)
                                        <img src="{{url('assets/upload/barang/'. $f->fname_barang)}}" class="img-fluid" alt="Responsive image" width="50%">                                        
                                    	@endforeach
									</div>
                                </div>
                            </div>
                            <h5 class="mb-sm-0">Detail Barang</h5><br>
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Nama
                                    Barang</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" placeholder="Nama Barang"
                                        id="progress-basicpill-nama-barang-gadai-input" readonly
                                        value="{{ $lelang->gadai->nama_barang }}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">ID
                                    Barang</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" placeholder="ID Barang" readonly
                                        id="progress-basicpill-nomor-serial-input" value="{{ $lelang->gadai->id }}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Harga Barang Awal</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" placeholder="500.000" readonly
                                        id="progress-basicpill-hargabarangawal-input" value="{{ $lelang->harga_awal }}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Tanggal Akhir Bid</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" placeholder="3 November 2023" readonly
                                        id="tanggal-akhir-bid-input" value="{{ $lelang->deadline }}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Spesifikasi</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" id="NIK" readonly
                                        value="{{ $lelang->gadai->kelengkapan }}">
                                </div>
                            </div>
                            <h5 class="mb-sm-0">Detail Pemenang Pertama</h5><br>
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Nama
                                    Pemenang</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" placeholder="Nama Pemenang" readonly
                                        id="progress-basicpill-name-input"
                                        @if ($lelang->bid->count() != 0)value="{{ $lelang->bid->where('harga_bid', $lelang->bid->max('harga_bid'))->first()->user->nama }}"@endif>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">No
                                    Telephone</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" placeholder="085-xxx-xxx-xxx" readonly
                                        id="tel-pemenang-input"
                                        @if($lelang->bid->count() != 0)value="{{ $lelang->bid->where('harga_bid', $lelang->bid->max('harga_bid'))->first()->user->telepon }}"@endif>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Harga Akhir</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" placeholder="5.000.000" readonly
                                        id="harga-akhir-input" @if($lelang->bid->count() != 0)value="{{ $lelang->bid->max('harga_bid') }}"@endif>
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
