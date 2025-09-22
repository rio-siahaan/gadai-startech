<!doctype html>
<html lang="zxx">
@include('user.template.head')

    <body>

        <!-- Start Navbar Area -->
        @include('user.template.navbar')
        <!-- End Navbar Area -->

		<!-- Start Preloader -->
        <div class="preloader">
            <div class="preloader-wave"></div>
        </div>
        <!-- End Preloader -->
    <!-- Main Banner -->
    <div class="main-banner" style="padding: 150px 20px;">
            <div class="container-fluid " style="background-color: #2243B6;padding:20px;border-radius:10px;margin-bottom:30px">
                <div class="row text-center d-flex align-items-center">
                    <div class="col-lg-6">
                        <div class="banner-text">                    
                            <h2 style="color: white;" class="text-start">PT StarTech Gadai</h2>                            
                            <p style="color: white;" class="text-start">
                            Gadai Startech pertama kali beroperasi tahun 2008 di cabang pertama UGM Yogyakarta, dan berkembang ke Solo, serta  hingga saat ini telah mempunyai 16 cabang di 3 kota tersebut. Kantor Pusat Gadai Startech saat ini berada di Yogyakarta, tepatnya di Jl. Raya Tajem No.234 Maguwoharjo, Sleman, DIY.
                            </p>                            
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div style="z-index: 100;">
                            <img src="{{url('assets/images/megang_uang.png')}}" alt="Banner Images" width="80%">
                        </div>
                    </div>
                </div>
            </div>

            <div class="container-fluid " style="background-color: #2243B6;padding:20px;border-radius:10px;margin-bottom:30px">
                <div class="row text-center d-flex align-items-center">
                    <div class="col-lg-6">
                        <div style="z-index: 100;">
                            <img src="{{url('assets/images/ojk.png')}}" alt="Banner Images" width="80%">
                        </div>
                    </div>    
                
                    <div class="col-lg-6">
                        <div class="banner-text">                    
                            <h2 style="color: white;" class="text-start">PT StarTech Gadai</h2>                            
                            <p style="color: white;" class="text-start">
                            Gadai Startech telah mempunyai 2 ijin usaha Pergadaian Swasta dari OJK (Otoritas Jasa Keuangan) yaitu No. KEP.18/NB.1/2020 dan No. KEP.56/NB.1/2021. Dengan 2 ijin usaha tersebut, nasabah bisa merasa lebih nyaman dan tenang karena semua aturan yang berlaku sudah sesuai dengan regulasi OJK dan tidak akan merugikan nasabah sedikitpun.
                            </p>                            
                        </div>
                    </div>

                </div>
            </div>

            <div class="container-fluid " style="background-color:#2243B6;padding:20px;border-radius:10px;margin-bottom:30px">
                <div class="row text-center d-flex align-items-center">
                    <div class="col-lg-6">
                        <div class="banner-text">                    
                            <h2 style="color: white;" class="text-start">PT StarTech Gadai</h2>                            
                            <p style="color: white;" class="text-start">
                            Gadai Startech mengutamakan pelayanan yang ramah, cepat, dan mengutamakan privacy. Oleh karena itu, setiap kantor cabang kami selalu berada di lokasi yang strategis, mudah dijangkau, ruangan nyaman ber-AC sehingga terlindung dari panas dan bising udara luar.
                            </p>                            
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div style="z-index: 100;">
                            <img src="{{url('assets/images/tentang1.png')}}" alt="Banner Images" width="40%">
                        </div>
                    </div>
                </div>
            </div>

            <div class="container-fluid " style="background-color: #2243B6;padding:20px;border-radius:10px;margin-bottom:30px">
                <div class="row text-center d-flex align-items-center">
                    <div class="col-lg-6">
                        <div style="z-index: 100;">
                            <img src="{{url('assets/images/tentang2.jpg')}}" alt="Banner Images" width="80%">
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="banner-text">                    
                            <h2 style="color: white;" class="text-start">PT StarTech Gadai</h2>                            
                            <p style="color: white;" class="text-start">
                            Semua Juru Taksir kami telah melewati pelatihan yang ekstensif dan bersertifikasi nasional oleh BNSP dan Pegadaian University, sehingga mampu menaksir barang dengan teliti dan bisa memberikan taksiran harga tertinggi dan lebih akurat dibanding gadai lain. Demi keamanan barang jaminan nasabah, semua barang juga diasuransikan gratis tanpa biaya tambahan pada nasabah, sehingga tercipta rasa aman dan tenang untuk kedua belah pihak.
                        </p>                                                
                        </div>
                    </div>
                </div>
            </div>

            <div class="home-shape">
                <div class="shape1">
                    <img src="{{url('assets/images/shape/1.png')}}" alt="shape">
                </div>
                <div class="shape2">
                    <img src="{{url('assets/images/shape/2.png')}}" alt="shape">
                </div>
                <div class="shape3">
                    <img src="{{url('assets/images/shape/3.png')}}" alt="shape">
                </div>
                <div class="shape4">
                    <img src="{{url('assets/images/shape/4.png')}}" alt="shape">
                </div>
                <div class="shape5">
                    <img src="{{url('assets/images/shape/5.png')}}" alt="shape">
                </div>
                <div class="shape6">
                    <img src="{{url('assets/images/shape/6.png')}}" alt="shape">
                </div>
                <div class="shape7">
                    <img src="{{url('assets/images/shape/3.png')}}" alt="shape">
                </div>
            </div>
        </div>
        <!-- Main Banner End -->

    <!-- Footer Area -->
    @include('user.template.footer')
    <!-- Footer Area End -->


    @include('user.template.js')
</body>
</html>