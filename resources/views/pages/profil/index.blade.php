@extends('layouts.app')
@section('content')
@include('masterPages.headers.header')
<section class="blog_area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mb-5 mb-lg-0">
                <div class="blog_left_sidebar">
                    @include('masterPages.alerts')
                    <div class="card">
                        <h5 class="card-header">{{ Auth::user()->name }} Dashboard </h5>
                        <div class="card-body">
                            <div class="text-center">
                                <a href="#" data-toggle="modal" data-target="#editPhoto">
                                    <img class="rounded-circle" style="position: relative" src="{{ config('app.path_url').'ava/'.Auth::user()->photo }}" width="100" alt="photo">    
                                </a>
                                <p class="text-black fs-20 mt-2 f-b700">
                                    {{ Auth::user()->name }}
                                    <a class="text-black" data-toggle="modal" data-target="#editProfil" href="#"><i class="fa fa-angle-down fa-xs ml-1"></i></a>
                                </p>
                                <p class="text-black -mt-10">“{{ Auth::user()->bio }}”</p>
                                <div>
                                    <a class="f-blk" href="https://web.facebook.com/{{ Auth::user()->facebook }}" target="blank">
                                        <i class="fa fa-facebook-square fa-lg mr-2"></i>
                                    </a>
                                    <a class="f-blk" href="https://twitter.com/{{Auth::user()->twitter}}" target="blank">
                                        <i class="fa fa-twitter-square fa-lg mr-2"></i>
                                    </a>
                                    <a class="f-blk" href="https://www.instagram.com/{{ Auth::user()->instagram }}" target="blank"> 
                                        <i class="fab fa-instagram-square fa-lg"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="modal fade" id="editPhoto" tabindex="-1" role="dialog"aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content text-center">
                                        <div class="modal-header">
                                            <h6 class="modal-title">Ganti Photo Profil</h6>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form action="{{ route('edit-profil.update-photo', Auth::user()->id) }}" method="POST" enctype="multipart/form-data">
                                            {{ csrf_field() }}
                                            {{ method_field('POST') }}
                                            <div class="mt-3">
                                                <img class="rounded-circle" src="{{ config('app.path_url').'ava/'.Auth::user()->photo }}" width="100" alt="photo"> 
                                                <div class="mt-3">
                                                    <input type="hidden" name="id" value="{{ Auth::user()->id }}">
                                                    <input type="file" name="photo" id="file" class="input-file" value="{{ Auth::user()->photo }} " onchange="tampilkanPreview(this,'preview')">
                                                    <label for="file" class="genric-btn primary-border bdr-5 js-labelFile">
                                                        <i class="icon fa fa-check"></i>
                                                        <span class="js-fileName">Ganti Foto Profil</span>
                                                    </label>
                                                    <img width="300" class="rounded img-fluid mx-auto d-block m-t-10 mb-3" id="preview"/>
                                                    <hr class="m-0">
                                                    <i class="fs-12 ">Gambar bisa berupa foto, logo, atau symbol icon. Maksimal 1 Mb.</i>
                                                </div>   
                                            </div>
                                            <div class="modal-footer">
                                                <button type="submit" class="genric-btn primary-border bdr-5">Simpan</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="modal fade" id="editProfil" tabindex="-1" role="dialog"aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content text-center">
                                        <a class="dropdown-item fs-15 mt-1" href="{{ route('edit-profil') }}">Edit Profil</a>
                                        <hr class="mt-0">
                                        <a class="dropdown-item fs-15 -mt-25" href="{{ route('kirim-tulisan') }}">Kirim Tulisan</a>
                                        <hr class="mt-0">
                                        <a class="dropdown-item fs-15 -mt-25" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                            Log Out
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-5">
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active f-orange" id="home-tab" data-toggle="tab" href="#artikel">Artikel</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link f-orange" id="profile-tab" data-toggle="tab" href="#info">Info</a>
                                    </li>
                                </ul>
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="artikel" role="tabpanel">
                                        <ul class="list-group list-group-flush">
                                            <?php $no = 0;?>
                                            @foreach ($post->take(10) as $i)
                                            <?php $no++ ;?>
                                            <li class="list-group-item">
                                                <a class="text-black" style="margin-left: -20px !important" href="{{ route('artikel') .'?post='.$i->id}}">
                                                {{ $no }}. &nbsp;{{ $i->judul }}
                                                </a>
                                            </li>
                                            @endforeach
                                        </ul>
                                        @if ($post->count() > 10)
                                        <span class="bdr-5 fs-11 f-b m-r-10 sub-kategori-card">
                                            <a class="text-center" href="#">Lihat Semua Artikel</a>
                                        </span>
                                        @endif
                                    </div>
                                    <div class="tab-pane fade" id="info" role="tabpanel">
                                        info
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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
