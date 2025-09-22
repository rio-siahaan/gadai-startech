<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Menu</li>

                <!-- <li>
                <a href="index.php" class="waves-effect">
                    <i class="ri-dashboard-line"></i><span class="badge rounded-pill bg-success float-end">3</span>
                    <span>Dashboard</span>
                </a>
            </li> -->

                <li>
                    <a href="/admin">
                        <!-- <a href="javascript: void(0);" class="has-arrow waves-effect"> -->
                        <i class="ri-layout-fill"></i>
                        <span>Dashboard</span>
                    </a>
                    <!-- <ul class="sub-menu" aria-expanded="false">
                        <li><a href="index.php">Barang</a></li>
                        <li><a href="#transaksi">Transaksi</a></li>
                        <li><a href="#nasabah">Nasabah</a></li>
                        <li><a href="#kategori">Kategori</a></li>
                        <li><a href="#rata">Rata-rata Pinjaman</a></li>
                        <li><a href="#npl">NPL</a></li>
                        <li><a href="#omset">Omset</a></li>
                        <li><a href="#totalomset">Total Omset</a></li>
                    </ul> -->
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-file-list-3-fill"></i>
                        <span>Input Form</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
   
                        <li><a href="{{ url('admin/form-gadai') }}">Gadai</a></li>
                        <li><a href="{{ url('admin/form-lelang') }}">Lelang</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-suitcase-fill"></i>
                        <span>Daftar Barang</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ url('admin/tables-gadai') }}">Gadai</a></li>
                        <li><a href="{{ url('admin/tables-lelang') }}">Lelang</a></li>
                    </ul>
                </li>



                <li>
                    <a href="{{ url('admin/daftar-akun') }}" class=" waves-effect">
                        <i class="ri-user-follow-fill"></i>
                        <span>User Verification</span>
                    </a>
                </li>

                <li>                    
                    @auth
                        <a href="{{ route('logout') }}"  onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <i class="ri-logout-box-fill"></i>
                            <span>LOG OUT</span>
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    @endauth
                </li>


            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>