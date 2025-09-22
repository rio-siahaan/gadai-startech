<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>Starter page | Appzia - Admin & Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesdesign" name="author" />


    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/bintang.png">
    <!-- Bootstrap Css -->
    <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

</head>

<body>

    <!-- <body data-layout="horizontal" data-topbar="light"> -->

    <!-- Begin page -->
    <div id="layout-wrapper">

        <!-- ========== Left Sidebar Start ========== -->
        <?php  include "navbar.php" ?>
        <!-- Left Sidebar End -->


        <!-- ========== Left Sidebar Start ========== -->
        <?php  include "leftsidebar.php" ?>
        <!-- Left Sidebar End -->






        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">Daftarkan User</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                                        <li class="breadcrumb-item active">User</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">


                                    <form action="#" method="post">
                                        <div class="row mb-3">
                                            <label for="example-text-input" class="col-sm-2 col-form-label">NIK</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" type="text" placeholder="NIK" id="NIK">
                                            </div>
                                        </div>
                                        <!-- end row -->
                                        <div class="row mb-3">
                                            <label for="example-search-input"
                                                class="col-sm-2 col-form-label">Nama</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" type="text" placeholder="Nama" id="Nama">
                                            </div>
                                        </div>
                                        <!-- end row -->
                                        <div class="row mb-3">
                                            <label for="example-email-input" class="col-sm-2 col-form-label">No.
                                                Telephone</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" type="number" placeholder="No.Telephone"
                                                    id="notel">
                                            </div>
                                        </div>
                                        <!-- end row -->
                                        <div class="row mb-3">
                                            <label class="col-sm-2 col-form-label">Provinsi</label>
                                            <div class="col-sm-10">
                                                <select class="form-select" aria-label="Pilih Provinsi">
                                                    <option selected="">Pilih Provinsi</option>
                                                    <option value="1">DKI Jakarta</option>
                                                    <option value="2">Yogyakarta</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>
                                        </div>
                                        <!-- end row -->
                                        <div class="row mb-3">
                                            <label for="example-tel-input"
                                                class="col-sm-2 col-form-label">Kabupaten/Kota</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" type="tel" placeholder="Kabupaten/Kota"
                                                    id="example-tel-input">
                                            </div>
                                        </div>
                                        <!-- end row -->
                                        <div class="row mb-3">
                                            <label for="example-password-input" class="col-sm-2 col-form-label">Alamat
                                                Lengkap</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" type="textarea" placeholder="Detail Alamat"
                                                    id="alamat">
                                            </div>
                                        </div>
                                        <!-- end row -->
                                        <!-- Upload Foto KTP -->
                                        <div class="row mb-4">
                                            <h4 class="card-title">Foto KTP</h4>
                                            <p class="card-title-desc">The file input is the most gnarly of the
                                                bunch and requires additional JavaScript if you’d like to hook
                                                them up with functional <em>Choose file…</em> and selected file
                                                name text.</p>
                                            <div class="input-group">
                                                <input type="file" class="form-control" id="fotoktp">
                                            </div>
                                        </div>
                                        <!-- Upload Foto Diri -->
                                        <div class="row mb-4 ">
                                            <h4 class=" card-title">Foto diri dengan KTP</h4>
                                            <p class="card-title-desc">The file input is the most gnarly of the
                                                bunch and requires additional JavaScript if you’d like to hook
                                                them up with functional <em>Choose file…</em> and selected file
                                                name text.</p>
                                            <div class="input-group">
                                                <input type="file" class="form-control" id="fotodiri">
                                            </div>

                                        </div>
                                        <!-- Password-->
                                        <div class="row mb-3">
                                            <label for="example-tel-input"
                                                class="col-sm-2 col-form-label">Password</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" type="password" placeholder="Password"
                                                    id="example-tel-input">
                                            </div>
                                        </div>
                                        <!-- end row -->
                                        <div class="row mb-3">
                                            <label for="example-password-input"
                                                class="col-sm-2 col-form-label">Konfirmasi
                                                Password</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" type="password"
                                                    placeholder="Konfirmasi Password" id="kpassword">
                                            </div>
                                        </div>
                                        <!-- Syarat dan ketentuan -->


                                        <div class="row mb-3">
                                            <div class="col-md-2 mx-auto">
                                                <div>
                                                    <div class="form-check form-check-right mb-3">
                                                        <input class="form-check-input" type="checkbox"
                                                            id="formCheckRight1">
                                                        <label class="form-check-label" for="formCheckRight1">
                                                            Syarat dan Ketentuan
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <!-- Tombol Submit -->
                                        <div class="text-center mt-4">

                                            <button type="submit" class="btn btn-success "
                                                onclick="window.location.href='userDetail.php'">
                                                Submit
                                            </button>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div> <!-- end col -->
                    </div>
                    <!-- end row -->


                </div> <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <script>
                            document.write(new Date().getFullYear())
                            </script> © Appzia.
                        </div>
                        <div class="col-sm-6">
                            <div class="text-sm-end d-none d-sm-block">
                                Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesdesign
                            </div>
                        </div>
                    </div>


                </div>
            </footer>

        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->

    <!-- Right Sidebar -->
    <div class="right-bar">
        <div data-simplebar class="h-100">
            <div class="rightbar-title d-flex align-items-center px-3 py-4">

                <h5 class="m-0 me-2">Settings</h5>

                <a href="javascript:void(0);" class="right-bar-toggle ms-auto">
                    <i class="mdi mdi-close noti-icon"></i>
                </a>
            </div>

            <!-- Settings -->
            <hr class="mt-0" />
            <h6 class="text-center mb-0">Choose Layouts</h6>

            <div class="p-4">
                <div class="mb-2">
                    <img src="assets/images/layouts/layout-1.jpg" class="img-fluid img-thumbnail" alt="layout-1">
                </div>

                <div class="form-check form-switch mb-3">
                    <input class="form-check-input theme-choice" type="checkbox" id="light-mode-switch" checked>
                    <label class="form-check-label" for="light-mode-switch">Light Mode</label>
                </div>

                <div class="mb-2">
                    <img src="assets/images/layouts/layout-2.jpg" class="img-fluid img-thumbnail" alt="layout-2">
                </div>
                <div class="form-check form-switch mb-3">
                    <input class="form-check-input theme-choice" type="checkbox" id="dark-mode-switch"
                        data-bsStyle="assets/css/bootstrap-dark.min.css" data-appStyle="assets/css/app-dark.min.css">
                    <label class="form-check-label" for="dark-mode-switch">Dark Mode</label>
                </div>

                <div class="mb-2">
                    <img src="assets/images/layouts/layout-3.jpg" class="img-fluid img-thumbnail" alt="layout-3">
                </div>
                <div class="form-check form-switch mb-5">
                    <input class="form-check-input theme-choice" type="checkbox" id="rtl-mode-switch"
                        data-appStyle="assets/css/app-rtl.min.css">
                    <label class="form-check-label" for="rtl-mode-switch">RTL Mode</label>
                </div>


            </div>

        </div> <!-- end slimscroll-menu-->
    </div>
    <!-- /Right-bar -->

    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>

    <!-- JAVASCRIPT -->
    <script src="assets/libs/jquery/jquery.min.js"></script>
    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/metismenu/metisMenu.min.js"></script>
    <script src="assets/libs/simplebar/simplebar.min.js"></script>
    <script src="assets/libs/node-waves/waves.min.js"></script>

    <!-- twitter-bootstrap-wizard js -->
    <script src="assets/libs/twitter-bootstrap-wizard/jquery.bootstrap.wizard.min.js"></script>

    <script src="assets/libs/twitter-bootstrap-wizard/prettify.js"></script>

    <!-- form wizard init -->
    <script src="assets/js/pages/form-wizard.init.js"></script>

    <script src="assets/js/app.js"></script>




</html>