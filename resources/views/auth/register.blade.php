@extends('layouts.app')

@section('content')
<!-- Header -->
@include('masterPages.headers.header')
<section class="blog_area section-padding" style="margin-top: -80px">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mb-5 mb-lg-0">
                <div class="blog_left_sidebar">
                    <form action="{{ route('register') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="" >
                            <!-- Register Kontributor -->
                            <p class="fs-30 f-b f-blk m-b-50">Register Kontributor</p>
                            <!-- E-mail -->
                            <div class="mt-10 form-group row">
                                <label class="col-sm-4 f-b col-form-label f-red-dark" for="">EMAIL<span class="text-danger ml-1">*</span></label>
                                <div class="col-sm-8">
                                    <input type="email" class="input single-input-primary {{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required oninvalid="this.setCustomValidity('E-mail tidak boleh kosong / Format salah')" oninput="setCustomValidity('')"/>
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
                                    <input type="password" class="input single-input-primary" name="password_confirmation" required oninvalid="this.setCustomValidity('Konfirmasi Password tidak boleh kosong!')" oninput="setCustomValidity('')"/>
                                </div>
                            </div>
                        </div>
                        <!-- Data Diri -->
                        <div class="m-t-50">
                            <p class="fs-30 f-b f-blk">Personal Data Kontributor</p>
                            <p class="fs-12" style="margin-top: -10px">Data berikut digunakan untuk menampilkan Profil Kontributor</p>
                            <hr style="margin-top: -10px">
                            <!-- Name -->
                            <div class="mt-10 form-group row">
                                <label class="col-sm-4 f-b col-form-label f-red-dark" for="">Nama<span class="text-danger ml-1">*</span></label>
                                <div class="col-sm-8">
                                    <input type="text" class="input single-input-primary" name="name" value="{{ old('name') }}" required oninvalid="this.setCustomValidity('Username tidak boleh kosong!')" oninput="setCustomValidity('')"/>
                                </div>
                            </div>
                            <!-- Nama Depan -->
                            <div class="mt-10 form-group row">
                                <label class="col-sm-4 f-b col-form-label f-red-dark" for="">NAMA DEPAN <span class="text-danger ml-1">*</span></label>
                                <div class="col-sm-8">
                                    <input type="text" class="input single-input-primary" name="nama_depan" value="{{ old('nama_depan') }}" required oninvalid="this.setCustomValidity('Nama Depan tidak boleh kosong!')" oninput="setCustomValidity('')"/>
                                </div>
                            </div>
                            <!-- Nama Belakang -->
                            <div class="mt-10 form-group row">
                                <label class="col-sm-4 f-b col-form-label f-red-dark" for="">NAMA BELAKANG <span class="text-danger ml-1">*</span></label>
                                <div class="col-sm-8">
                                    <input type="text" class="input single-input-primary" name="nama_belakang" value="{{ old('nama_belakang') }}" required oninvalid="this.setCustomValidity('Nama Belakang tidak boleh kosong!')" oninput="setCustomValidity('')"/>
                                </div>
                            </div>
                            <!-- Nama Yang Ditampilkan -->
                            <div class="mt-10 form-group row">
                                <label class="col-sm-4 f-b col-form-label f-red-dark" for="">USERNAME <span class="text-danger ml-1">*</span></label>
                                <div class="col-sm-8">
                                    <input type="text" class="input single-input-primary" name="username" value="{{ old('username') }}" required oninvalid="this.setCustomValidity('Username tidak boleh kosong!')" oninput="setCustomValidity('')"/>
                                </div>
                            </div>
                            <!-- Gambar User -->
                            <div class="mt-10 form-group row">
                                <label for="" class="col-sm-4 f-b col-form-label f-red-dark">FOTO PROFIL <span class="text-danger ml-1">*</span></label>
                                <div class="col-sm-8">
                                    <input type="file" name="photo" id="photo" onchange="tampilkanPreview(this,'preview')" required oninvalid="this.setCustomValidity('Foto tidak boleh kosong!')" oninput="setCustomValidity('')"/>
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
                                    <textarea type="text" class="input single-input-primary" name="bio" required oninvalid="this.setCustomValidity('Biografi tidak boleh kosong!')" oninput="setCustomValidity('')">{{ old('bio') }}</textarea>
                                </div>
                            </div>
                            <!-- Nomor Handphone -->
                            <div class="mt-10 form-group row">
                                <label class="col-sm-4 f-b col-form-label f-red-dark" for="">NOMOR HANDPHONE <span class="text-danger ml-1">*</span></label>
                                <div class="col-sm-8">
                                    <input type="text" class="input single-input-primary" name="nomor_hp" value="{{ old('nomor_hp') }}" required="" oninvalid="this.setCustomValidity('Nomor Handphone tidak boleh kosong!')" oninput="setCustomValidity('')"/>
                                </div>
                            </div>
                            <!-- Fecebook -->
                            <div class="mt-10 form-group row">
                                <label class="col-sm-4 f-b col-form-label f-red-dark" for="">FACEBOOK</label>
                                <div class="col-sm-8">
                                    <input type="text" class="input single-input-primary" name="facebook" value="{{ old('facebook') }}"/>
                                    {{-- <i class="fs-12 f-red-dark">example: https://www.facebook.com/your-account-name</i> --}}
                                </div>
                            </div>
                            <!-- Twitter -->
                            <div class="mt-10 form-group row">
                                <label class="col-sm-4 f-b col-form-label f-red-dark" for="">TWITTER</label>
                                <div class="col-sm-8">
                                    <input type="text" class="input single-input-primary" name="twitter" value="{{ old('twitter') }}"/>
                                    {{-- <i class="fs-12 f-red-dark">example: https://twitter.com/your-account-name</i> --}}
                                </div>
                            </div>
                            <!-- Instagram -->
                            <div class="mt-10 form-group row">
                                <label class="col-sm-4 f-b col-form-label f-red-dark" for="">INSTAGRAM</label>
                                <div class="col-sm-8">
                                    <input type="text" class="input single-input-primary" name="instagram" value="{{ old('instagram') }}"/>
                                    {{-- <i class="fs-12 f-red-dark">example: https://instagram.com/your-account-name</i> --}}
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4"></div>
                            <div class="col-sm-8">
                                <button class="genric-btn primary bdr-5 m-t-20" type="submit">Register</button>
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

@section('script')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<script type="text/javascript">
    // file name preview
    (function () {
        'use strict';
        $('.input-file').each(function () {
            var $input = $(this),
                $label = $input.next('.js-labelFile'),
                labelVal = $label.html();

            $input.on('change', function (element) {
                var fileName = '';
                if (element.target.value) fileName = element.target.value.split('\\').pop();
                fileName ? $label.addClass('has-file').find('.js-fileName').html(fileName) : $label
                    .removeClass('has-file').html(labelVal);
            });
        });
    })();

    // image preview
    function tampilkanPreview(gambar, idpreview) {
        var gb = gambar.files;
        for (var i = 0; i < gb.length; i++) {
            var gbPreview = gb[i];
            var imageType = /image.*/;
            var preview = document.getElementById(idpreview);
            var reader = new FileReader();
            if (gbPreview.type.match(imageType)) {
                preview.file = gbPreview;
                reader.onload = (function (element) {
                    return function (e) {
                        element.src = e.target.result;
                    };
                })(preview);
                reader.readAsDataURL(gbPreview);
            } else {
                Swal.fire(
                    'Tipe file tidak boleh',
                    'Harus format gambar',
                    'error'
                )
            }
        }
    }
</script>
@endsection
