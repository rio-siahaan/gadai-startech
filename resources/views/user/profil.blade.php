<!DOCTYPE html>
<html lang="en">
@include('user.template.head')     
<body>
    @include('user.template.navbar')
    
    <div class="banner-another" style='padding-top:100px'>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="banner-text banner-ptb">
                        <span>Profil Anda</span>
                        <h1 class="head-width">{{ $userData->nama}}</h1>                    
                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th scope="col"><h5>Nomor User</h5></th>
                                        <th scope="col"><h5>Nomor Telepon</h5></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><h6>{{$userData->id}}</h6></td>
                                        <td><h6>{{$userData->telepon}}</h6></td>
                                    </tr>
                                </tbody>
                            </table>                                                    
                        <div class="banner-btn d-flex justify-content-around">
                            <a href="/user/edit-profil/" class="default-btn">Edit Profil</a>
                            @auth
                                <a class="default-btn active" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            @endauth
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="banner-img-3 text-center" style="top:-100px;left:150px;position:absolute;width:300px;overflow:hidden">
                        <!-- <img src="assets/images/home3.jpg" alt="Banner Images"> -->
                        @if($userData->foto_profil)
                            <img src="{{url('/assets/upload/profil/'.$userData->foto_profil)}}" style="border-radius:0.2em;padding:0" alt="Banner Shape">
                        @else
                            <i class='bx bx-user' style="font-size: 200px;"></i>
                        @endif                    
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
            <div class="home-shape3">
                <img src="{{url('assets/images/shape/3.png')}}" alt="shape">
            </div>
            <div class="home-shape4">
                <img src="{{url('assets/images/shape/4.png')}}" alt="shape">
            </div>
            <div class="home-shape5">
                <img src="{{url('assets/images/shape/2.png')}}" alt="shape">
            </div>
            <div class="home-shape6">
                <img src="{{url('assets/images/shape/6.png')}}" alt="shape">
            </div>
            <div class="shape7">
                <img src="{{url('assets/images/shape/3.png')}}" alt="shape">
            </div>
            <div class="home-shape8">
                <img src="{{url('assets/images/shape/5.png')}}" alt="shape">
            </div>
        </div>
    </div>

    <section class="portfolio-area blog-area pt-100 pb-70">
        <div class="container">
            <div class="section-title text-center">
                <span>Riwayat</span>
                <h2>Riwayat Barang Anda</h2>  
                <hr>                  
            </div>               
            <div class="row pt-45">
            @foreach($riwayat as $r)
                <div class="col-lg-4 col-md-6"> 
                    <div class="blog-card">
                        <div class="blog-img">
                                <img src="{{url('assets/images/1.png')}}" alt="Blog Images">
                        </div>
                        <div class="blog-content" style="padding-bottom:5px">
                                <h3>{{$r->nama_barang}}</h3>   
                                <p><span>Pinjaman : </span> Rp{{number_format($r->pinjaman, 0, ',', '.')}}</p> 
                                <p><span>Jatuh Tempo : </span>{{$r->durasi}}</p> 
                                <p><span>Status : </span>
                                    @if($r->is_done == 1)
                                        Lunas
                                    @elseif($r->is_done == 0)
                                        Belum Lunas
                                    @endif
                                </p> 
                        </div>                
                    </div>
                </div>                       
            @endforeach            
            </div>     
        </div>
    </section>

    <!-- Footer Area -->
    @include('user.template.footer')
    <!-- Footer Area End -->


    @include('user.template.js')
</body>
</html>