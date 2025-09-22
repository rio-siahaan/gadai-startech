<header id="page-topbar">
    <div class="navbar-header">
        <div class="d-flex">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <a href="/admin" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="{{ url('assets/images/bintang2.png') }}" alt="bintang2" height="26">
                    </span>
                    <span class="logo-lg">
                        <img src="{{ url('assets/images/logo_gadai3.png') }}" alt="logo_gadai" height="44">
                    </span>
                </a>

                <a href="/admin" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="{{ url('assets/images/bintang2.png') }}" alt="bintang2" height="26">
                    </span>
                    <span class="logo-lg">
                        <img src="{{ url('assets/images/logo_gadai3.png') }}" alt="logo_gadai" height="44">
                    </span>
                </a>
            </div>

            <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect" id="vertical-menu-btn">
                <i class="ri-menu-2-line align-middle"></i>
            </button>
        </div>

        <div class="d-flex">


            <!--  Full Screen-->
            <div class="dropdown d-none d-lg-inline-block ms-1">
                <button type="button" class="btn header-item noti-icon waves-effect" data-toggle="fullscreen">
                    <i class="ri-fullscreen-line"></i>
                </button>
            </div>

            <!-- Profile -->
            <div class="dropdown d-inline-block user-dropdown">
                <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="rounded-circle header-profile-user" src="{{ url('assets/images/error-img.png')}}"
                        alt="Header Avatar">
                    <span class="d-none d-xl-inline-block ms-1">{{ auth()->user()->nama }}</span>
                    <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-end">
                    <!-- item-->
                    <a class="dropdown-item" href="{{ route('admin.profil') }}"><i class="ri-user-line align-middle me-1"></i> Profile</a>

                    <div class="dropdown-divider"></div>                    
                    @auth                                
                        <a class="dropdown-item text-danger"  onclick="event.preventDefault(); document.getElementById('logout-form').submit();" href="{{ route('logout') }}">
                        <i class="ri-shut-down-line align-middle me-1 text-danger"></i> Logout</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    @endauth
                </div>
            </div>

        </div>
    </div>
</header>