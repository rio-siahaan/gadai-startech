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
        <div class="main-banner" style="padding-top:115px">
            <div class="container-fluid">
                <div class="row">
                    <div class="conatiner">
                        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                            <div claass="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            </div>
                            <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{url('assets/images/slider 1.png')}}" class="d-block w-100 img-fluid" alt="...">
                                <div class="carousel-caption  d-md-block" >
                                <h1 style="color:#FFFF">Jaminkan Elektronik Anda, Dapatkan Dana Mudah dan Instan </h1>
                                <span style="color:#FFFF;font-size:16px">Gadai StarTech adalah tempat pegadaian elektronik terbaik dengan taksiran tertinggi. Dengan lebih dari 170 cabang yang sudah tersebar di Indonesia dan akan terus bertambah. Syarat mudah dan proses cepat sehingga Anda bisa mendapatkan uang yang dibutuhkan dengan segera.</span>
                                <div class="banner-btn" style="padding-top: 20px;">
                                <a href="user/tatacara" class="default-btn" style="background-color: #ff4a35;">Tata Cara Gadai Disini!</a>
                                </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="{{url('assets/images/slider 2.png')}}" class="d-block w-100 img-fluid" alt="..." >
                                <div class="carousel-caption  d-md-block">
                                <h1 style="color:#FFFF">Dapatkan Kesempatan Istimewa, Menangkan Barang Impianmu!</h1>
                                <span style="color:#FFFF;font-size:16px">Kesempatan luar biasa untuk mendapatkan barang-barang unik dan langka dengan harga yang sangat terjangkau. Jangan lewatkan momen ini untuk menjadi bagian dari pengalaman lelang yang seru dan berkesan.</span>
                                <div class="banner-btn" style="padding-top: 20px;">
                                     <a href="user/lelang" class="default-btn" style="background-color: #ff4a35;">Ikut Lelang Disini!</a>
                                </div>
                                </div>
                            </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>        
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

 
        <!-- Service Area -->
        <section class="service-area pb-70">
            <div class="container">
                <div class="section-title text-center">
                    <h2 style="max-width: 600px;">Taksiran Tinggi, Barang Aman</h2>
                    <p>
                        Percayakan Gadai Barang di Gadai Startech!
                    </p>
                </div>
                <div class="row pt-45">
                    <div class="col-lg-4 col-sm-6">
                        <div class="service-card">
                            <h1 style ="color: #ff4a35;">{{$cabang ?? ''}}</h1>
                            <p>
                                Cabang
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6">
                        <div class="service-card">
                            <h1 style ="color: #ff4a35;">{{$barang ?? ''}}</h1>
                            <p>
                                Barang Gadai
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6">
                        <div class="service-card">
                            <h1 style ="color: #ff4a35;">{{$transaksi ?? ''}}+</h1>
                            <p>
                                Transaksi
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- Service Area End -->

        <!-- SImulasi Area -->
        <div class="faq-area pt-100 pb-70">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-xxl-7">
                        <div class="faq-img">
                            <img src="{{url('assets/images/Simulasi.png')}}" alt="fAQ Images">
                        </div>
                    </div>

                    <div class="col-lg-6 col-xxl-5">
                        <div class="faq-content">
                            <span>Informasi</span>
                            <h2>Optimalkan Aset Elektronik Untuk Solusi Pendanaan Anda</h2>
                            <p>
                            Dapatkan gambaran nyata melalui simulasi akurat perhitungan pengajuan gadai
                            </p>
                            <div class="banner-btn">
                                <a href="user/simulasi" class="default-btn" style="background-color: #ff4a35;">SImulasikan Disini!</a>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
        <!-- SImulasi Area End -->

        <!-- Counter Area -->
        <div class="counter-area pt-100 pb-70">
            <div class="container">
            <div class="submission-title">
                <h2 style="padding-bottom: 35px;">Mengapa Gadai Startech?</h2>
            </div>

                <div class="row">
                    <div class="col-lg-3 col-sm-6 col-md-3">
                        <div class="single-counter">
                            <i class='bx bxs-timer' style="margin-bottom: 20px"></i>
                            <h4 style="font-size: 14px; color:#FFFF">Jangka Pinjaman Panjang</h4>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6 col-md-3">
                        <div class="single-counter">
                            <i class='bx bx-money' style="margin-bottom: 20px"></i>
                            <h4 style="font-size: 14px; color:#FFFF">Harga Terbaik</h4>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6 col-md-3">
                        <div class="single-counter">
                             <i class='bx bx-book-content' style="margin-bottom: 20px"></i>
                            <h4 style="font-size: 14px; color:#FFFF">Persyaratan Mudah</h4>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6 col-md-3">
                        <div class="single-counter">
                            <i class='bx bxs-fast-forward-circle'style="margin-bottom: 20px"></i>
                            <h4 style="font-size: 14px; color:#FFFF">Proses Cepat</h4>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6 col-md-3">
                        <div class="single-counter">
                            <i class='bx bx-user-check'style="margin-bottom: 20px"></i>
                            <h4 style="font-size: 14px; color:#FFFF">Terutentikasi OJK</h4>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6 col-md-3">
                        <div class="single-counter">
                            <i class='bx bxs-analyse'style="margin-bottom: 20px"></i>
                            <h4 style="font-size: 14px; color:#FFFF">Terpercaya</h4>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6 col-md-3">
                        <div class="single-counter">
                            <i class='bx bx-lock'style="margin-bottom: 20px"></i>
                            <h4 style="font-size: 14px; color:#FFFF">Jaminan Keamanan</h4>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6 col-md-3">
                        <div class="single-counter">
                            <i class='bx bx-street-view'style="margin-bottom: 20px"></i>
                            <h4 style="font-size: 14px; color:#FFFF">Pelayanan Terbaik</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Counter Area End -->

        <!-- Gadai Area -->
        <div class="faq-area pt-100 pb-70">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-xxl-5">
                        <div class="faq-content">
                            <span>Informasi</span>
                            <h2>Dapatkan Taksiran Tertinggi Barang Elektronik Anda di Gadai StarTech</h2>
                            <p>
                            Berminat untuk menggadaikan barang tapi bingung apa yang harus dilakukan? Simak paduan lengkap gadai di sini!
                            </p>
                            <div class="banner-btn">
                                <a href="user/tatacara" class="default-btn" style="background-color: #ff4a35;">Tata Cara Gadai Disini!</a>
                            </div>
                        </div> 
                    </div>

                    <div class="col-lg-6 col-xxl-7">
                        <div class="faq-img">
                            <img src="{{url('assets/images/gadai.png')}}" alt="fAQ Images">
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Gadai Area End -->

        <!-- Lelang Area -->
        <div class="member-area pt-100 pb-70">
            <div class="container">
                <div class="section-title text-center">
                    <span>Lelang Disini!</span>
                    <h2>Dapatkan Barang Lelang dengan Harga Terbaik</h2>
                </div>
                <div class="row pt-45">
                    <div class="col-lg-3 col-sm-6">
                        <div class="member-card">
                            <div class="member-img">
                                <a href="user/lelang">
                                    <img src="{{url('assets/images/2.png')}}" alt="Member Images">
                                </a>
                                <div class="member-content">
                                    <a href="user/lelang">
                                        <h3>Kamera</h3>
                                        <span>Temukan kamera incaran mu!</span>
                                    </a>
                                    <div class="social-icon">
                                        <ul>
                                        <li>
                                            <a href="user/lelang" target="_blank" >
                                            <i class='bx bx-cart-add'></i>
                                            </a>
                                        </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <div class="member-card">
                            <div class="member-img">
                                <a href="user/lelang">
                                    <img src="{{url('assets/images/4.png')}}" alt="Member Images">
                                </a>
                                <div class="member-content">
                                    <a href="user/lelang">
                                        <h3>Handphone</h3>
                                        <span>Hp kualitas dan harga terbaik!</span>
                                    </a>
                                    <div class="social-icon">
                                        <ul>
                                        <li>
                                            <a href="user/lelang" target="_blank" >
                                            <i class='bx bx-cart-add'></i>
                                            </a>
                                        </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <div class="member-card">
                            <div class="member-img">
                                <a href="user/lelang">
                                    <img src="{{url('assets/images/1.png')}}" alt="Member Images">
                                </a>
                                <div class="member-content">
                                    <a href="user/lelang">
                                        <h3>Laptop</h3>
                                        <span>Laptop dengan harga terjangkau!</span>
                                    </a>
                                    <div class="social-icon">
                                        <ul>
                                        <li>
                                            <a href="user/lelang" target="_blank" >
                                            <i class='bx bx-cart-add'></i>
                                            </a>
                                        </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <div class="member-card">
                            <div class="member-img">
                                <a href="user/lelang">
                                    <img src="{{url('assets/images/3.png')}}" alt="Member Images">
                                </a>
                                <div class="member-content">
                                    <a href="user/lelang">
                                        <h3>Kendaraan</h3>
                                        <span>Kendaaraan termurah di pasaran!</span>
                                    </a>
                                    <div class="social-icon">
                                        <ul>
                                        <li>
                                            <a href="user/lelang" target="_blank" >
                                            <i class='bx bx-cart-add'></i>
                                            </a>
                                        </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>       
        </div>
        <!-- Lelang Area End-->

        <!-- Alamat Area -->
        <section class="portfolio-area pt-100 pb-70">
        <div class="section-title text-center">
            <h2 style="padding-bottom: 30px">Alamat Outlet</h2>
        </div>
            <div class="container">
                <div class="section-title text-center">
                    <h4 style="color: #ff4a35;">Semarang</h4>
                </div>
                <div class="portfolio-slider pt-45 owl-carousel owl-theme">
                    <div class="portfolio-item">
                        <div class="portfolio-img">
                            <a href="https://maps.app.goo.gl/YiR6ekGBYEDCoywT6?g_st=ic">
                                <img src="{{url('assets/images/alamat/tendean.jpeg')}}" alt="Portfolio Images">
                            </a>
                            <div class="portfolio-tag">
                                <a href="https://wa.me/6283842613468"><span><i class='bx bxl-whatsapp'></i></span></a>
                            </div>
                            <div class="portfolio-content">
                                <a href="https://maps.app.goo.gl/YiR6ekGBYEDCoywT6?g_st=ic"><h3>Gadai Startech Tendean</h3></a>
                                <i class='bx bxs-chevron-right'></i>
                            </div>
                        </div>
                    </div>

                    <div class="portfolio-item">
                        <div class="portfolio-img">
                            <a href="https://maps.app.goo.gl/nD4wUAgJz2KV5Vmv7?g_st=ic">
                                <img src="{{url('assets/images/alamat/majapahit.jpeg')}}" alt="Portfolio Images">
                            </a>
                            <div class="portfolio-tag">
                                <a href="https://wa.me/6281229898200"><span><i class='bx bxl-whatsapp'></i></span></a>
                            </div>
                            <div class="portfolio-content">
                                <a href="https://maps.app.goo.gl/nD4wUAgJz2KV5Vmv7?g_st=ic"><h3>Gadai Startech Majapahit</h3></a>
                                <i class='bx bxs-chevron-right'></i>
                            </div>
                        </div>
                    </div>

                    <div class="portfolio-item">
                        <div class="portfolio-img">
                            <a href="https://maps.app.goo.gl/B2JD27FTFb9h1crx7?g_st=ic">
                                <img src="{{url('assets/images/alamat/mrican.jpeg')}}" alt="Portfolio Images">
                            </a>
                            <div class="portfolio-tag">
                                <a href="https://wa.me/6282298176325"><span><i class='bx bxl-whatsapp'></i></span></a>
                            </div>
                            <div class="portfolio-content">
                                <a href="https://maps.app.goo.gl/B2JD27FTFb9h1crx7?g_st=ic"><h3>Gadai Startech Mrican</h3></a>
                                <i class='bx bxs-chevron-right'></i>
                            </div>
                        </div>
                    </div>

                    <div class="portfolio-item">
                        <div class="portfolio-img">
                            <a href="https://maps.app.goo.gl/9dGdLUfVXoZh7B9dA?g_st=ic">
                                <img src="{{url('assets/images/alamat/banyumanik.jpeg')}}" alt="Portfolio Images">
                            </a>
                            <div class="portfolio-tag">
                                <a href="https://wa.me/6283838023597"><span><i class='bx bxl-whatsapp'></i></span></a>
                            </div>
                            <div class="portfolio-content">
                                <a href="https://maps.app.goo.gl/9dGdLUfVXoZh7B9dA?g_st=ic"><h3>Gadai Startech Banyumanik</h3></a>
                                <i class='bx bxs-chevron-right'></i>
                            </div>
                        </div>
                    </div>

                    <div class="portfolio-item">
                        <div class="portfolio-img">
                            <a href="https://maps.app.goo.gl/wZhyYKJqsyQfwwsF8?g_st=ic">
                                <img src="{{url('assets/images/alamat/wolter.jpeg')}}" alt="Portfolio Images">
                            </a>
                            <div class="portfolio-tag">
                                 <a href="https://wa.me/6282137270909"><span><i class='bx bxl-whatsapp'></i></span></a>
                            </div>
                            <div class="portfolio-content">
                                <a href="https://maps.app.goo.gl/wZhyYKJqsyQfwwsF8?g_st=ic"><h3>Gadai Startech Wolter Monginsidi</h3></a>
                                <i class='bx bxs-chevron-right'></i>
                            </div>
                        </div>
                    </div>

                    <div class="portfolio-item">
                        <div class="portfolio-img">
                            <a href="https://maps.app.goo.gl/5GjhyTo2QxHttEcTA?g_st=ic">
                                <img src="{{url('assets/images/alamat/ngaliyan.jpeg')}}" alt="Portfolio Images">
                            </a>
                            <div class="portfolio-tag">
                                 <a href="https://wa.me/6282136999850"><span><i class='bx bxl-whatsapp'></i></span></a>
                            </div>
                            <div class="portfolio-content">
                                <a href="https://maps.app.goo.gl/5GjhyTo2QxHttEcTA?g_st=ic"><h3>Gadai Startech Ngaliyan</h3></a>
                                <i class='bx bxs-chevron-right'></i>
                            </div>
                        </div>
                    </div>

                    <div class="portfolio-item">
                        <div class="portfolio-img">
                            <a href="https://maps.app.goo.gl/3CibM6GaJ6ocXsY2A?g_st=ic">
                                <img src="{{url('assets/images/alamat/sampangan.jpeg')}}" alt="Portfolio Images">
                            </a>
                            <div class="portfolio-tag">
                                 <a href="https://wa.me/6281225301505"><span><i class='bx bxl-whatsapp'></i></span></a>
                            </div>
                            <div class="portfolio-content">
                                <a href="https://maps.app.goo.gl/3CibM6GaJ6ocXsY2A?g_st=ic"><h3>Gadai Startech Sampangan</h3></a>
                                <i class='bx bxs-chevron-right'></i>
                            </div>
                        </div>
                    </div>

                    <div class="portfolio-item">
                        <div class="portfolio-img">
                            <a href="https://maps.app.goo.gl/X2TSZ8tYEbjBBv4WA?g_st=ic">
                                <img src="{{url('assets/images/alamat/mangkang.jpeg')}}" alt="Portfolio Images">
                            </a>
                            <div class="portfolio-tag">
                                <a href="https://wa.me/6281322283100"><span><i class='bx bxl-whatsapp'></i></span></a>
                            </div>
                            <div class="portfolio-content">
                                <a href="https://maps.app.goo.gl/X2TSZ8tYEbjBBv4WA?g_st=ic"><h3>Gadai Startech Mangkang</h3></a>
                                <i class='bx bxs-chevron-right'></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="section-title text-center">
                    <h4 style="color: #ff4a35;">Solo</h4>
                </div>
                <div class="portfolio-slider pt-45 owl-carousel owl-theme">
                    <div class="portfolio-item">
                        <div class="portfolio-img">
                            <a href="https://maps.app.goo.gl/vKinT9Bd9PrUXBLC6?g_st=ic">
                                <img src="{{url('assets/images/alamat/nusukan.jpeg')}}" alt="Portfolio Images">
                            </a>
                            <div class="portfolio-tag">
                                <a href="https://wa.me/6281322283200"><span><i class='bx bxl-whatsapp'></i></span></a>
                            </div>
                            <div class="portfolio-content">
                                <a href="https://maps.app.goo.gl/vKinT9Bd9PrUXBLC6?g_st=ic"><h3>Gadai Startech Nusukan</h3></a>
                                <i class='bx bxs-chevron-right'></i>
                            </div>
                        </div>
                    </div>

                    <div class="portfolio-item">
                        <div class="portfolio-img">
                            <a href="https://maps.app.goo.gl/da9YdmaATwvk4jBA6?g_st=ic">
                                <img src="{{url('assets/images/alamat/gading.jpeg')}}" alt="Portfolio Images">
                            </a>
                            <div class="portfolio-tag">
                                <a href="https://wa.me/6282123336400"><span><i class='bx bxl-whatsapp'></i></span></a>
                            </div>
                            <div class="portfolio-content">
                                <a href="https://maps.app.goo.gl/da9YdmaATwvk4jBA6?g_st=ic"><h3>Gadai Startech Gading</h3></a>
                                <i class='bx bxs-chevron-right'></i>
                            </div>
                        </div>
                    </div>

                    <div class="portfolio-item">
                        <div class="portfolio-img">
                            <a href="https://maps.app.goo.gl/Wu872Wq6tSdQAoVRA?g_st=ic">
                                <img src="{{url('assets/images/alamat/jebres.jpeg')}}" alt="Portfolio Images">
                            </a>
                            <div class="portfolio-tag">
                                <a href="https://wa.me/6281353770080"><span><i class='bx bxl-whatsapp'></i></span></a>
                            </div>
                            <div class="portfolio-content">
                                <a href="https://maps.app.goo.gl/Wu872Wq6tSdQAoVRA?g_st=ic"><h3>Gadai Startech Jebres</h3></a>
                                <i class='bx bxs-chevron-right'></i>
                            </div>
                        </div>
                    </div>

                    <div class="portfolio-item">
                        <div class="portfolio-img">
                            <a href="https://maps.app.goo.gl/PjHLGtRErVX8jPmc9?g_st=ic">
                                <img src="{{url('assets/images/alamat/pabelan.jpeg')}}" alt="Portfolio Images">
                            </a>
                            <div class="portfolio-tag">
                                <a href="https://wa.me/6282243489381"><span><i class='bx bxl-whatsapp'></i></span></a>
                            </div>
                            <div class="portfolio-content">
                                <a href="https://maps.app.goo.gl/PjHLGtRErVX8jPmc9?g_st=ic"><h3>Gadai Startech Pabelan</h3></a>
                                <i class='bx bxs-chevron-right'></i>
                            </div>
                        </div>
                    </div>

                    <div class="portfolio-item">
                        <div class="portfolio-img">
                            <a href="https://maps.app.goo.gl/aMnJKqck9iXvDeAK6?g_st=ic">
                                <img src="{{url('assets/images/alamat/gentan.jpeg')}}" alt="Portfolio Images">
                            </a>
                            <div class="portfolio-tag">
                                 <a href="https://wa.me/6281333509100"><span><i class='bx bxl-whatsapp'></i></span></a>
                            </div>
                            <div class="portfolio-content">
                                <a href="https://maps.app.goo.gl/aMnJKqck9iXvDeAK6?g_st=ic"><h3>Gadai Startech Gentan</h3></a>
                                <i class='bx bxs-chevron-right'></i>
                            </div>
                        </div>
                    </div>

                    <div class="portfolio-item">
                        <div class="portfolio-img">
                            <a href="https://maps.app.goo.gl/6m22S67DZtn5rPjN8?g_st=ic">
                                <img src="{{url('assets/images/alamat/gajahmada.jpeg')}}" alt="Portfolio Images">
                            </a>
                            <div class="portfolio-tag">
                                 <a href="https://wa.me/6281333618600"><span><i class='bx bxl-whatsapp'></i></span></a>
                            </div>
                            <div class="portfolio-content">
                                <a href="https://maps.app.goo.gl/6m22S67DZtn5rPjN8?g_st=ic"><h3>Gadai Startech Banjarsari</h3></a>
                                <i class='bx bxs-chevron-right'></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="section-title text-center">
                    <h4 style="color: #ff4a35;">Yogyakarta</h4>
                </div>
                <div class="portfolio-slider pt-45 owl-carousel owl-theme">
                    <div class="portfolio-item">
                        <div class="portfolio-img">
                            <a href="https://maps.app.goo.gl/dYuiwvZsyKgx92R47?g_st=ic">
                                <img src="{{url('assets/images/alamat/concat.jpeg')}}" alt="Portfolio Images">
                            </a>
                            <div class="portfolio-tag">
                                 <a href="https://wa.me/6282144995800"><span><i class='bx bxl-whatsapp'></i></span></a>
                            </div>
                            <div class="portfolio-content">
                                <a href="https://maps.app.goo.gl/dYuiwvZsyKgx92R47?g_st=ic"><h3>Gadai Startech Concat</h3></a>
                                <i class='bx bxs-chevron-right'></i>
                            </div>
                        </div>
                    </div>

                    <div class="portfolio-item">
                        <div class="portfolio-img">
                            <a href="https://maps.app.goo.gl/DJ3tvwYQi6LP1QTbA?g_st=ic">
                                <img src="{{url('assets/images/alamat/jakal.jpeg')}}" alt="Portfolio Images">
                            </a>
                            <div class="portfolio-tag">
                                 <a href="https://wa.me/6285728204406"><span><i class='bx bxl-whatsapp'></i></span></a>
                            </div>
                            <div class="portfolio-content">
                                <a href="https://maps.app.goo.gl/DJ3tvwYQi6LP1QTbA?g_st=ic"><h3>Gadai Startech Jakal</h3></a>
                                <i class='bx bxs-chevron-right'></i>
                            </div>
                        </div>
                    </div>

                    <div class="portfolio-item">
                        <div class="portfolio-img">
                            <a href="https://maps.app.goo.gl/gUQEtbRZJP7JLRt79?g_st=ic">
                                <img src="{{url('assets/images/alamat/tajem.jpeg')}}" alt="Portfolio Images">
                            </a>
                            <div class="portfolio-tag">
                                 <a href="https://wa.me/6282110010605"><span><i class='bx bxl-whatsapp'></i></span></a>
                            </div>
                            <div class="portfolio-content">
                                <a href="https://maps.app.goo.gl/gUQEtbRZJP7JLRt79?g_st=ic"><h3>Gadai Startech Tajem</h3></a>
                                <i class='bx bxs-chevron-right'></i>
                            </div>
                        </div>
                    </div>

                    <div class="portfolio-item">
                        <div class="portfolio-img">
                            <a href="https://maps.app.goo.gl/VbNG1hWyWwvhoLuP8?g_st=ic">
                                <img src="{{url('assets/images/alamat/seturan.jpeg')}}" alt="Portfolio Images">
                            </a>
                            <div class="portfolio-tag">
                                 <a href="https://wa.me/6285729431514"><span><i class='bx bxl-whatsapp'></i></span></a>
                            </div>
                            <div class="portfolio-content">
                                <a href="https://maps.app.goo.gl/VbNG1hWyWwvhoLuP8?g_st=ic"><h3>Gadai Startech Seturan</h3></a>
                                <i class='bx bxs-chevron-right'></i>
                            </div>
                        </div>
                    </div>

                    <div class="portfolio-item">
                        <div class="portfolio-img">
                            <a href="https://maps.app.goo.gl/vnPYALuXhEAp2daPA?g_st=ic">
                                <img src="{{url('assets/images/alamat/godean.jpeg')}}" alt="Portfolio Images">
                            </a>
                            <div class="portfolio-tag">
                                 <a href="https://wa.me/6285293930044"><span><i class='bx bxl-whatsapp'></i></span></a>
                            </div>
                            <div class="portfolio-content">
                                <a href="https://maps.app.goo.gl/vnPYALuXhEAp2daPA?g_st=ic"><h3>Gadai Startech Godean</h3></a>
                                <i class='bx bxs-chevron-right'></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Alamat Area End -->



        <!-- Footer Area -->
        @include('user.template.footer')
        <!-- Footer Area End -->



        @include('user.template.js')
    </body>
</html>