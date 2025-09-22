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
        <div class="main-banner">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="banner-text">
                            <span>SIlahkan Coba!</span>
                            <h1>SIMULASI GADAI</h1>

                           <div class="contact-wrap-form" style="background-color:#4356d6">
                                <form id="contactForm">
                                    <div class="col-lg-6 col-sm-6">
                                        <div class="form-group">
                                            <label style ="color:#fff;font-size:16px;" for="jenis-gadai-select">Jenis Gadai</label>
                                            <select class="form-select" name="jenis_gadai" id="jenis-gadai-select">
                                            <option value="" disabled selected>---Pilih salah satu---</option>
                                            <option value="Kendaraan">Kendaraan</option>
                                            <option value="Elektronik">Elektronik</option>
                                            <option value="Perhiasan">Perhiasan</option>
                                            <option value="Lainnya">Lainnya</option>
                                            </select>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-sm-6">
                                        <div class="form-group">
                                            <label style ="color:#fff;font-size:16px;" for="barang-gadai-select">Barang Gadai</label>
                                            <select class="form-select" name="barang_gadai" id="barang-gadai-select">
                                            <option value="" disabled selected>---Pilih salah satu---</option>
                                            {{-- <option value="Motor">Motor</option>
                                            <option value="Mobil">Mobil</option>
                                            <option value="Handphone">Handphone</option>
                                            <option value="Kamera">Kamera</option>
                                            <option value="Laptop">Laptop</option>
                                            <option value="Ipad">Tablet/Ipad</option>
                                            <option value="TV">Tv</option>
                                            <option value="PC">Monitor/PC</option>
                                            <option value="Speaker">Speaker</option>
                                            <option value="Emas">Emas</option>
                                            <option value="Perak">Perak</option>
                                            <option value="Berlian">Berlian</option>
                                            <option value="Sertifikat">Sertifikat</option> --}}
                                            </select>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-sm-6">
                                    <div class="form-group">
                                        <label style ="color:#fff;font-size:16px;" for="harga-pasaran">Harga Pasaran</label>
                                        <input style="border-radius:1em" class="form-control" type="number" name="harga-pasaran" id="harga-pasaran" required data-error="Please enter your number" class="form-control" placeholder="Masukkan harga pasaran">
                                        <div class="help-block with-errors"></div>
                                    </div>

                                    <div class="col-lg-6 col-sm-6">
                                        <div class="form-group">
                                            <label style ="color:#fff;font-size:16px;" for="jenis-select">Masa Gadai</label>
                                            <select class="form-select" name="masa-gadai-select" id="masa-gadai-select">
                                            <option value="">---Pilih salah satu---</option>
                                            <option value="satu">Satu Minggu</option>
                                            <option value="dua">Dua Minggu</option>
                                            <option value="bulan">Satu Bulan</option>
                                            </select>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                </div>
                                </form>
                            </div>

                            <div class="single-price6">
                                    <div class="single-price-title">
                                    <span style ="color:#fff;font-size:16px">Taksiran Maksimal Peminjaman</span>
                                    <h2 style ="color:#fff;font-size:20px;" id="nilai-pinjaman"></h2>
                                    </div>
                            </div>

                            <div class="single-price6">
                                    <div class="single-price-title">
                                    <span style ="color:#fff;font-size:16px">Taksiran Pengembalian</span>
                                    <h2 style ="color:#fff;font-size:20px;" id="nilai-pengembalian"></h2>
                                    </div>
                                    <span style ="color:#ff4a35;font-size: 10px">*Harga Pinjaman + Bunga</span>
                            </div>


                            <div class="banner-btn">
                                <a href="/user/tatacara" class="default-btn" style="background-color: #ff4a35;">Tertarik Untuk Gadai?</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="banner-img">
                            <img src="{{url('assets/images/simulasi1.png')}}" alt="Banner Images">
                        </div>
                    </div>
                    <div class="banner-shape-1">
                        <img src="{{url('assets/images/shape/simulasi1.png')}}" alt="Banner Shape">
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

        <!-- Pastikan Anda menyertakan jQuery sebelum menggunakan kode ini -->
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

        <script>
$(document).ready(function () {
        var nilaiGadai = {
            'Kendaraan': 0.7,
            'Elektronik': 0.6,
            'Perhiasan': 0.65,
            'Lainnya': 0.7 
        };

        var nilaiMasaGadai = {
            'satu': 0.03,
            'dua': 0.05,
            'bulan': 0.1
        };

        var taksiran;

        $('#jenis-gadai-select').change(function () {
            var selectedJenis = $(this).val();
            var barangGadaiSelect = $('#barang-gadai-select');
            barangGadaiSelect.empty();
            barangGadaiSelect.append($('<option>', { value: '', text: '---Pilih salah satu---' }));
            if (selectedJenis) {
                if (selectedJenis === 'Kendaraan') {
                    addOptions(barangGadaiSelect, ['Motor', 'Mobil']);
                } else if (selectedJenis === 'Elektronik') {
                    addOptions(barangGadaiSelect, ['Handphone', 'Kamera', 'Laptop', 'Tablet/Ipad', 'Tv', 'Monitor/PC', 'Speaker']);
                } else if (selectedJenis === 'Perhiasan') {
                    addOptions(barangGadaiSelect, ['Emas', 'Perak', 'Berlian']);
                } else if (selectedJenis === 'Lainnya') {
                    addOptions(barangGadaiSelect, ['Sertifikat', 'Lainnya']);
                }
            }
            taksiran = nilaiGadai[selectedJenis];
            calculateLoan();
        });

        $('#barang-gadai-select, #harga-pasaran, #masa-gadai-select').change(function () {
            calculateLoan();
        });

        function calculateLoan() {
            var hargaPasaran = parseFloat($("#harga-pasaran").val());
            var masaGadai = $("#masa-gadai-select").val();

            // Check if hargaPasaran is a valid number
            if (isNaN(hargaPasaran)) {
                $("#nilai-pinjaman, #nilai-pengembalian").text("Input harga pasaran tidak valid");
                return;
            }

            // Check if taksiran is defined
            if (taksiran === undefined) {
                $("#nilai-pinjaman, #nilai-pengembalian").text("Pilih jenis gadai terlebih dahulu");
                return;
            }

            // Check if masaGadai is a valid key in nilaiMasaGadai
            if (!nilaiMasaGadai.hasOwnProperty(masaGadai)) {
                $("#nilai-pinjaman, #nilai-pengembalian").text("Pilih masa gadai terlebih dahulu");
                return;
            }
        
            var nilaiPinjaman = taksiran * hargaPasaran * (1 - nilaiMasaGadai[masaGadai]);
            $("#nilai-pinjaman").text("Rp " + nilaiPinjaman.toLocaleString());

            var bunga = nilaiMasaGadai[masaGadai]; // Assuming a fixed interest rate for simplicity
            var nilaiPengembalian = taksiran * hargaPasaran;
            $("#nilai-pengembalian").text("Rp " + nilaiPengembalian.toLocaleString());
        }

        function addOptions(selectElement, optionsArray) {
            for (var i = 0; i < optionsArray.length; i++) {
                selectElement.append($('<option>', { value: optionsArray[i], text: optionsArray[i] }));
            }
        }
    });
</script>

            


        @include('user.template.js')
    </body>
</html>