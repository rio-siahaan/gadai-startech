@extends('admin.Layouts.table')

@section('main-content')
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Daftar Barang Lelang</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Daftar Barang</a>
                                </li>
                                <li class="breadcrumb-item active">Lelang</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="col-12">
                <div class="button-items">
                    <button type="button" class="btn btn-primary waves-effect waves-light "
                        onclick="window.location.href='/admin/form-lelang'">
                        Formulir Lelang <i class="ri-arrow-right-line align-middle ms-2"></i>
                    </button>
                </div>
                
            </div> <br>

            <div class="row">
                <h4 class="mb-sm-0">Barang dalam Proses Lelang</h4><br><br>
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-rep-plugin">
                                <div class="table-responsive mb-0" data-pattern="priority-columns">
                                    <table id="" class="table">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Barang</th>
                                                <th data-priority="1">Harga Dasar</th>
                                                <th data-priority="4">Cabang</th>
                                                <th data-priority="1">Tanggal</th>
                                                <th data-priority="4">Riwayat</th>
                                                <th data-priority="1">Status</th>
                                                <th data-priority="5">More</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            {{ $i = 1 }}
                                            @foreach ($lelangs as $lelang)
                                                @if ($lelang->is_done == false)
                                                
                                                    <tr>
                                                        <td>{{ $i }}</td>
                                                        <th>{{ optional($lelang->gadai)->nama_barang }}</th>
                                                        <td>Rp. {{ number_format($lelang->harga_awal, 0, ',', '.') }}</td>
                                                        <td>{{ $lelang->gadai->admin->cabang->nama_cabang }}</td>
                                                        <td>{{ $lelang->created_at }}</td>
                                                        <td>{{ $lelang->bid->max('harga_bid') }}</td>
                                                        @if ($lelang->bid->count() === 0)
                                                            <td>Not Bidded</td>
                                                        @else
                                                            <td>Bidded</td>
                                                        @endif
                                                        <td>
                                                            <div class="text-center">
                                                                <button type="button"
                                                                    class="btn-warning text-white btn-sm waves-effect waves-light"
                                                                    onclick="window.location.href='tables-lelang/{{ $lelang->id }}'">
                                                                    More
                                                                </button>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    {{ $i++ }}
                                                @endif
                                            @endforeach

                                        </tbody>
                                    </table>
                                </div>

                            </div>

                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->

            <div class="row">
                <h4 class="mb-sm-0">Barang Selesai Lelang</h4><br><br>
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-rep-plugin">
                                <div class="table-responsive mb-0" data-pattern="priority-columns">
                                    <table id="tech-companies-1" class="table">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Barang</th>
                                                <th data-priority="1">Harga Dasar</th>
                                                <th data-priority="4">Cabang</th>
                                                <th data-priority="1">Tanggal</th>
                                                <th data-priority="4">Riwayat</th>
                                                <th data-priority="1">Status</th>
                                                <th data-priority="5">More</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            {{ $i = 1 }}
                                            @foreach ($lelangs as $lelang)
                                                @if ($lelang->is_done == true)
                                                
                                                    <tr>
                                                        <td>{{ $i }}</td>
                                                        <th>{{ optional($lelang->gadai)->nama_barang }}</th>
                                                        <td>Rp. {{ number_format($lelang->harga_awal) }}</td>
                                                        <td>{{ $lelang->gadai->admin->cabang->nama_cabang }}</td>
                                                        <td>{{ $lelang->created_at }}</td>
                                                        <td>{{ $lelang->bid->max('harga_bid') }}</td>
                                                        @if ($lelang->bid->count() === 0)
                                                            <td>Not Bidded</td>
                                                        @else
                                                            <td>Bidded</td>
                                                        @endif
                                                        <td>
                                                            <div class="text-center">
                                                                <button type="button"
                                                                    class="btn-warning text-white btn-sm waves-effect waves-light"
                                                                    onclick="window.location.href='tables-lelang/{{ $lelang->id }}'">
                                                                    More
                                                                </button>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    {{ $i++ }}
                                                @endif
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>

                            </div>

                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->

        </div> <!-- container-fluid -->
    </div>
@endsection
