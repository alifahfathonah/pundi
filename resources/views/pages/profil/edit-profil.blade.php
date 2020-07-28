@extends('layouts.app')
@section('content')
@include('masterPages.headers.header')
<section class="blog_area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mb-5 mb-lg-0">
                <div class="blog_left_sidebar">
                    @include('masterPages.alerts')
                    <form action="{{ route('edit-profil.update-profil') }}" method="POST">
                        {{ csrf_field() }}
                        {{ method_field('POST') }}
                        <input type="hidden" name="id" value="{{ Auth::user()->id }}">
                        <div class="" >
                            <p class="fs-30 f-b f-blk m-b-40">Edit Kontributor</p>
                            <div class="mt-10 form-group row">
                                <label class="col-sm-4 f-b col-form-label" for="">EMAIL<span class="text-danger ml-1">*</span></label>
                                <div class="col-sm-8">
                                    <input type="email" class="input single-input-primary {{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ Auth::user()->email }}" required oninvalid="this.setCustomValidity('E-mail tidak boleh kosong / Format salah')" oninput="setCustomValidity('')"/>
                                </div>
                            </div>
                        </div>
                        <div class="m-t-50">
                            <p class="fs-30 f-b f-blk">Personal Data Kontributor</p>
                            <p class="fs-12" style="margin-top: -10px">Data berikut digunakan untuk menampilkan Profil Kontributor</p>
                            <hr style="margin-top: -10px">
                            <div class="mt-10 form-group row">
                                <label class="col-sm-4 f-b col-form-label " for="">NAMA<span class="text-danger ml-1">*</span></label>
                                <div class="col-sm-8">
                                    <input type="text" class="input single-input-primary" name="name" value="{{ Auth::user()->name }}" required oninvalid="this.setCustomValidity('Username tidak boleh kosong!')" oninput="setCustomValidity('')"/>
                                </div>
                            </div>
                            <div class="mt-10 form-group row">
                                <label class="col-sm-4 f-b col-form-label " for="">NAMA DEPAN <span class="text-danger ml-1">*</span></label>
                                <div class="col-sm-8">
                                    <input type="text" class="input single-input-primary" name="nama_depan" value="{{ Auth::user()->nama_depan }}" required oninvalid="this.setCustomValidity('Nama Depan tidak boleh kosong!')" oninput="setCustomValidity('')"/>
                                </div>
                            </div>
                            <div class="mt-10 form-group row">
                                <label class="col-sm-4 f-b col-form-label " for="">NAMA BELAKANG <span class="text-danger ml-1">*</span></label>
                                <div class="col-sm-8">
                                    <input type="text" class="input single-input-primary" name="nama_belakang" value="{{ Auth::user()->nama_belakang }}" required oninvalid="this.setCustomValidity('Nama Belakang tidak boleh kosong!')" oninput="setCustomValidity('')"/>
                                </div>
                            </div>
                            <div class="mt-10 form-group row">
                                <label class="col-sm-4 f-b col-form-label " for="">USERNAME <span class="text-danger ml-1">*</span></label>
                                <div class="col-sm-8">
                                    <input type="text" class="input single-input-primary" name="username" value="{{ Auth::user()->username }}" required oninvalid="this.setCustomValidity('Username tidak boleh kosong!')" oninput="setCustomValidity('')"/>
                                </div>
                            </div>
                            <div class="mt-10 form-group row">
                                <label class="col-sm-4 f-b col-form-label " for="">BIOGRAFI USER <span class="text-danger ml-1">*</span></label>
                                <div class="col-sm-8">
                                    <textarea type="text" class="input single-input-primary" name="bio" required oninvalid="this.setCustomValidity('Biografi tidak boleh kosong!')" oninput="setCustomValidity('')">{{ Auth::user()->bio }}</textarea>
                                </div>
                            </div>
                            <div class="mt-10 form-group row">
                                <label class="col-sm-4 f-b col-form-label " for="">NOMOR HANDPHONE <span class="text-danger ml-1">*</span></label>
                                <div class="col-sm-8">
                                    <input type="text" class="input single-input-primary" name="nomor_hp" value="{{ Auth::user()->nomor_hp }}" required="" oninvalid="this.setCustomValidity('Nomor Handphone tidak boleh kosong!')" oninput="setCustomValidity('')"/>
                                </div>
                            </div>
                            <div class="mt-10 form-group row">
                                <label class="col-sm-4 f-b col-form-label " for="">FACEBOOK</label>
                                <div class="col-sm-8">
                                    <input type="text" class="input single-input-primary" name="facebook" value="{{ Auth::user()->facebook }}"/>
                                </div>
                            </div>
                            <div class="mt-10 form-group row">
                                <label class="col-sm-4 f-b col-form-label " for="">TWITTER</label>
                                <div class="col-sm-8">
                                    <input type="text" class="input single-input-primary" name="twitter" value="{{ Auth::user()->twitter }}"/>
                                </div>
                            </div>
                            <div class="mt-10 form-group row">
                                <label class="col-sm-4 f-b col-form-label " for="">INSTAGRAM</label>
                                <div class="col-sm-8">
                                    <input type="text" class="input single-input-primary" name="instagram" value="{{ Auth::user()->instagram }}"/>
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
                                <u class="f-orange">Login!</u>
                            </a>
                        </p>
                    </form>
                </div>
            </div>
            @include('masterPages.right-sidebar')
        </div>
    </div>
</section>
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
