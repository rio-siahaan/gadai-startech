<!doctype html>
<html lang="id">
	@include('user.template.head')

    <body>

        <!-- Start Navbar Area -->
		@include('user.template.navbar')
        <!-- End Navbar Area -->

    <!-- Start Sign In Area -->
		<section class="sign-in-area ptb-100">
			<div class="container">
				<div class="section-title text-center">
                    <span>Login</span>
					<h2>Login Sekarang!</h2>					
				</div>
				<div class="contact-wrap-form log-in-width" style="border-radius: 20px;">
					<form method="post" action="/login">
						@csrf
						<div class="row">							
							<div class="col-12">
								@if(session('error'))
									<div class="alert alert-danger">
										{{ session('error') }}
									</div>
								@endif

								@error('nik')
									<div class="alert alert-danger">
										{{ $message }}
									</div>
								@enderror
								<div class="form-group">
									<input style="border-radius: 1em;" class="form-control @error('nik') is-invalid @enderror" type="text" name="nik" value="{{ old('nik') }}" placeholder="NIK atau NIP Anda">
								</div>
							</div>

							<div class="col-12">
								@error('password')
									<div style="color: yellow;">{{ $message }}</div>
								@enderror
								<div class="form-group">
									<input style="border-radius: 1em;" class="form-control @error('password') is-invalid @enderror" type="password" name="password" placeholder="Password Anda">
								</div>
							</div>

							<div class="col-lg-6 col-sm-6 form-condition">
								<div class="agree-label">
									<input type="checkbox" name="remember" id='remember' {{old('remember') ? 'checked' : ''}}>
									<label for="remember">
										Ingat Saya
									</label>
								</div>
							</div>

							<div class="col-lg-6 col-sm-6">
								<!-- <a style="color:#FFF"class="forget" href="user/fpassword">Lupa password?</a> -->
							</div>
							
							<div class="col-12 text-center">
								<button class="default-btn btn-two" type="submit">
									Masuk
								</button>
							</div>

							<div class="col-12">
								<p class="account-desc">
									Belum punya akun?
									<a href="/user/register" style="color:white">Daftar Sekarang!</a>
								</p>
							</div>
						</div>
					</form>
					<div class="shape-left">
						<img src="{{url('assets/images/shape/member-shape-2.png')}}" alt="Images">
					</div>
				</div>
			</div>
		</section>
		<!-- End Sign In Area -->

    <!-- Footer Area -->
	@include('user.template.footer')
	<!-- Footer Area End -->


	@include('user.template.js')
</body>
</html>