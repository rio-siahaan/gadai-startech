@extends('admin.Layouts.table')

@section('main-content')
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <!-- User Verification -->
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">User Verification</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="/admin">Gadai Startech</a>
                                </li>
                                <li class="breadcrumb-item active">Verified</li>
                            </ol>
                        </div>

                    </div>
                    <div class="col-xl-6 mb-3 ">
                        <div class="button-items">
                            <button type="button" class="btn btn-primary waves-effect waves-light "
                                onclick="window.location.href='/admin/daftar-akun/register-user'">
                                Daftarkan User <i class="ri-arrow-right-line align-middle ms-2"></i>
                            </button>

                        </div>
                    </div>
                </div>

            </div>
            <div class="row text-center">
                <!-- User UnVerified -->
                <div class="col-sm-6">
                    <div class="card text-center bg-danger">
                        <a href="#idunverified">
                            <div class="card-body ">
                                <h4 class="card-title text-white  mb-0"><b>User Unverified</b></h4>
                                <h2 class="mt-3 mb-2 text-white"><b>{{$jumlahNotVerified}}</b>
                                </h2>

                            </div>
                        </a>
                    </div>
                </div>

                <!-- User verified -->
                <div class="col-6 mx-auto">
                    <div class="card text-center bg-success  ">
                        <a href="#idverified">
                            <div class="card-body ">
                                <h4 class="card-title text-white mb-0"><b>User Verified</b>
                                </h4>
                                <h2 class="mt-3 mb-2 text-white"><b>{{$jumlahVerified}}</b>
                                </h2>

                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Data User</a>
                                </li>
                                <li class="breadcrumb-item active">Unverified</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <!-- Tabel Unverified -->
            <div class="row" id="idunverified">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <h4 class="card-title bg-danger text-white " style="padding: 10px ; border-radius: 5px ">
                                User
                                Unverified
                            </h4>
                            <p class=" card-title-desc">Pastikan biodata user yang ingin diverifikasi benar

                            </p>

                            <table id="unverified" class="table table-bordered dt-responsive nowrap"
                                style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Name</th>
                                        <th>NIK</th>
                                        <th>Alamat</th>
                                        <th>No Telephone</th>
                                        <th>Keterangan </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($notVerifiedUsers as $key => $user)
                                        <tr>
                                            <td>{{ $key + 1}}</td>
                                            <td>{{ $user->nama}}</td>
                                            <td>{{ $user->nik}}</td>
                                            <td>{{ $user->alamat}}</td>
                                            <td>{{ $user->telepon}}</td>
                                            <td>
                                                <div class="text-center">
                                                    
                                                    <button type="button" class="btn-danger btn-sm waves-effect waves-light"
                                                        onclick="window.location.href='daftar-akun/verifikasi/{{$user->id}}'">Belum Diverifikasi
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->

            <!-- Tabel Verified -->
            <div class="row" id="idverified">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <h4 class="card-title bg-success text-white" style="padding: 10px ; border-radius: 5px ">
                                User Verified
                            </h4>
                            <p class="card-title-desc">
                                Pastikan data user benar
                            </p>

                            <table id="verified" class="table table-bordered dt-responsive nowrap"
                                style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Name</th>
                                        <th>NIK</th>
                                        <th>Alamat</th>
                                        <th>No Telephone</th>
                                        <th>Keterangan </th>
                                    </tr>
                                </thead>


                                <tbody>
                                    @foreach($verifiedUsers as $key => $user)
                                        <tr>
                                            <td>{{ $key + 1}}</td>
                                            <td>{{ $user->nama}}</td>
                                            <td>{{ $user->nik}}</td>
                                            <td>{{ $user->alamat}}</td>
                                            <td>{{ $user->telepon}}</td>
                                            <td>
                                                <div class="text-center">
                                                    
                                                    <button type="button" class="btn-success btn-sm waves-effect waves-light"
                                                    onclick="window.location.href='daftar-akun/detail/{{$user->id}}'">Diverifikasi
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>

                        </div> <!-- end card body-->
                    </div> <!-- end card -->
                </div><!-- end col-->
            </div> <!-- end row -->

        </div> <!-- container-fluid -->
    </div>
    <!-- End Page-content -->
@endsection
