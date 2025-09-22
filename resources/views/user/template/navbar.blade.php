<!-- Start Navbar Area -->
<div class="navbar-area">
            <!-- Menu For Mobile Device -->
            <div class="mobile-nav">
                <a href="/user" class="logo">
                    <img src="{{url('assets/images/logo_gadai.png')}}" class="logo-one" alt="Logo">
                    <img src="{{url('assets/images/logo_gadai.png')}}" class="logo-two" alt="Logo">
                </a>
            </div>

            <!-- Menu For Desktop Device -->
            <div class="main-nav">
                <div class="container">
                    <nav class="d-flex justify-content-between navbar navbar-expand-lg navbar-light ">
                        <a class="navbar-brand" href="/user">
                            <img src="{{url('assets/images/logo_gadai.png')}}" alt="Logo" class="logo-one">
                        </a>
                        <a class="navbar-brand-sticky" href="/user">
                            <img src="{{url('assets/images/logo_gadai.png')}}" alt="Logo" class="logo-one">
                        </a>

                        <div class=" mean-menu" style="text-align: right;" id="navbarSupportedContent">
                            <ul class="navbar-nav m-auto">
                                <li class="nav-item">
                                    <a href="/user" class="nav-link">
                                        Home
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/user/tentang" class="nav-link">
                                        Tentang
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/user/lelang" class="nav-link">
                                        Lelang
                                    </a>
                                </li>   
                                @if ($userData)
									@if($userData->role == 'admin')
                                    <li class="nav-item">
                                        <a href="/admin" class="nav-link">
                                            <u>Kembali ke admin</u>
                                        </a>
                                    </li>    
                                    @else
                                   	<li class="nav-item">
                                        <a href="/user/profil/" class="nav-link">
                                            Halo, {{$userData->nama}}
                                        </a>
                                    </li> 
                                    @endif
                                @else
                                    <div class="menu-btn">
                                        <a href="/user/login" class="seo-btn">Masuk</a>                            
                                    </div>                               
                                @endif 
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <!-- End Navbar Area -->