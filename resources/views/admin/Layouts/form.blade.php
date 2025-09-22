<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesdesign" name="author" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ url('assets/images/bintang.png') }}">
    <!-- Plugins css -->
    <link href="{{ url('assets/libs/dropzone/min/dropzone.min.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/libs/dropzone/dropzone.css') }}">
    <!-- twitter-bootstrap-wizard css -->
    <link rel="stylesheet" href="{{ url('assets/libs/twitter-bootstrap-wizard/prettify.css') }}">

    <!-- Bootstrap Css -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ url('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('assets/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />

    <style>
        .dropzoneDragArea {
            background-color: #ffffff;
            border: 1px dashed #c0ccda;
            border-radius: 6px;
            padding: 60px;
            text-align: center;
            margin-bottom: 15px;
            cursor: pointer;
        }

        .dropzone {
            box-shadow: 0px 2px 20px 0px #f2f2f2;
            border-radius: 10px;
        }
    </style>

    {{-- select2 --}}
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <style>
        span.select2.select2-container.select2-container{
            width: 100%;
        }
    </style>

    <title>{{ $title }}</title>
</head>

<body>

    <!-- <body data-layout="horizontal" data-topbar="light"> -->

    <!-- Begin page -->
    <div id="layout-wrapper">

        <!-- ========== Navbar Start ========== -->
        @include('admin.Layouts.nav.navbar')
        <!-- ========== Navbar End ========== -->

        <!-- ========== Left Sidebar Start ========== -->
        @include('admin.Layouts.nav.leftsidebar')
        <!-- Left Sidebar End -->



        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">
            @yield('main-content')

            <!-- Footer Start -->
            @include('admin.Layouts.footer')
            <!-- Footer End -->
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->

    <!-- JAVASCRIPT -->
    <script src="{{ url('assets/libs/jquery/jquery.min.js') }}"></script>
    <script src="{{ url('assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ url('assets/libs/metismenu/metisMenu.min.js') }}"></script>
    <script src="{{ url('assets/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ url('assets/libs/node-waves/waves.min.js') }}"></script>

    <!-- twitter-bootstrap-wizard js -->
    <script src="{{ url('assets/libs/twitter-bootstrap-wizard/jquery.bootstrap.wizard.min.js') }}"></script>

    <script src="{{ url('assets/libs/twitter-bootstrap-wizard/prettify.js') }}"></script>

    <!-- Plugins js -->
    <script src="{{ asset('assets/libs/dropzone/min/dropzone.min.js') }}"></script>
    <script src="{{ asset('assets/libs/dropzone/dropzone.js') }}"></script>

    <!-- form wizard init -->
    <script src="{{ url('assets/js/pages/form-wizard.init.js') }}"></script>

    <script src="{{ url('assets/js/app.js') }}"></script>

    <script src="{{ url('assets/dropZoneSetting.js') }}"></script>
    <script src="{{ url('assets/autoFill.js') }}"></script>
    <script src="{{ url('assets/OptionForm.js') }}"></script>

    {{-- Select2 --}}
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.js-example-basic-single').select2();
        });
    </script>


</body>

</html>
