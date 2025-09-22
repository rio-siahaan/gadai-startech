<!doctype html>
<html lang="id">
@include('user.template.head')

    <body>

	<!-- Start Navbar Area -->
	@include('user.template.navbar')
	<!-- End Navbar Area -->

    <!-- Start Sign Up Area -->
	<section class="sign-up-area ptb-100">
		<div class="container">
			<div class="section-title text-center">
				<span>Daftar</span>
				<h2>Daftar Akun Sekarang!</h2>
			</div>
			<div class="contact-wrap-form log-in-width" style="border-radius: 20px;">
				<form action="{{route('register') }}" method="POST" enctype="multipart/form-data">	
					@csrf
					<div class="row">					
						<div class="col-12">
							@error('nik')
								<div style="color: yellow;">{{ $message }}</div>
							@enderror
							<div class="form-group">
								<input class="form-control @error('nik') is-invalid @enderror" value="{{ old('nik') }}" type="text" name="nik" placeholder="NIK Anda" style="border-radius: 1em;">
							</div>
						</div>
						
						<div class="col-12">
							@error('nama')
								<div style="color: yellow;">{{ $message }}</div>
							@enderror
							<div class="form-group">
								<input class="form-control @error('nama') is-invalid @enderror" value="{{ old('nama') }}" type="text" name="nama" placeholder="Nama Anda" style="border-radius: 1em;" >
							</div>
						</div>

						<div class="col-12">
							@error('email')
								<div style="color: yellow;">{{ $message }}</div>
							@enderror
							<div class="form-group">
								<input class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" type="email" name="email" placeholder="Email Anda" style="border-radius: 1em;" >
							</div>
						</div>

						<div class="col-12">
							@error('telepon')
								<div style="color: yellow;">{{ $message }}</div>
							@enderror
							<div class="form-group">
								<input class="form-control @error('telepon') is-invalid @enderror" type="text" value="{{ old('telepon') }}" name="telepon" placeholder="Nomor Telepon Anda" style="border-radius: 1em;">
							</div>
						</div>

						<div class="col-12">
							@php
								$provinces = new App\Http\Controllers\DependentDropdownController;
								$provinces= $provinces->provinces();
							@endphp				
							@error('provinsi')
								<div style="color: yellow;">{{ $message }}</div>
							@enderror	
							<div class="form-group">
								<select style="border-radius: 1em;" class="form-control" name="provinsi" id="provinsi" required>
									<option value="" disabled selected>--Pilih Provinsi--</option>
									@foreach ($provinces as $item)
										<option value="{{ $item->id ?? '' }}">{{ $item->name ?? '' }}</option>
									@endforeach
								</select>
							</div>
						</div>

						<div class="col-12">							
							@error('kabupatenkota')
								<div style="color: yellow;">{{ $message }}</div>
							@enderror
							<div class="form-group">
								<select style="border-radius: 1em;" class="form-control" name="kabupatenkota" id="kabupatenkota" required>
									<option> -- </option>
								</select>
							</div>
						</div>

						<div class="col-12">							
							@error('alamat')
								<div style="color: yellow;">{{ $message }}</div>
							@enderror
							<div class="form-group">
								<textarea class="form-control @error('alamat') is-invalid @enderror" placeholder="Alamat Lengkap Anda" name="alamat" id="floatingTextarea2" style="border-radius: 1em;"></textarea>
							</div>
						</div>

						<div class="col-12">
							@error('fotoKtp')
								<div style="color: yellow;">{{ $message }}</div>
							@enderror	
							<div class="form-group">
								<label for="fotoKtp" class="form-label" style="color:white;font-weight:bolder">Foto KTP Anda</label>
								<input class="form-control" type="file" name="fotoKtp" placeholder="Foto KTP Anda" style="border-radius: 1em;">
							</div>						
						</div>

						<div class="col-12">	
							@error('swafotoKtp')
								<div style="color: yellow;">{{ $message }}</div>
							@enderror
							<div class="form-group">
								<label for="swafotoKtp" class="form-label" style="color:white;font-weight:bolder">Swafoto KTP Anda</label>
								<input class="form-control" type="file" name="swafotoKtp" placeholder="Swafoto KTP Anda" style="border-radius: 1em;">
							</div>						
						</div>

						<div class="col-12">
							@error('password')
								<div style="color: yellow;">{{ $message }}</div>
							@enderror	
							<div class="form-group">
								<input class="form-control @error('password') is-invalid @enderror" type="password" name="password" placeholder="Password Anda (min:8 karakter)" style="border-radius: 1em;" >
							</div>						
						</div>

						<div class="col-12">
							<div class="form-group">
								<input class="form-control @error('kpass') is-invalid @enderror" type="password" name="kpass" placeholder="Konfirmasi Password Anda (min:8 karakter)" style="border-radius: 1em;">
							</div>							
						</div>
						
						<div class="col-12 text-center">
							<button class="default-btn btn-two" type="submit">
								Daftar!
							</button>
						</div>

						<div class="col-12">
							<p class="account-desc">
								Sudah punya akun?
								<a href="/user/login" style="color: white;">Masuk!</a>
							</p>
						</div>
					</div>
				</form>
			</div>
		</div>
	</section>
	<!-- End Sign Up Area -->

    <!-- Footer Area -->
	@include('user.template.footer')
	<!-- Footer Area End -->

	<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
	<script>
        function onChangeSelect(url, id, name) {
            // send ajax request to get the cities of the selected province and append to the select tag
            $.ajax({
                url: url,
                type: 'GET',
                data: {
                    id: id
                },
                success: function (data) {
                    $('#' + name).empty();
                    $('#' + name).append('<option>--Pilih Kabupaten/kota--</option>');

                    $.each(data, function (key, value) {
                        $('#' + name).append('<option value="' + key + '">' + value + '</option>');
                    });
                }
            });
        }
        $(function () {
            $('#provinsi').on('change', function () {
                onChangeSelect('{{ route("cities") }}', $(this).val(), 'kabupatenkota');
            });
        });
    </script>

	@include('user.template.js')
</body>
</html>