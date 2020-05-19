@extends('layouts.app')
@section('content')
<div>
    <!-- Headr -->
    @include('masterPages.headers.header')

    <!-- Alert Success -->
    @if (session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show text-center bdr-20 m-t-30" role="alert">
        {{ session('success') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif

    <!-- Alert Errors -->
    @if (count($errors) > 0)
    <div class="alert alert-danger m-t-30">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <strong>Whoops Error!</strong>&nbsp;
        <span>You have {{ $errors->count() }} error</span>
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif


    <div class="container m-t-50">
        <form action="{{ route('artikel.tambah_artikel', Auth::user()->id) }}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            {{ method_field('POST') }}
            <p class="f-blk fs-32 f-b">Upload Tulisan</p>
            <input type="hidden" name="id" value="{{ Auth::user()->id }}" id="id">

            <!-- Judul -->
            <div class="m-t-50">
                <label for="" class="f-b fs-20">JUDUL ARTIKEL</label>
                <input type="text" class="input single-input-primary col-md-6" name="judul" id="judul"
                    placeholder="Masukan Judul Artikel" required=""
                    oninvalid="this.setCustomValidity('Judul artikel tidak boleh kosong')"
                    oninput="setCustomValidity('')" />
            </div>

            <!-- Kategori -->
            <div class="m-t-25">
                <label for="" class="f-b fs-20">KATEGORI</label><br>
                <select class="input single-input-primary col-md-6" name="kategori_id" id="kategori_id">
                    <option value="1">Headline</option>
                    <option value="2">Indepth</option>
                    <option value="3">Infografis</option>
                    <option value="4">Moderasi Islam</option>
                    <option value="5">Tadarus</option>
                </select>
            </div>

            <!-- Gambar -->
            <div class="alert alert-dismissible" id="message" data-target="#exampleModal" role="alert">
            </div>
            <div class="m-t-50">
                <label for="" class="f-b fs-20">Gambar</label>
                <input type="file" name="gambar" id="gambar" onchange="tampilkanPreview(this,'preview')">
                <label for="file" class="genric btn-tertiary js-labelFile">
                    <i class="icon fa fa-check"></i>
                    <span class="js-fileName"></span>
                </label>
                <br>
                <img width="300" class="rounded img-fluid d-block" id="preview" alt="" />
            </div>

            <!-- Isi -->
            <div class="m-t-25">
                <label for="" class="f-b fs-20">ISI ARTIKEL</label>
                @include('pages.ckeditor')
            </div>

            <!-- Button -->
            <button class="genric-btn primary circle btn-block m-t-20 bdr-20" type="submit" value="Log in">Kirim
                Tulisan</button>
            <hr>

        </form>
    </div>
</div>

<!-- Sweet Alert -->
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
