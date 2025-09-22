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

        <div class="blog-dtls ptb-100" style="padding-top: 10%;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="blog-dtls-content">
                            <div class="blog-dtls-img">
								<!--<img src="{{url('assets/images/emas.jpg')}}" alt="">-->  
                                <img src="{{url('assets/upload/barang/'. $lelang->gadai->foto)}}" alt="Blog Images">
                            </div>                                                      

                            <div class="col-lg-5 col-md-5 offset-md-5 offset-lg-0">
                                <a class="single-price4" href="{{url('/user/form-lelang/' . $lelang->id)}}" >Ikut Lelang</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6">
                                <div class="single-price">
                                    <span>{{ $lelang->gadai->kategori }}</span>
                                    <div class="single-price-title">
                                        <h2> {{ $lelang->gadai->nama }} </h2>
                                    </div>
                                    <ul>
                                        <li style="color:#ff4a35">Deskripsi</li>
                                        <li class="color-gray"> {{ $lelang->gadai->deskripsi }} </li>
                                        <li style="color:#ff4a35">Batas Lelang</li>
                                        <li class="color-gray">{{  \Carbon\Carbon::parse($lelang->deadline)->locale('id_ID')->isoFormat('dddd, D MMMM YYYY')  }}</
                                    </ul>
                                </div>

                                <div class="single-price3">
                                    <div class="single-price-title">
                                    <span style ="color:#fff">Harga Awal</span>
                                    <h2 style ="color:#fff;font-size: 20px;">Rp.{{number_format($lelang->harga_awal, 0, ',', '.')}}</h2>
                                    </div>
                                </div>

                                <div style = "margin-top:40px">
                                    <div class="single-price2">
                                    <span style ="color:#fff">Harga Tertinggi</span>
                                        <div class="single-price-title">
                                            @if ($bid)
                                            <h2 style ="color:#fff;">Rp.{{number_format($bid -> harga_bid, 0, ',', '.')}}</h2>
                                            @else
                                            <h2 style ="color:#fff;">Rp.{{number_format($lelang -> harga_awal, 0, ',', '.')}}</h2>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                    </div> 
                </div>
            </div>
        </div>

        <!-- Footer Area -->
        @include('user.template.footer')
        <!-- Footer Area End -->


        @include('user.template.js')
    </body>
</html>