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
        
        <!-- Form Section -->
        <section class="contact-section pb-100">
            <div class="container" style="padding-top: 10%;" >
                <div class="section-title text-center">
                    <h2>Formulir Lelang</h2>
                </div>
                <div class="contact-wrap pt-45">
                   <div class="contact-wrap-form">
                    @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if ($errors->any())
                        <div class="alert alert-danger" role="alert">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                        <form action="/user/input-bid" method="post">
                            @csrf
                            @method('POST')
                            <div class="row">
                                <div class="col-lg-6 col-sm-6">
                                    <div class="form-group">
                                        <input readonly type="text" name="name" class="form-control" required data-error="Please enter your name" placeholder="Your Name" value="{{ $user->nama }}">
                                        <input type="hidden" name="id_user" class="form-control" required data-error="Please enter your name" placeholder="Your Name" value="{{ $user->id }}">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-sm-6">
                                    <div class="form-group">
                                        <input readonly type="email" name="nama_barang" class="form-control" required data-error="Please enter your barang" value="{{ $lelang->gadai->nama_barang }}" readonly>
                                        <input type="hidden" name="id_lelang" value="{{ $lelang->id }}">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-sm-6">
                                    <div class="form-group">
                                        <input readonly type="text" name="phone_number" required data-error="Please enter your number" class="form-control" placeholder="Your Phone" value="{{ $user->telepon }}">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-sm-6">
                                    <div class="form-group">
                                        <input readonly type="text" name="msg_subject" class="form-control" required data-error="Please enter your subject" placeholder="Kode Barang" value="{{ $lelang->kategori }}">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-sm-6">
                                    <div class="form-group">
                                        <span style="color:#fff; text-align:center"> Tanggal Pengajuan </span>
                                        <input readonly type="text" name="msg_subject" class="form-control" placeholder="{{ \Carbon\Carbon::parse(now()->format('Y-m-d'))->locale('id_ID')->isoFormat('dddd, D MMMM YYYY') }}" readonly>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                    
                                <div class="single-price-title" style="text-align:center;">
                                    <span style ="color:#fff">Harga Bid Tertinggi Saat Ini</span>
                                    @if ($bid)
                                    <h2 style ="font-size: 30px;font-weight: bold;">Rp.{{number_format($bid -> harga_bid, 0, ',', '.')}}</h2>
                                    @else 
                                    <h2 style ="font-size: 30px;font-weight: bold;">Rp.{{number_format($lelang -> harga_awal, 0, ',', '.')}}</h2>
                                    @endif
                                </div>

                                <div class="col-lg-6 col-sm-6">
                                    @if(session('error'))
                                        <div class="alert alert-danger">
                                            {{ session('error') }}
                                        </div>
                                    @endif
                                    <div class="form-group">
                                        <input type="number" name="harga_bid" id="harga_bid" class="form-control" placeholder="Harga Lelang yang Diajukan" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="single-price5">
                                <div style="display:flex">
                                <input type="checkbox" name="agree" value="yes agree" required/>
                                <label for="agree">Saya akan bertanggung jawab atas pengajuan harga lelang yang saya lakukan. 
                                                    Jika dikemudian hari saya mendapatkan lelang namun lari dari tanggung jawab 
                                                    untuk membayar barang tersebut, saya siap untuk  diblokir secara permanen 
                                                    oleh GadaiStartech dan tidak dapat melakukan lelang maupun pegadaian lagi.</label>
                                </div>
                                </div>

                                <div class="col-lg-12 col-md-12 text-center">
                                    <button type="submit" class="default-btn page-btn text-center">
                                        Submit
                                    </button>
                                    {{-- <div class="h3 text-center hidden"></div>
                                    <div class="clearfix"></div> --}}
                                </div>
                            </div>
                        </form>
                        <div class="shape-left">
                            <img src="{{url('assets/images/shape/member-shape-2.png')}}" alt="Images">
                        </div>
                   </div>
                </div>
            </div>
        </section>
        <!-- Form Section End -->

        <!-- Footer Area -->
        @include('user.template.footer')
        <!-- Footer Area End -->


        @include('user.template.js')
    </body>
</html>