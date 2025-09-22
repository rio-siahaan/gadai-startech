<!doctype html>
<html lang="zxx">
@include('user.template.head')

    <body>
        <!-- Start Preloader -->
        <div class="preloader">
            <div class="preloader-wave"></div>
        </div>
        <!-- End Preloader -->

        <!-- Start Navbar Area -->
        @include('user.template.navbar')
        <!-- End Navbar Area -->
    
    <!-- Main Banner -->
    <div class="main-banner" style="padding:170px 5px 100px">
        <div class="container-fluid " style="background-color: #2243B6;padding:20px;border-radius:10px">
            <div class="row text-center d-flex align-items-center" padding="20px">
                <div class="col-lg-6">
                    <div class="banner-text">                    
                        <h1 style="color: white;" class="text-start">Tata Cara Ikut Gadai</h1>                            
                        <p style="color: white;" class="text-start">
                            Simak dan dapatkan taksiran tertinggi barang elektronik Anda di Gadai StarTech.
                        </p>                            
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="banner-img" style="z-index: 100;">
                        <img src="{{url('assets/images/megamenu-img.png')}}" alt="Banner Images" width="50%">
                    </div>
                </div>
                <div class="banner-shape-1">
                    <images src="{{url('assets/images/shape/home1.png')}}" alt="Banner Shape">
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

    
    <div class="faq-area pb-70">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-6 col-xxl-7">
                    <div class="faq-img">
                        <img src="{{url('assets/images/faq.png')}}" alt="fAQ Images">
                    </div>
                </div>

                <div class="col-lg-6 col-xxl-5">
                    <div class="faq-content">
                        <span>Kelengkapan</span>
                        <h2>Apa yang harus dilengkapi?</h2>                            
                    </div>

                    <div class="faq-accordion">
                        <ul class="accordion">
                            <li class="accordion-item">
                                <a class="accordion-title" href="javascript:void(0)">
                                    <i class='bx bx-chevron-down'></i>
                                    Institusi
                                </a>

                                <div class="accordion-content">
                                    <p> 
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item">KTP/Paspor individu atau perwakilan institusi</li>
                                            <li class="list-group-item">NPWP individu atau perwakilan institusi</li>
                                            <li class="list-group-item">NPWP institusi</li>
                                            <li class="list-group-item">SID institusi</li>
                                            <li class="list-group-item">Akte Pendirian Usaha</li>
                                            <li class="list-group-item">Laporan Keuangan</li>
                                            <li class="list-group-item">Laporan portofolio kepemilihan efek</li>
                                            <li class="list-group-item">Nomor rekening bank individu atau perwakilan institusi</li>
                                            <li class="list-group-item">Nomor handphone individu atau perwakilan institusi</li>
                                        </ul>
                                    </p>
                                </div>
                            </li>

                            <li class="accordion-item">
                                <a class="accordion-title" href="javascript:void(0)">
                                    <i class='bx bx-chevron-down'></i>
                                    Individu
                                </a>

                                <div class="accordion-content">
                                    <p> 
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item">KTP/Paspor</li>
                                            <li class="list-group-item">NPWP individu atau perwakilan institusi</li>
                                            <li class="list-group-item">NPWP</li>
                                            <li class="list-group-item">SID</li>
                                            <li class="list-group-item">Laporan portofolio kepemilihan efek</li>
                                            <li class="list-group-item">Nomor Rekening Bank</li>
                                            <li class="list-group-item">Nomor Handphone</li>
                                            <li class="list-group-item">Nomor rekening bank individu atau perwakilan institusi</li>
                                            <li class="list-group-item">Nomor handphone individu atau perwakilan institusi</li>
                                        </ul>
                                    </p>
                                </div>
                            </li>                                
                        </ul>
                    </div>   
                </div>
            </div>
        </div>
    </div>

    <section class="service-area pb-70">
        <div class="container">
            <div class="section-title text-center">
                <span>Cara</span>
                <h3>Bagaimana Cara Mengajukan Gadai?</h3>
                <hr>                    
            </div>
            <div class="row pt-45">
                <p class="text-center">
                Cukup datang ke cabang Gadai StarTech terdekat dengan membawa barang gadai dan persyaratan yang dibutuhkan. Petugas akan menaksir barang Anda dengan harga terbaik!!
                </p>        
            </div>
            <div class="banner-btn active text-center">
                <a href="/user" class="default-btn active" style="background-color:#D4372E;color:white">Lihat Cabang Gadai StarTech Terdekat >></a>
            </div>
        </div>
    </section>

    <!-- Footer Area -->
    @include('user.template.footer')
    <!-- Footer Area End -->


    @include('user.template.js')
</body>
</html>