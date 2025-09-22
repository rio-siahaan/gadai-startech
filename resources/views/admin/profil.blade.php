@extends('admin.Layouts.main')

@section('main-content')
<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Profile Admin</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Profile</a></li>
                            <li class="breadcrumb-item active">Admin</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <!-- end page title -->

            @if(session('success'))
                <div id="flash-message" class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

        <div class="row">
            <div class="col-lg-4 text-center">
                <div class="card">
                    <div class="card-body">
                        <div class="col-md-12">
                            <div class="mt-4 mt-md-0 d-flex justify-content-center" style="height: 339px;">
                                <img class="rounded-circle avatar-xl" alt="200x200"
                                    src="{{ url('assets/images/error-img.png') }}" data-holder-rendered="true"
                                    style="width: 250px; height: 250px; border: 2px solid #092635; padding: 5px;">
                            </div>
                            <h5><strong>{{ auth()->user()->nama }}</strong></h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <h5 class="mb-2">Detail Profile</h5>
                                <hr>

                                <div class="profile-detail">
                                    <div class="row mb-4">
                                        <div class="col-md-4"><strong>Nama</strong></div>
                                        <div class="col-md-8">{{ auth()->user()->nama }}</div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col-md-4"><strong>Email</strong></div>
                                        <div class="col-md-8">{{ auth()->user()->email }}</div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col-md-4"><strong>NIK</strong></div>
                                        <div class="col-md-8">{{ auth()->user()->nik }}</div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col-md-4"><strong>Jabatan</strong></div>
                                        <div class="col-md-8">{{ auth()->user()->jabatan }}</div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col-md-4"><strong>Cabang</strong></div>
                                        <div class="col-md-8">{{ $namaCabang->nama_cabang }}</div>
                                    </div>
                                </div>
                                <div class="button-items">
                                    <button type="button" class="btn btn-primary waves-effect waves-light"
                                        onclick="window.location.href='/admin/profil/ubahpassword'">
                                        Ingin Ganti Password?
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->

    </div> <!-- container-fluid -->
</div>
<!-- End Page-content -->

<script>
    setTimeout(function() {
        document.getElementById('flash-message').style.display = 'none';
    }, 5000); // Hilangkan pesan setelah 5 detik
</script>

@endsection
