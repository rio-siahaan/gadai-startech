<!DOCTYPE html>
<html lang="en">
<head>
@include('user.template.head')
</head>
<body>
@include('user.template.navbar')

    <!-- Contact Section -->
    <section class="contact-section pb-100 pt-100">
        <div class="container">
            <div class="section-title text-center">
                <span>Edit</span>
                <h2>Edit Profil Anda</h2>            
            </div>
            <div class="contact-wrap pt-45">
                <div class="contact-wrap-form" style="border-radius: 10px;">
                    <form enctype="multipart/form-data" method="POST" action="{{ route('editProfil') }}">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-lg-6 col-sm-6">
                                <div class="form-group">
                                    <input readonly style="border-radius: 1em;background-color:grey;color:white" type="text" name="nama" id="nama" class="form-control"  data-error="Please enter your name" value="{{$userData->nama}}">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-sm-6">
                                <div class="form-group">
                                    <input readonly style="border-radius: 1em;background-color:grey;color:white" type="text" name="nik" id="nik" class="form-control"  data-error="Please enter your NIK" value="{{$userData->nik}}">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            
                            <div class="col-lg-6 col-sm-6">
                                @error('telepon')
                                    <div style="color: yellow;">{{ $message }}</div>
                                @enderror
                                <div class="form-group">
                                    <input style="border-radius: 1em;" type="text" name="telepon" id="telepon"  data-error="Please enter your number" class="form-control" value="{{$userData->telepon}}">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-sm-6">
                                @error('alamat')
                                    <div style="color: yellow;">{{ $message }}</div>
                                @enderror
                                <div class="form-group">
                                    <input style="border-radius: 1em;" type="text" name="alamat" id="alamat" class="form-control"  data-error="Please enter your alamat" value="{{$userData->alamat}}">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="">
                                @error('foto_profil')
                                    <div style="color: yellow;">{{ $message }}</div>
                                @enderror
                                <div class="form-group">
                                    <input placeholder="Foto Profil Anda" style="border-radius: 0.5em;" class="form-control" type="file" name="foto_profil" id="">
                                </div>
                            </div>

                            <div class="">
                                <div class="form-group">
                                    <input type="hidden" name="user_id" value="{{$userData->id}}">
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12 text-center">                                
                                <button type="submit" class="default-btn page-btn text-center">
                                    Edit Profil
                                </button>
                                <div id="msgSubmit" class="h3 text-center hidden"></div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->

    <!-- Footer Area -->
    @include('user.template.footer')
        <!-- Footer Area End -->


        @include('user.template.js')
</body>
</html>