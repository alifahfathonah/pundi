{{-- @extends('layouts.app')

@section('content')
    <!-- Header -->
    @include('masterPages.headers.header')

    <div class="container col-md-4 m-t-50">
        <form action="{{ route('register') }}" method="POST">
            @csrf
            <p class="text-center fs-32 f-b f-blk">Register</p>
            <p class="text-center m-t-20 f-blk" style="margin-top: -1%">Sudah punya akun? 
                <a href="{{ route('login') }}">
                    <u class="f-red">Login!</u>
                </a>
            </p>

            <!-- Name -->
            <div class="mt-10">
                <input type="text" class="input single-input-primary" name="name" placeholder="Nama" required="" autofocus
                oninvalid="this.setCustomValidity('Nama tidak boleh kosong!')" oninput="setCustomValidity('')"/>
            </div>

            <!-- E-mail -->
            <div class="mt-10">
                <input type="email" class="input single-input-primary {{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" placeholder="E-mail" required
                oninvalid="this.setCustomValidity('E-mail tidak boleh kosong!')" oninput="setCustomValidity('')"/>
                @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                        <strong>E-mail sudah pernah terdaftar!</strong>
                    </span>
                @endif
            </div>

            <!-- Password -->
            <div class="mt-10">
                <input type="password" class="input single-input-primary @error('password') is-invalid @enderror" name="password" placeholder="Password" required
                oninvalid="this.setCustomValidity('Password tidak boleh kosong!')" oninput="setCustomValidity('')"/>
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>Konfirmasi password tidak cocok!</strong>
                    </span>
                @enderror
            </div>

            <!-- Konfirmasi Passwrod -->
            <div class="mt-10">
                <input type="password" class="input single-input-primary" name="password_confirmation" placeholder="Konfirmasi password"
                oninvalid="this.setCustomValidity('Password tidak boleh kosong!')" oninput="setCustomValidity('')"/>
            </div>

            <button class="genric-btn primary circle btn-block m-t-20 bdr-20">Register</button>
            <hr>
        </form>
    </div>
@endsection --}}

@extends('layouts.app')

@section('content')
<!-- Header -->
@include('masterPages.headers.header')
<section class="blog_area section-padding" style="margin-top: -80px">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mb-5 mb-lg-0">
                <div class="blog_left_sidebar">

                    <form action="{{ route('register') }}" method="POST">
                        @csrf
                        <div class="">
                            <!-- -->
                            <p class="fs-30 f-b f-blk m-b-50">Register Kontributor</p>
                            <!-- E-mail -->
                            <div class="mt-10 form-group row">
                                <label class="col-sm-4 f-b col-form-label f-red-dark" for="">EMAIL<span class="text-danger ml-1">*</span></label>
                                <div class="col-sm-8">
                                    <input type="email" class="input single-input-primary {{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" required oninvalid="this.setCustomValidity('E-mail tidak boleh kosong!')" oninput="setCustomValidity('')"/>
                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>E-mail sudah pernah terdaftar!</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <!-- Password -->
                            <div class="mt-10 form-group row">
                                <label class="col-sm-4 f-b col-form-label f-red-dark" for="">PASSWORD <span class="text-danger ml-1">*</span></label>
                                <div class="col-sm-8">
                                    <input type="password" class="input single-input-primary @error('password') is-invalid @enderror" name="password" required oninvalid="this.setCustomValidity('Password tidak boleh kosong!')" oninput="setCustomValidity('')"/>
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>Konfirmasi password tidak cocok!</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <!-- Konfirmasi Passwrod -->
                            <div class="mt-10 form-group row">
                                <label class="col-sm-4 f-b col-form-label f-red-dark" for="">KONFIRMASI PASSWORD <span class="text-danger ml-1">*</span></label>
                                <div class="col-sm-8">
                                    <input type="password" class="input single-input-primary" name="password_confirmation"  oninvalid="this.setCustomValidity('Password tidak boleh kosong!')" oninput="setCustomValidity('')"/>
                                </div>
                            </div>
                        </div>
                        <!-- -->
                        <div class="m-t-50">
                            <p class="fs-30 f-b f-blk">Personal Data Kontributor</p>
                            <p class="fs-12" style="margin-top: -10px">Data berikut digunakan untuk menampilkan Profil Kontributor</p>
                            <hr style="margin-top: -10px">
                            <!-- Name -->
                            <div class="mt-10 form-group row">
                                <label class="col-sm-4 f-b col-form-label f-red-dark" for="">USERNAME <span class="text-danger ml-1">*</span></label>
                                <div class="col-sm-8">
                                    <input type="text" class="input single-input-primary" name="name" required="" autofocus  oninvalid="this.setCustomValidity('Nama tidak boleh kosong!')" oninput="setCustomValidity('')"/>
                                </div>
                            </div>
                            <!-- Nama Depan -->
                            <div class="mt-10 form-group row">
                                <label class="col-sm-4 f-b col-form-label f-red-dark" for="">NAMA DEPAN <span class="text-danger ml-1">*</span></label>
                                <div class="col-sm-8">
                                    <input type="text" class="input single-input-primary" name="name" required="" autofocus  oninvalid="this.setCustomValidity('Nama tidak boleh kosong!')" oninput="setCustomValidity('')"/>
                                </div>
                            </div>
                            <!-- Nama Belakang -->
                            <div class="mt-10 form-group row">
                                <label class="col-sm-4 f-b col-form-label f-red-dark" for="">NAMA BELAKANG <span class="text-danger ml-1">*</span></label>
                                <div class="col-sm-8">
                                    <input type="text" class="input single-input-primary" name="name" required="" autofocus  oninvalid="this.setCustomValidity('Nama tidak boleh kosong!')" oninput="setCustomValidity('')"/>
                                </div>
                            </div>
                            <!-- Nama Yang Ditampilkan -->
                            <div class="mt-10 form-group row">
                                <label class="col-sm-4 f-b col-form-label f-red-dark" for="">NAMA YANG DITAMPILKAN</label>
                                <div class="col-sm-8">
                                    <input type="text" class="input single-input-primary" name="name" required="" autofocus  oninvalid="this.setCustomValidity('Nama tidak boleh kosong!')" oninput="setCustomValidity('')"/>
                                </div>
                            </div>
                            <!-- Gambar User -->
                            <div class="mt-10 form-group row">
                                <label for="" class="col-sm-4 f-b col-form-label f-red-dark">GAMBAR UNGGULAN <span class="text-danger ml-1">*</span></label>
                                <div class="col-sm-8">
                                    <input type="file" name="gambar" id="gambar" onchange="tampilkanPreview(this,'preview')">
                                    <label for="file" class="js-labelFile">
                                        <span class="js-fileName"></span>
                                    </label>
                                    <img width="300" class="rounded img-fluid d-block" id="preview" alt="" style="margin-top: 10px;"/>
                                    <hr style="margin-top: -1px; margin-bottom: -1px">
                                    <i class="fs-12 f-red-dark">Gambar bisa berupa foto, logo, atau symbol icon. Maksimal 1 Mb.</i>
                                </div>
                            </div>
                            <!-- Biografi User -->
                            <div class="mt-10 form-group row">
                                <label class="col-sm-4 f-b col-form-label f-red-dark" for="">BIOGRAFI USER <span class="text-danger ml-1">*</span></label>
                                <div class="col-sm-8">
                                    <textarea type="text" class="input single-input-primary" name="name" required></textarea>
                                </div>
                            </div>
                            <!-- Nomor Handphone -->
                            <div class="mt-10 form-group row">
                                <label class="col-sm-4 f-b col-form-label f-red-dark" for="">NOMOR HANDPHONE <span class="text-danger ml-1">*</span></label>
                                <div class="col-sm-8">
                                    <input type="text" class="input single-input-primary" name="name" required="" autofocus  oninvalid="this.setCustomValidity('Nama tidak boleh kosong!')" oninput="setCustomValidity('')"/>
                                </div>
                            </div>
                            <!-- Fecebook -->
                            <div class="mt-10 form-group row">
                                <label class="col-sm-4 f-b col-form-label f-red-dark" for="">FACEBOOK</label>
                                <div class="col-sm-8">
                                    <input type="text" class="input single-input-primary" name="name" required="" autofocus  oninvalid="this.setCustomValidity('Nama tidak boleh kosong!')" oninput="setCustomValidity('')"/>
                                    <i class="fs-12 f-red-dark">example: https://www.facebook.com/your-account-name</i>
                                </div>
                            </div>
                            <!-- Twitter -->
                            <div class="mt-10 form-group row">
                                <label class="col-sm-4 f-b col-form-label f-red-dark" for="">TWITTER</label>
                                <div class="col-sm-8">
                                    <input type="text" class="input single-input-primary" name="name" required="" autofocus  oninvalid="this.setCustomValidity('Nama tidak boleh kosong!')" oninput="setCustomValidity('')"/>
                                    <i class="fs-12 f-red-dark">example: https://twitter.com/your-account-name</i>
                                </div>
                            </div>
                            <!-- Instagram -->
                            <div class="mt-10 form-group row">
                                <label class="col-sm-4 f-b col-form-label f-red-dark" for="">INSTAGRAM</label>
                                <div class="col-sm-8">
                                    <input type="text" class="input single-input-primary" name="name" required="" autofocus  oninvalid="this.setCustomValidity('Nama tidak boleh kosong!')" oninput="setCustomValidity('')"/>
                                    <i class="fs-12 f-red-dark">example: https://instagram.com/your-account-name</i>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4"></div>
                            <div class="col-sm-8">
                                <button class="genric-btn primary bdr-5 m-t-20">Register</button>
                            </div>
                        </div>
                        <hr>
                        <p class="m-t-20 f-blk" style="margin-top: -1%">Sudah punya akun? 
                            <a href="{{ route('login') }}">
                                <u class="f-red">Login!</u>
                            </a>
                        </p>
                    </form>

                </div>
            </div>
            <!-- sideBar -->
            @include('masterPages.right-sidebar')
        </div>
    </div>
</section>
<!-- Footer -->
@include('masterPages.footers.footer')
@endsection
