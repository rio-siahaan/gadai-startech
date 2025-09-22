@extends('admin.Layouts.main')

@section('main-content')
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0"><b>Welcome, Gadai Startech {{$cabs}}</b></h4>
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Appzia</a></li>
                                <li class="breadcrumb-item active">Dashboard</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->


            <div class="row">
                <!-- Jumlah Barang -->
                <div class="col-sm-6 col-lg-4">
                    <div class="card bg-success text-white-50 text-center  ">
                        <div class="card-body">
                            <h4 class="card-title text-white">Jumlah Barang</h4>
                            <h2 class="mt-3 mb-2 text-white"><b>{{$jGadai}}</b>
                            </h2>
                            <!-- <p class="mb-0 mt-3 text-white"><b>48%</b> From Last 24 Hours</p> -->
                        </div>
                    </div>
                </div>
                <!-- Jumlah  Nasabah -->
                <div class="col-sm-6 col-lg-4">
                    <div class="card bg-danger text-white-50 text-center">
                        <div class="card-body p-t-10">
                            <h4 class="card-title  mb-0 text-white">Jumlah Nasabah</h4>
                            <h2 class="mt-3 mb-2 text-white"><b>{{$nasabah}}</b>
                            </h2>
                            <!-- <p class=" mb-0 mt-3 text-white"><b>42%</b> Orders in Last 10 months</p> -->
                        </div>
                    </div>
                </div>
                <!-- Jumlah Transaksi -->
                <div class="col-sm-6 col-lg-4">
                    <div class="card bg-warning text-white-50 text-center">
                        <div class="card-body p-t-10">
                            <h4 class="card-title  mb-0 text-white">Jumlah Transaksi</h4>
                            <h2 class="mt-3 mb-2 text-white"><b>{{$jTransaksi}}</b>
                            </h2>
                            <!-- <p class=" mb-0 mt-3 text-white"><b>22%</b> From Last 24 Hours</p> -->
                        </div>
                    </div>
                </div>

            </div>


            <div class="row">
                <!-- Jumlah Lelang -->
                <div class="col-sm-6 col-lg-6">
                    <div class="card bg-primary text-center">
                        <div class="card-body p-t-10">
                            <h4 class="card-title  mb-0 text-white">Jumlah Lelang</h4>
                            <h2 class="mt-3 mb-2 text-white"><b>{{$jLelang}}</b>
                            </h2>
                            <!-- <p class="mb-0 mt-3 text-white"><b>35%</b> From Last 1 Month</p> -->
                        </div>
                    </div>
                </div>
                <!-- Jumlah Omset -->
                <div class="col-sm-6 col-lg-6">
                    <div class="card bg-info text-center">
                        <div class="card-body p-t-10">
                            <h4 class="card-title text-white  mb-0 ">Total Omset</h4>
                            <h2 class="mt-3 mb-2 text-white"><b>Rp {{number_format($omset,0,',','.')}}</b>
                            </h2>
                            <!-- <p class=" mb-0 mt-3 text-white"><b>35%</b> From Last 1 Month</p> -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->

            <!-- Statistik  -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0"><b>Statistik Pegadaian</b></h4>
                    </div>
                </div>
            </div>

            <div class="row">

                <!-- Kategori Barang Gadai -->
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="mt-0 card-title"><b>Kategori Barang Gadai</b>
                            </h4>

                            <ul class="list-inline d-flex justify-content-around mt-4">
                                <li class="list-inline-item">
                                    <h5 class="text-center"><b>{{$kendaraan}}</b></h5>
                                    <p class="text-muted mb-0">Kendaraan</p>
                                </li>
                                <li class="list-inline-item">
                                    <h5 class="text-center"><b>{{$perhiasan}}</b></h5>
                                    <p class="text-muted mb-0">Perhiasan</p>
                                </li>
                                <li class="list-inline-item">
                                    <h5 class="text-center"><b>{{$elektronik}}</b></h5>
                                    <p class="text-muted mb-0">ELektronik</p>
                                </li>
                                <li class="list-inline-item">
                                    <h5 class="text-center"><b>{{$lainnya}}</b></h5>
                                    <p class="text-muted mb-0">lainnya...</p>
                                </li>
                            </ul>

                            <div id="pie_chart" class="apex-charts" dir="ltr"></div>
                        </div>
                    </div>
                </div>
                <!-- NPL -->
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title mb-4"><b>Non-Perfoming Loans</b></h4>


                            <ul class="list-inline d-flex justify-content-around mt-4">

                                <li class="list-inline-item">
                                    <h5 class="text-center"><b>{{$lunas}}</b></h5>
                                    <p class="text-muted mb-0">Pelunasan Tepat Waktu</p>
                                </li>
                                <li class="list-inline-item">
                                    <h5 class="text-center"><b>{{$jLelang}}</b></h5>
                                    <p class="text-muted mb-0">Pelunasan tidak tepat waktu</p>
                                </li>
                            </ul>

                            <div id="donut_chart" class="apex-charts" dir="ltr"></div>
                        </div>
                    </div>

                </div>
                <!-- Jumlah Nasabah Perprovinsi -->
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title mb-4" id="nasabah"><b>Jumlah Nasabah(Pulau Jawa)</b> </h4>


                            <ul class="list-inline d-flex justify-content-around mt-4">
								<li class="list-inline-item">
                                    <h5 class="text-center"><b>{{$jakarta}}</b></h5>
                                    <p class="text-muted mb-0">Jakarta</p>
                                </li>
								<li class="list-inline-item">
                                    <h5 class="text-center"><b>{{$banten}}</b></h5>
                                    <p class="text-muted mb-0">Banten</p>
                                </li>
								<li class="list-inline-item">
                                    <h5 class="text-center"><b>{{$jabar}}</b></h5>
                                    <p class="text-muted mb-0">Jawa Barat</p>
                                </li>
								<li class="list-inline-item">
                                    <h5 class="text-center"><b>{{$jateng}}</b></h5>
                                    <p class="text-muted mb-0">Jawa Tengah</p>
                                </li>
								<li class="list-inline-item">
                                    <h5 class="text-center"><b>{{$diy}}</b></h5>
                                    <p class="text-muted mb-0">DIY</p>
                                </li>
								<li class="list-inline-item">
                                    <h5 class="text-center"><b>{{$jatim}}</b></h5>
                                    <p class="text-muted mb-0">Jawa Timur</p>
                                </li>
                            </ul>

                            <div id="bar_chart" class="apex-charts" dir="ltr"></div>
                        </div>
                    </div>
                    <!--end card-->
                </div>
                <!-- Top Five Nasabah KabKota di Jawa Tengah -->
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title mb-4" id="nasabah2"><b>Top 5 Nasabah per Provinsi</b> </h4>


                            <ul class="list-inline d-flex justify-content-around mt-4">
                                @foreach($provinsi as $p)
                                    <li class="list-inline-item">
                                        <h5 class="text-center"><b>{{$p->total}}</b></h5>
                                        <p class="text-muted mb-0">{{optional($p->kabkota)->name}}</p>
                                    </li>
                                @endforeach
                            </ul>

                            <div id="bar_chart2" class="apex-charts" dir="ltr"></div>
                        </div>
                    </div>
                    <!--end card-->
                </div>
                <!-- Rata - Rata Pinjaman -->
                <div class="col-lg-6">
                    <div class=" card">
                        <div class="card-body" style="height: 500px">
                            <h4 class=" card-title">Rata-Rata Pinjaman</h4>



                            <ul class="list-inline d-flex justify-content-around mt-4">

                                <li class="list-inline-item">
                                    <h5 class="text-center"><b>{{ number_format($minPinjaman, 0, ',', '.') }}</b></h5>
                                    <p class="text-muted mb-0">Pinjaman terendah</p>
                                </li>
                                <li class="list-inline-item">
                                    <h5 class="text-center"><b>{{ number_format($avgPinjaman, 0, ',', '.') }}</b></h5>
                                    <p class="text-muted mb-0">Rata-rata Pinjaman</p>
                                </li>
                                <li class="list-inline-item">
                                    <h5 class="text-center"><b>{{ number_format($maxPinjaman, 0, ',', '.') }}</b></h5>
                                    <p class="text-muted mb-0">Pinjaman tertinggi</p>
                                </li>
                            </ul>
                            @if (is_array($pinjamanData))
                                <div id="sparkline8" class="text-center" style="margin-top: 70px"></div>
                            @else
                                <p>{{ $pinjamanData }}</p>
                            @endif
                        </div>
                    </div>
                </div>                
            </div>
            <!-- end row -->


            <!-- end row -->
            <!-- end row -->
        </div>

    </div>
    <!-- End Page-content -->
    <script>
        // Menyertakan data dari kontroler ke dalam variabel JavaScript
        window.boxplotData = @json($pinjamanData);

        // pie chart
        window.pieKendaraan = @json($kendaraan);
        window.piePerhiasan = @json($perhiasan);
        window.pieElektronik = @json($elektronik);
        window.pieLainnya = @json($lainnya);
        window.pieLunas = @json($lunas);
        window.pieTidakLunas = @json($jLelang);

        // barchart
		window.barJakarta = @json($jakarta);
		window.barJatim = @json($jatim);
		window.barDiy = @json($diy);
		window.barJabar = @json($jabar);
		window.barBanten = @json($banten);
        window.barJateng = @json($jateng);

        var provinsiNamesArray = [];
        var totalArray = [];
        var provinsiArray = {!! json_encode($provinsi) !!};

        provinsiArray.forEach(item => {
            var provinsiId = item.kabupatenkota;
            var total = item.total;
            
            // Mencari nama provinsi berdasarkan provinsi_id
            var provinsiName = {!! $provinsiNames->toJson() !!}[provinsiId];

            // Menyimpan nilai provinsiName dan total ke dalam array
            provinsiNamesArray.push(provinsiName);
            totalArray.push(total);
        });

        window.barProvinsi = provinsiNamesArray;
        window.barTotal = totalArray;

    </script>
@endsection
