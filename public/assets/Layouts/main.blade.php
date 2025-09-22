<!doctype html>
<html lang="en">

<head>

    <meta char  set="utf-8" />
    <title>Gadai Startech</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesdesign" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ url('assets/images/bintang.png') }}">

    <!-- jquery.vectormap css -->
    <link href="{{ url('assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css') }}" rel="stylesheet"
        type="text/css" />

    <link rel="stylesheet" href="{{ url('assets/libs/morris.js/morris.css') }}">

    <!-- DataTables -->
    <link href="{{ url('assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- Responsive datatable examples -->
    <link href="{{ ('assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') }}" rel="stylesheet"
        type="text/css" />

    <!-- Bootstrap Css -->
    <link href="{{ url('assets/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ url('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ url('assets/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />
    <style>
        /* CSS kustom untuk memastikan gambar memiliki aspek rasio yang sama */
        .img-square {
            object-fit: cover;
            /* Memastikan gambar sesuai tanpa merubah aspek rasio */
            width: 100%;
            /* Lebar 100% untuk gambar responsif */
            height: 100%;
            /* Tinggi 100% untuk gambar responsif */
        }
        </style>
</head>

<body>

    <!-- <body data-layout="horizontal" data-topbar="light"> -->

    <!-- Begin page -->
    <div id="layout-wrapper">

        <!-- ========== Left Sidebar Start ========== -->
        @extends('Layouts.nav.navbar')
        <!-- Left Sidebar End -->


        <!-- ========== Left Sidebar Start ========== -->
        @extends('Layouts.nav.leftsidebar')
        <!-- Left Sidebar End -->






        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            @yield('main-content')

            <!-- footer -->
            @extends('Layouts.footer')
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->

    <!-- Right Sidebar -->
    @extends('Layouts.nav.rightsidebar')
    <!-- /Right-bar -->

    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>

    <!-- JAVASCRIPT -->
    <script src="{{ url('assets/libs/jquery/jquery.min.js') }}"></script>
    <script src="{{ url('assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ url('assets/libs/metismenu/metisMenu.min.js') }}"></script>
    <script src="{{ url('assets/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ url('assets/libs/node-waves/waves.min.js') }}"></script>


    <!-- morris chart -->
    <script src="{{ url('assets/libs/morris.js/morris.min.js') }}"></script>
    <script src="{{ url('assets/libs/raphael/raphael.min.js') }}"></script>

    <!-- jquery.vectormap map -->
    <script src="{{ url('assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
    <script src="{{ url('assets/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-us-merc-en.js') }}"></script>

    <!-- Required datatable js -->
    <script src="{{ url('assets/libs/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ url('assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>

    <!-- Responsive examples -->
    <script src="{{ url('assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ url('assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js') }}"></script>

    <script src="{{ url('assets/js/pages/dashboard.init.js') }}"></script>

    <!-- Chart JS -->
    <script src="{{ url('assets/libs/chart.js/Chart.bundle.min.js') }}"></script>
    <script src="{{ url('assets/js/pages/chartjs.init.js') }}"></script>

    <!-- apexcharts -->
    <script src="{{ url('assets/libs/apexcharts/apexcharts.min.js') }}"></script>

    <!-- apexcharts init -->
    <script src="{{ url('assets/js/pages/apexcharts.init.js') }}"></script>

    <!-- sparkline chart -->
    <script src="{{ url('assets/libs/jquery-sparkline/jquery.sparkline.min.js') }}"></script>

    <script src="{{ url('assets/js/pages/sparklines.init.js') }}"></script>

    <!-- App js -->
    <script src="{{ url('assets/js/app.js') }}"></script>
</body>

</html>
