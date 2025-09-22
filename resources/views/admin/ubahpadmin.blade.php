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
                                <h5 class="mb-2">Ubah Password</h5>
                                <hr>

                                <form id="form1" method="POST" action="{{ route('admin.password.update')}}">
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-12">
                                            @if($errors->any())
                                                <div class="alert alert-danger">
                                                    <ul>
                                                        @foreach($errors->all() as $error)
                                                            <li>{{ $error }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            @endif
                                            <div class="mb-3">
                                                <label class="form-label"
                                                    for="progress-basicpill-name-input"> Password
                                                    Lama</label>
                                                <input type="password" class="form-control" name="current_password" placeholder="Password Lama"
                                                    id="progress-basicpill-name-input">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="mb-3">
                                                <label class="form-label"
                                                    for="progress-basicpill-name-input">Password
                                                    Baru</label>
                                                <input type="password" class="form-control" name="password" placeholder="Password Baru"
                                                    id="progress-basicpill-name-input">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="mb-3">
                                                <label class="form-label"
                                                    for="progress-basicpill-name-input">Konfirmasi Password
                                                    Baru</label>
                                                <input type="password" class="form-control" name="password_confirmation" placeholder="Konfirmasi Password Baru"
                                                    id="progress-basicpill-name-input">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="button-items">
                                        <button type="submit"
                                            class="btn btn-danger waves-effect waves-light">
                                            Ubah Password
                                        </button>
                                    </div>
                                </form>
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

@endsection
