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

        <!-- Tata Cara Lelang Area -->
        <div class="testimonial-area pt-100 pb-70" style="padding-top: 5%; ">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-7 col-xxl-6">
                        <div class="testimonial-slider">
                            <div class="testimonial-icon">
                                <i class='bx bxs-quote-alt-right'></i>
                            </div>
                            
                            <div class="testimonial-item-slider owl-carousel owl-theme">
                                <div class="testimonial-item">
                                    <h3>TATA CARA</h3>
                                    <p>
                                        1. Lakukan login dan verifikasi akun. Masuk ke akun yang sudah diverifikasi lalu pilih halaman Lelang.
                                        Pilih produk yang ingin di beli.
                                     </p>
                                </div>

                                <div class="testimonial-item">
                                    <h3>TATA CARA</h3>
                                    <p>
                                        2. Baca spesifikasi dan harga produk. Klik tombol ikut lelang dan isi formulir lelang dengan benar. 
                                        Submit formulir lelang.
                                     </p>
                                </div>

                                <div class="testimonial-item">
                                    <h3>TATA CARA</h3>
                                    <p>
                                        3. JIka anda menjadi pemenang lelang, admin akan menghubungi anda 3x24 jam sejak masa akhir lelang. 
                                        Setelah dihubungi admin, silahkan selesaikan pembayaran dan ambil barang anda di cabang gadai terdekat.
                                     </p>
                                </div>

                                <div class="testimonial-item">
                                    <h3>TATA CARA</h3>
                                    <p>
                                        4. JIka anda menjadi pemenang lelang dan sudah dihubungi admin, namun lari dari tanggung jawab pembayaran barang lelang, maka
                                        anda akan diblokir sepenuhnya dari Gadai Startech. Maka anda tidak akan bisa melakukan transaksi gadai maupun lelang.
                                     </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-5 col-xxl-6">
                        <div class="testimonial-img">
                            <img src="{{url('assets/images/lelang1.jpg')}}" alt="Testimonial Images" style="border-radius: 2em;">
                        </div>
                    </div>
                </div>
            </div>

            <div class="shape-left">
                <img src="{{url('assets/images/shape/member-shape-2.png')}}" alt="Images">
            </div>
            <div class="shape-right">
                <img src="{{url('assets/images/shape/right-side.png')}}" alt="Images">
            </div>
        </div>
        <!-- Tata Cara Lelang Area End -->

        <!-- Search Area -->
        <div class="submission-area ptb-100">
            <div class="container">
                <div class="submission-title">
                    <h2>Cari Produk Lelang</h2>
                </div>
                <form class="submission-form" action="{{ url('user/lelang') }}">
                    <div class="row" style="justify-content: space-between;">
                        <div class="col-lg-5 col-md-6">
                            <div class="form-group">
								<input type="text" class="form-control" id="search" placeholder="Cari barang lelang" name="search">
							</div>
                        </div>
                        <div class="col-lg-3 col-md-3 offset-md-5 offset-lg-0">
                            <button style="font-size:40px; padding-top:15px; padding-left:100px; background-color:transparent; border:none; outline:none" class='bx bx-search-alt-2' type="submit"></button>
                        </div>
                    </div>
                </form>
                <div class="category" style="justify-content: space-evenly; display : flex; padding-top:2%" >
                    <div class="col-lg-1 col-md-1 offset-md-5 offset-lg-0">
                        <button onclick="window.location='{{ url('user/lelang/') }}'" class="default-btn" id="semua" name="semua">Semua</button>
                    </div>
                    <div class="col-lg-1 col-md-1 offset-md-5 offset-lg-0">
                        <button onclick="window.location='{{ url('user/lelang/kat/=elektronik') }}'" class="default-btn" id="elektronik" name="elektronik">Elektronik</button>
                    </div>

                    <div class="col-lg-1 col-md-1 offset-md-5 offset-lg-0">
                        <button onclick="window.location='{{ url('user/lelang/kat/=kendaraan') }}'" class="default-btn" id="kendaraan" name="kendaraan">Kendaraan</button>
                    </div>

                    <div class="col-lg-1 col-md-1 offset-md-5 offset-lg-0">
                        <button onclick="window.location='{{ url('user/lelang/kat/=perhiasan') }}'" class="default-btn" id="perhiasan" name="perhiasan">Perhiasan</button>
                    </div>

                    <div class="col-lg-1 col-md-1 offset-md-5 offset-lg-0">
                        <button onclick="window.location='{{ url('user/lelang/kat/=lainnya') }}'" class="default-btn" id="lainnya" name="lainnya">Lainnya</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Search Area End -->

        <!-- Produt Area -->
        <div class="blog-area pb-70">
            <div class="container">
                <div class="row pt-45">

                    @foreach ($lelang as $item)
                    <div class="col-lg-4 col-md-6">
                        <div class="blog-card">
                            <div class="blog-img">
                                <a href="{{url('/user/lelang/'. $item->id) }}">
                                    <!--<img src="{{url('assets/images/emas.jpg')}}" alt=""> -->                        
                                    <img src="{{url('assets/upload/barang/'. optional($item->gadai)->foto) }}" style="width: 100%; height: 100%; object-fit:cover;">
                                </a>
                            </div>
                            <div class="blog-content" >
                                <div class="blog-tag">
                                    <a href="{{url('/user/lelang/'. $item->id) }}"><span>{{ optional($item->gadai)->kategori }}</span></a>
                                </div>
                                <a href="{{url('/user/lelang/'. $item->id) }}">
                                    <h3 style="overflow:hidden;text-overflow:ellipsis;white-space:nowrap">{{ optional($item->gadai)->nama_barang }}</h3>
                                </a>                               

                                <a  style ="color:grey;" href="{{url('/user/lelang/'. $item->id) }}" class="read-btn">{{ strlen(optional($item->gadai)->deskripsi) > 30? substr(optional($item->gadai)->deskripsi, 0, 30) . "..." : optional($item->gadai)->deskripsi }}</a>
                                @if($item->bid_tertinggi != NULL)
								<a style ="color:red;font-weight: bold;font-size:20px" class="read-btn">Rp.{{ number_format($item->bid_tertinggi, 0, ',', '.') }}</a> 
								@else
								<a style ="color:red;font-weight: bold;font-size:20px" class="read-btn">Rp.{{ number_format($item->harga_awal, 0, ',', '.') }}</a>                    
                            	@endif
							</div>
                        </div>
                    </div>  
                    @endforeach

                    {{ $lelang->links('vendor.pagination.custom') }}

                    {{-- <div class="col-lg-12">
						<div class="pagination-area">
							<nav aria-label="Page navigation example text-center">
								<ul class="pagination">
									<li class="page-item">
										<a class="page-link page-links" href="#">
											<i class='bx bx-chevrons-left'></i>
										</a>
									</li>
									<li class="page-item current">
										<a class="page-link" href="#">1</a>
									</li>
									<li class="page-item">
										<a class="page-link" href="#">2</a>
									</li>
									<li class="page-item">
										<a class="page-link" href="#">3</a>
									</li>
									<li class="page-item">
										<a class="page-link" href="#">
											<i class='bx bx-chevrons-right'></i>
										</a>
									</li>
								</ul>
							</nav>
						</div>
					</div> --}}
                </div>
            </div>
        </div>
        <!-- Blog Area End -->

        <!-- Footer Area -->
        @include('user.template.footer')
        <!-- Footer Area End -->


        @include('user.template.js')
    </body>
</html>