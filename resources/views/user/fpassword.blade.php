<!doctype html>
<html lang="zxx">
    @include('user.template.head')

    <body>

        <!-- Start Navbar Area -->
        @include('user.template.navbar')
        <!-- End Navbar Area -->

    <!-- Start Sign In Area -->
		<section class="sign-in-area ptb-100">
			<div class="container">
				<div class="section-title text-center">
                    <span>Sign In</span>
					<h2>Sign In to your account!</h2>
					<p>
                        It is a long established fact that a reader will be distracted by
                        the readable content of a page when looking at its layout.
                    </p>
				</div>
				<div class="contact-wrap-form log-in-width">
					<form method="post">
						<div class="row">							

							<div class="col-12">
								<div class="form-group">
									<input class="form-control" type="text" name="nik" placeholder="NIK Anda">
								</div>
							</div>

							<div class="col-12">
								<div class="form-group">
									<input class="form-control" type="email" name="email" placeholder="Email Anda">
								</div>
							</div>

							<div class="col-12 text-center">
								<button class="default-btn btn-two" type="submit">
									Perbaharui password!
								</button>
							</div>
						</div>
					</form>
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