@extends('admin.Layouts.table')
@section('main-content')

                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12 mt-5">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0 mt-5">Daftar Barang Gadai</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Daftar Barang</a>
                                        </li>
                                        <li class="breadcrumb-item active">Gadai</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-12">

                            <div class="button-items">
                                <button type="button" class="btn btn-primary waves-effect waves-light "
                                    onclick="window.location.href='/admin/form-gadai'">
                                    Formulir Gadai <i class="ri-arrow-right-line align-middle ms-2"></i>
                                </button>
                            </div>
                        </div> <br><br><br>

                        <div class="col-lg-6">
                            <a href="#h4lunas">
                            <div class="card bg-success text-white-50 ">
                                <div class="card-body text-center">
                                    <h5 class="mb-4 text-white"></i> Barang Lunas</h5>
                                    <h2 class="mt-3 mb-2 text-white"><b>{{($barangLunas)}}</b></h2>
                                </div>
                            </div>
                            </a>
                        </div>

                        <div class="col-lg-6">
                            <div class="card bg-secondary text-white-50 ">
                                <div class="card-body text-center">
                                    <h5 class="mb-4 text-white"></i> Total Barang Gadai</h5>
                                    <h2 class="mt-3 mb-2 text-white"><b>{{count($gadais)}}</b></h2>
                                </div>
                            </div>
                        </div>


                        <div class="col-lg-3">
                            <a href="#h4dalam">
                                <div class="card bg-info text-white-50 ">
                                    <div class="card-body text-center">
                                        <h5 class="mb-4 text-white"></i> Dalam Tempo</h5>
                                        <h2 class="mt-3 mb-2 text-white"><b>{{($totDalam)}}</b></h2>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-lg-3">
                            <a href="#h4jatuh">
                                <div class="card bg-warning text-white-50 ">
                                    <div class="card-body text-center">
                                        <h5 class="mb-4 text-white"></i> Jatuh Tempo</h5>
                                        <h2 class="mt-3 mb-2 text-white"><b>{{($totJatuh)}}</b></h2>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-lg-3">
                            <a href="#h4lewat">
                                <div class="card bg-danger text-white-50 ">
                                    <div class="card-body text-center">
                                        <h5 class="mb-4 text-white"></i> Lewat Tempo</h5>
                                        <h2 class="mt-3 mb-2 text-white"><b>{{($totLewat)}}</b></h2>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-lg-3">
                            <a href="#h4selesai">
                                <div class="card bg-primary text-white-50 ">
                                    <div class="card-body text-center">
                                        <h5 class="mb-4 text-white"></i> Selesai Tempo</h5>
                                        <h2 class="mt-3 mb-2 text-white"><b>{{($totSelesai)}}</b></h2>
                                    </div>
                                </div>
                            </a>
                        </div>

                    </div>

                    <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title bg-info text-white" style="padding: 10px ; border-radius: 5px "
                            id="h4dalam">
                            Barang Dalam Tempo</h4>

                        <table id="datatable" class="table table-bordered dt-responsive nowrap "
                            style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th>ID Barang</th>
                                    <th>Penggadai</th>
                                    <th>Pinjaman</th>
                                    <th>Cabang</th>
                                    <th>Jatuh Tempo</th>
                                    <th>Keterangan </th>
                                </tr>
                            </thead>


                            <tbody>
                                @foreach ($gadais as $gadai)
                                    @if ($gadai->durasi > date('Y-m-d') && $gadai->is_done == false)
                                        <tr>
                                            <td>{{ $gadai->id }}</td>
                                            <td>{{ $gadai->user->nama }}</td>
                                            <td>Rp {{ number_format($gadai->pinjaman, 0, ',', '.') }}</td>
                                            <td>{{ $gadai->admin->cabang->nama_cabang }}</td>
                                            <td>{{ $gadai->durasi }}</td>
                                            <td>
                                                <div class="text-center">
                                                    <button type="button"
                                                        class="btn-info text-white btn-sm waves-effect waves-light"
                                                        onclick="window.location.href='tables-gadai/{{ $gadai->id }}'">
                                                        More
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>

            </div> <!-- end col -->
        </div> <!-- end row -->

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title bg-warning text-white" style="padding: 10px ; border-radius: 5px "
                            id="h4jatuh">
                            Barang Jatuh Tempo</h4>

                        <table id="datatable2" class="table table-bordered dt-responsive nowrap"
                            style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th>ID Barang</th>
                                    <th>Penggadai</th>
                                    <th>Pinjaman</th>
                                    <th>Cabang</th>
                                    <th>Jatuh Tempo</th>
                                    <th>Keterangan </th>
                                </tr>
                            </thead>


                            <tbody>

                                @foreach ($gadais as $gadai)
                                    @if ($gadai->durasi == date('Y-m-d') && $gadai->is_done == false)
                                        <tr>
                                            <td>{{ $gadai->id }}</td>
                                            <td>{{ $gadai->user->nama }}</td>
                                            <td>Rp {{ number_format($gadai->pinjaman, 0, ',', '.') }}</td>
                                            <td>{{ $gadai->admin->cabang->nama_cabang }}</td>
                                            <td>{{ $gadai->durasi }}</td>
                                            <td>
                                                <div class="text-center">
                                                    <button type="button"
                                                        class="btn-warning text-white btn-sm waves-effect waves-light"
                                                        onclick="window.location.href='tables-gadai/{{ $gadai->id }}'">
                                                        More
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title bg-danger text-white" style="padding: 10px ; border-radius: 5px "
                            id="h4lewat">
                            Barang Lewat Tempo</h4>

                        <table id="datatable3" class="table table-bordered dt-responsive nowrap"
                            style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th>ID Barang</th>
                                    <th>Penggadai</th>
                                    <th>Pinjaman</th>
                                    <th>Cabang</th>
                                    <th>Jatuh Tempo</th>
                                    <th>Keterangan </th>
                                </tr>
                            </thead>


                            <tbody>

                                @foreach ($gadais as $gadai)
                                    @if (strtotime($gadai->durasi) < strtotime(date('Y-m-d')) && strtotime($gadai->durasi) > strtotime('+20 days') && $gadai->is_done == false)
                                        <tr>
                                            <td>{{ $gadai->id }}</td>
                                            <td>{{ $gadai->user->nama }}</td>
                                            <td>Rp {{ number_format($gadai->pinjaman, 0, ',', '.') }}</td>
                                            <td>{{ $gadai->admin->cabang->nama_cabang }}</td>
                                            <td>{{ $gadai->durasi }}</td>
                                            <td>
                                                <div class="text-center">
                                                    <button type="button"
                                                        class="btn-danger text-white btn-sm waves-effect waves-light"
                                                        onclick="window.location.href='tables-gadai/{{ $gadai->id }}'">
                                                        More
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>




        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title bg-primary text-white" style="padding: 10px ; border-radius: 5px "
                            id="h4selesai">
                            Barang Selesai Tempo</h4>

                        <table id="datatable4" class="table table-bordered dt-responsive nowrap"
                            style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th>ID Barang</th>
                                    <th>Penggadai</th>
                                    <th>Pinjaman</th>
                                    <th>Cabang</th>
                                    <th>Jatuh Tempo</th>
                                    <th>Keterangan </th>
                                </tr>
                            </thead>


                            <tbody>
                                    @foreach ($gadais as $gadai)
									@if (strtotime($gadai->durasi) < strtotime('-20 days') && $gadai->is_done == false && $gadai->status == 'gadai')
										<tr>
                                            <td>{{ $gadai->id }}</td>
                                            <td>{{ $gadai->user->nama }}</td>
                                            <td>Rp {{ number_format($gadai->pinjaman, 0, ',', '.') }}</td>
                                            <td>{{ $gadai->admin->cabang->nama_cabang }}</td>
                                            <td>{{ $gadai->durasi }}</td>
                                            <td>
                                                <div class="text-center">
                                                    <button type="button"
                                                        class="btn-primary text-white btn-sm waves-effect waves-light"
                                                        onclick="window.location.href='tables-gadai/{{ $gadai->id }}'">
                                                        More
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
										@endif
                                    @endforeach                                
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title bg-success text-white" style="padding: 10px ; border-radius: 5px "
                            id="h4selesai">
                            Barang Lunas</h4>

                        <table id="datatable5" class="table table-bordered dt-responsive nowrap"
                            style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th>ID Barang</th>
                                    <th>Penggadai</th>
                                    <th>Pinjaman</th>
                                    <th>Cabang</th>
                                    <th>Jatuh Tempo</th>
                                    <th>Keterangan </th>
                                </tr>
                            </thead>


                            <tbody>
                                @foreach ($gadais as $gadai)
                                    @if ($gadai->is_done == true)
                                        <tr>
                                            <td>{{ $gadai->id }}</td>
                                            <td>{{ $gadai->user->nama }}</td>
                                            <td>Rp {{ number_format($gadai->pinjaman, 0, ',', '.') }}</td>
                                            <td>{{ $gadai->admin->cabang->nama_cabang }}</td>
                                            <td>{{ $gadai->durasi }}</td>
                                            <td>
                                                <div class="text-center">
                                                    <button type="button"
                                                        class="btn-success text-white btn-sm waves-effect waves-light"
                                                        onclick="window.location.href='tables-gadai/{{ $gadai->id }}'">
                                                        More
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>

		<div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title bg-secondary text-white" style="padding: 10px ; border-radius: 5px "
                            id="h4dalam">
                            Barang Status Lelang</h4>

                        <table id="datatable" class="table table-bordered dt-responsive nowrap "
                            style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th>ID Barang</th>
                                    <th>Penggadai</th>
                                    <th>Pinjaman</th>
                                    <th>Cabang</th>
                                    <th>Jatuh Tempo</th>
                                </tr>
                            </thead>


                            <tbody>
                                @foreach ($gadais as $gadai)
                                    @if ($gadai->status == 'lelang')
                                        <tr>
                                            <td>{{ $gadai->id }}</td>
                                            <td>{{ $gadai->user->nama }}</td>
                                            <td>Rp {{ number_format($gadai->pinjaman, 0, ',', '.') }}</td>
                                            <td>{{ $gadai->admin->cabang->nama_cabang }}</td>
                                            <td>{{ $gadai->durasi }}</td>
                                        </tr>
                                    @endif
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>

            </div> <!-- end col -->
        </div> <!-- end row -->







                </div> <!-- container-fluid -->
@endsection