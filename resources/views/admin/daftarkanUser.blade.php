@extends('admin.Layouts.form')

@section('main-content')
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Daftarkan User</h4>

                        <div class="page-title-right">
                            <button type="button" class="btn btn-primary waves-effect waves-light "
                                onclick="window.location.href='/daftar-akun'">
                                Kembali <i class="ri-arrow-left-line align-middle ms-2"></i>
                            </button>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title mb-4">Biodata</h4>

                            <div id="progrss-wizard" class="twitter-bs-wizard">
                                <ul class="twitter-bs-wizard-nav nav-justified">
                                    <li class="nav-item">
                                        <a href="#progress-seller-details" class="nav-link" data-toggle="tab">
                                            <span class="step-number">01</span>
                                            <span class="step-title">User Details</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#progress-company-document" class="nav-link" data-toggle="tab">
                                            <span class="step-number">02</span>
                                            <span class="step-title">Foto KTP</span>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="#progress-bank-detail" class="nav-link" data-toggle="tab">
                                            <span class="step-number">03</span>
                                            <span class="step-title">Foto Diri dengan KTP</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#progress-confirm-detail" class="nav-link" data-toggle="tab">
                                            <span class="step-number">04</span>
                                            <span class="step-title">Password</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#progress-submit" class="nav-link" data-toggle="tab">
                                            <span class="step-number">05</span>
                                            <span class="step-title">Konfirmasi</span>
                                        </a>
                                    </li>
                                </ul>

                                <div id="bar" class="progress mt-4">
                                    <div class="progress-bar bg-success progress-bar-striped progress-bar-animated">
                                    </div>
                                </div>
                                <div class="tab-content twitter-bs-wizard-tab-content">

                                    <!-- User Detail -->
                                    <div class="tab-pane" id="progress-seller-details">
                                        <form method="POST" action="{{ route('admin.registeruser') }}" enctype="multipart/form-data">
                                            @csrf
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        @error('nik')
                                                            <div style="color: yellow;">{{ $message }}</div>
                                                        @enderror
                                                        <label class="form-label"
                                                            for="nik" >NIK</label>
                                                        <input type="text" class="form-control"
                                                            id="nik" name="nik">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        @error('nama')
                                                            <div style="color: yellow;">{{ $message }}</div>
                                                        @enderror
                                                        <label class="form-label"
                                                            for="nama" >Nama</label>
                                                        <input type="text" class="form-control"
                                                            id="nama" name="nama">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        @error('telepon')
                                                            <div style="color: yellow;">{{ $message }}</div>
                                                        @enderror
                                                        <label class="form-label" for="telepon" >No.
                                                            Telephone</label>
                                                        <input type="text" class="form-control"
                                                            id="telepon" name="telepon" >
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    @php
                                                        $provinces = new App\Http\Controllers\DependentDropdownController;
                                                        $provinces= $provinces->provinces();
                                                    @endphp
                                                    <div class="mb-3">
                                                        <label>Provinsi (sesuai KTP)</label>
                                                        
                                                        <select class="form-select" name="provinsi" id="provinsi" >
                                                            <option value="" disabled selected>--Pilih Provinsi--</option>
                                                            @foreach ($provinces as $item)
                                                                <option value="{{ $item->id ?? '' }}">{{ $item->name ?? '' }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        @error('email')
                                                            <div style="color: yellow;">{{ $message }}</div>
                                                        @enderror
                                                        <label class="form-label"
                                                            for="email" >Email
                                                        </label>
                                                        <input type="email" class="form-control"
                                                            id="email" name="email" email>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label class="form-label"
                                                            for="kabupatenkota">Kab/Kota
                                                            (sesuai KTP)</label>
                                                            <select style="border-radius: 1em;" class="form-control" name="kabupatenkota" id="kabupatenkota" >
                                                                <option> -- </option>
                                                            </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="mb-3">
                                                        @error('alamat')
                                                            <div style="color: yellow;">{{ $message }}</div>
                                                        @enderror
                                                        <label class="form-label"
                                                            for="alamat">Alamat
                                                            Lengkap (sesuai KTP)</label>
                                                        <textarea id="alamat" name="alamat" class="form-control" rows="2"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="mb-3">
                                                        <label class="form-label"
                                                            for="progress-basicpill-address-input">Alamat
                                                            Domisili</label>
                                                        <textarea id="progress-basicpill-address-input" class="form-control" rows="2"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                   
                                    </div>
                                    <!-- Foto KTP-->
                                    <div class="tab-pane" id="progress-company-document">
                                        <div class="row">
                                
                                                <div class="text-center mb-5" style="text-align:center">
                                                    <div class="mb-3">
                                                        <img class="rounded me-2" alt="200x200" width="300"
                                                            src="{{ url('assets/images/ktp.jpg') }}" data-holder-rendered="true">

                                                    </div>
                                                    <h4>Upload Foto KTP</h4>
                                                </div>
                                                <div class="text-center fallback">
                                                    <input name="fotoKtp" id="fotoKtp" type="file">
                                                </div>
                                     
                                        </div>

                                    </div>
                                    <!-- Upload Foto Diri dengan KTP-->
                                    <div class="tab-pane" id="progress-bank-detail">
                                        <div class="row">
                                            <div>
                                            
                                                    <div class="dz-message needsclick" style="text-align:center">
                                                        <div class="mb-3">
                                                            <img class="rounded me-2" alt="200x200" width="300"
                                                                src="{{ url('assets/images/fotodiriktp.jpg') }}"
                                                                data-holder-rendered="true">
                                                        </div>

                                                        <h4>Upload Foto Diri dengan KTP</h4>
                                                    </div>
                                                    <div class="text-center fallback">
                                                        <input name="swafotoKtp" id="swafotoKtp" type="file">
                                                    </div>
                                       

                                            </div> <!-- end col -->
                                        </div> <!-- end row -->

                                    </div>
                                    <!-- Password-->
                                    <div class="tab-pane" id="progress-confirm-detail">
                              
                                            <div class=" row">
                                                <div class="col-lg-12">
                                                    <div class="mb-3">
                                                        <label class="form-label"
                                                            for="password">Password</label>
                                                        <input type="password" class="form-control"
                                                            id="password" name="password">
                                                    </div>

                                                </div>

                                            </div>

                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="mb-3">
                                                        <label class="form-label"
                                                            for="kpass" name="kpass">Konfirmasi
                                                            Password</label>
                                                        <input type="password" class="form-control"
                                                            id="kpass" name="kpass">
                                                    </div>
                                                </div>

                                            </div>
                   

                                    </div>
                                    <!-- submit -->
                                    <div class="tab-pane" id="progress-submit">
                                        <div class="row justify-content-center">
                                            <div class="col-lg-6">
                                                <div class="text-center">
                                                    <div class="mb-4">
                                                        <i class="mdi mdi-check-circle-outline text-success display-4"></i>
                                                    </div>
                                                    <div>
                                                        <h5>Pastikan data yang diisi benar</h5>

                                                        <button type="submit"
                                                            class="btn btn-success waves-effect waves-light">
                                                            <i class="ri-check-line align-middle me-2"></i>
                                                            Submit
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </form>
                                </div>


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

            <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
            <script>
                function onChangeSelect(url, id, name) {
                    // send ajax request to get the cities of the selected province and append to the select tag
                    $.ajax({
                        url: url,
                        type: 'GET',
                        data: {
                            id: id
                        },
                        success: function (data) {
                            $('#' + name).empty();
                            $('#' + name).append('<option>--Pilih Kabupaten/kota--</option>');
        
                            $.each(data, function (key, value) {
                                $('#' + name).append('<option value="' + key + '">' + value + '</option>');
                            });
                        }
                    });
                }
                $(function () {
                    $('#provinsi').on('change', function () {
                        onChangeSelect('{{ route("cities") }}', $(this).val(), 'kabupatenkota');
                    });
                });
            </script>
        </div> <!-- container-fluid -->
    </div>
    <!-- End Page-content -->
@endsection
@extends('admin.Layouts.form')

@section('main-content')
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Daftarkan User</h4>

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
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title mb-4">Biodata</h4>

						
                            <div id="progrss-wizard" class="twitter-bs-wizard">
                                <ul class="twitter-bs-wizard-nav nav-justified">
                                    <li class="nav-item">
                                        <a href="#progress-seller-details" class="nav-link" data-toggle="tab">
                                            <span class="step-number">01</span>
                                            <span class="step-title">User Details</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#progress-company-document" class="nav-link" data-toggle="tab">
                                            <span class="step-number">02</span>
                                            <span class="step-title">Foto KTP</span>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="#progress-bank-detail" class="nav-link" data-toggle="tab">
                                            <span class="step-number">03</span>
                                            <span class="step-title">Foto Diri dengan KTP</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#progress-confirm-detail" class="nav-link" data-toggle="tab">
                                            <span class="step-number">04</span>
                                            <span class="step-title">Password</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#progress-submit" class="nav-link" data-toggle="tab">
                                            <span class="step-number">05</span>
                                            <span class="step-title">Konfirmasi</span>
                                        </a>
                                    </li>
                                </ul>

                                <div id="bar" class="progress mt-4">
                                    <div class="progress-bar bg-success progress-bar-striped progress-bar-animated">
                                    </div>
                                </div>
                                <div class="tab-content twitter-bs-wizard-tab-content">

                                    <!-- User Detail -->
                                    <div class="tab-pane" id="progress-seller-details">
                                        <form id="form1user">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label class="form-label"
                                                            for="progress-basicpill-firstname-input">NIK</label>
                                                        <input type="text" class="form-control"
                                                            id="progress-basicpill-firstname-input">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label class="form-label"
                                                            for="progress-basicpill-lastname-input">Nama</label>
                                                        <input type="text" class="form-control"
                                                            id="progress-basicpill-lastname-input">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="progress-basicpill-phoneno-input">No.
                                                            Telephone</label>
                                                        <input type="text" class="form-control"
                                                            id="progress-basicpill-phoneno-input">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        @php
                                                        	$provinces = new App\Http\Controllers\DependentDropdownController;
															$provinces = $provinces->provinces();
														@endphp
                                                        <label>Provinsi (sesuai KTP)</label>
                                                        <select class="form-select" class="provinsi" id="provinsi">
                                                        	<option value="" disabled selected>-- Pilih provinsi --</option>
                                                        	@foreach ($provinces as $item)
                                                            	<option value="{{$item->id ?? ''}}">{{$item->name??''}}</option>
                                                        	@endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label class="form-label"
                                                            for="progress-basicpill-email-input">Email
                                                        </label>
                                                        <input type="text" class="form-control"
                                                            id="progress-basicpill-email-input">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label class="form-label"
                                                            for="progress-basicpill-email-input">Kab/Kota
                                                            (sesuai KTP)</label>
                                                     	<select class="form-select" name="kabupatenkota" id="kabupatenkota" required>
                                                            <option>--</option>
                                                        </select>
                                                     </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="mb-3">
                                                        <label class="form-label"
                                                            for="progress-basicpill-address-input">Alamat
                                                            Lengkap (sesuai KTP)</label>
                                                        <textarea id="progress-basicpill-address-input" class="form-control" rows="2"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="mb-3">
                                                        <label class="form-label"
                                                            for="progress-basicpill-address-input">Alamat
                                                            Domisili</label>
                                                        <textarea id="progress-basicpill-address-input" class="form-control" rows="2"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- Foto KTP-->
                                    <div class="tab-pane" id="progress-company-document">
                                        <div class="row">
                                            <form id="form2user" class="dropzone">
                                                <div class="text-center mb-5">
                                                    <div class="mb-3">
                                                        <img class="rounded me-2" alt="200x200" width="300"
                                                            src="{{ url('assets/images/ktp.png') }}" data-holder-rendered="true">

                                                    </div>
                                                    <h4>Upload Foto KTP</h4>
                                                </div>
                                                <div class="text-center fallback">
                                                    <input name="file" type="file" multiple="multiple">
                                                </div>
                                            </form>
                                        </div>

                                    </div>
                                    <!-- Upload Foto Diri dengan KTP-->
                                    <div class="tab-pane" id="progress-bank-detail">
                                        <div class="row">
                                            <div>
                                                
                                                    <div class="dz-message needsclick text-center">
                                                        <div class="mb-3">
                                                            <img class="rounded me-2" alt="200x200" width="300"
                                                                src="{{ url('assets/images/fotodiriktp.jpg') }}"
                                                                data-holder-rendered="true">
                                                        </div>

                                                        <h4>Upload Foto Diri dengan KTP</h4>
                                                    </div>
                                                    <div class="text-center fallback">
                                                        <input name="file" type="file" multiple="multiple">
                                                    </div>
                                                </form>

                                            </div> <!-- end col -->
                                        </div> <!-- end row -->

                                    </div>
                                    <!-- Password-->
                                    <div class="tab-pane" id="progress-confirm-detail">
                                        <form id="form4user">
                                            <div class=" row">
                                                <div class="col-lg-12">
                                                    <div class="mb-3">
                                                        <label class="form-label"
                                                            for="progress-basicpill-firstname-input">Password</label>
                                                        <input type="password" class="form-control"
                                                            id="progress-basicpill-firstname-input">
                                                    </div>

                                                </div>

                                            </div>

                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="mb-3">
                                                        <label class="form-label"
                                                            for="progress-basicpill-phoneno-input">Konfirmasi
                                                            Password</label>
                                                        <input type="password" class="form-control"
                                                            id="progress-basicpill-phoneno-input">
                                                    </div>
                                                </div>

                                            </div>
                                        </form>

                                    </div>
                                    <!-- submit -->
                                    <div class="tab-pane" id="progress-submit">
                                        <div class="row justify-content-center">
                                            <div class="col-lg-6">
                                                <div class="text-center">
                                                    <div class="mb-4">
                                                        <i class="mdi mdi-check-circle-outline text-success display-4"></i>
                                                    </div>
                                                    <div>
                                                        <h5>Pastikan data yang diisi benar</h5>

                                                        <button onclick="submitAllForms()" type="submit"
                                                            class="btn btn-success waves-effect waves-light">
                                                            <i class="ri-check-line align-middle me-2"></i>
                                                            Submit
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>


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

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
	<script>
        function onChangeSelect(url, id, name) {
            // send ajax request to get the cities of the selected province and append to the select tag
            $.ajax({
                url: url,
                type: 'GET',
                data: {
                    id: id
                },
                success: function (data) {
                    $('#' + name).empty();
                    $('#' + name).append('<option>--Pilih Kabupaten/kota--</option>');

                    $.each(data, function (key, value) {
                        $('#' + name).append('<option value="' + key + '">' + value + '</option>');
                    });
                }
            });
        }
        $(function () {
            $('#provinsi').on('change', function () {
                onChangeSelect('{{ route("cities") }}', $(this).val(), 'kabupatenkota');
            });
        });
    </script>
             
                                                            
        </div> <!-- container-fluid -->
    </div>
    <!-- End Page-content -->
@endsection