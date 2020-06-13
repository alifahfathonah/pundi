@extends('layouts.app')
@section('content')

<!-- Header -->
<div>
    @include('masterPages.headers.header')
</div>

<section class="blog_area section-padding" style="margin-top: -80px">
    <div class="container">
        <div class="row">
            <!-- Left Sidebar -->
            <div class="col-lg-8 mb-5 mb-lg-0">
                <div class="blog_left_sidebar" style="text-align: justify">
                    <div>
                        <p class="f-blk fs-30 f-b">Konsultasi</p>
                        <div class="m-t-30">
                            <img class="d-block m-auto img-fluid" src="{{ asset('images/logo.png') }}" width="500" alt="">
                        </div>
                        <div class="m-t-40">
                            <div class="m-b-5">
                                <span class="">Whatsapp : 0821-2226-9993</span>
                            </div>
                            <div class="m-b-5">
                                <span class="">Whatsapp Group : </span>
                                <a href="">#</a><br>
                            </div>
                            <div>
                                <span>Email : admin@pundi.or.id</span>
                            </div>
                        </div>
                        <div class="m-t-20">
                            <nav>
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <a class="nav-item nav-link active f-orange " id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Kirim Pertanyaan</a>
                                    <a class="nav-item nav-link f-orange" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Konsultasi</a>
                                </div>
                            </nav>
                            <!-- Kolom Pertanyaan -->
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active m-t-40" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                    <p class="fs-24 f-b f-blk" style="margin-top: -20px">Kirim Pertanyaan</p>
                                    @if (Auth::user() == null)
                                    <i>Alamat email Anda tidak akan dipublikasikan. Ruas yang wajib ditandai *</i>
                                    @endif
                                    <form class="form-contact comment_form m-t-20" action="{{ route('komen.store') }}" method="post">
                                        {{ csrf_field() }}
                                        <div class="row">
                                            @if (Auth::user() == null)
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <input class="form-control" type="text" name="nama" id="nama" placeholder="Enter Name *" required>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <input class="form-control" type="email" name="email" id="email" placeholder="Enter E-mail *" required>
                                                </div>
                                            </div>
                                            @endif
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <textarea class="form-control w-100" name="comment" id="comment" cols="10" rows="8" placeholder="Pertanyaan *" required></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="button button-contact Form btn_1 boxed-btn">Kirim</button>
                                        </div>
                                    </form>
                                </div>
                                <!-- Kolom Konsultasi -->
                                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                    <div class="tab-pane fade show active m-t-40" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                        <p class="fs-24 f-b f-blk" style="margin-top: -20px">Konsultasi</p>
                                        @if (Auth::user() == null)
                                        <i>Alamat email Anda tidak akan dipublikasikan. Ruas yang wajib ditandai *</i>
                                        @endif
                                        <form class="form-contact comment_form m-t-20" action="{{ route('komen.store') }}" method="post">
                                            {{ csrf_field() }}
                                            <div class="row">
                                                @if (Auth::user() == null)
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <input class="form-control" type="text" name="nama" id="nama" placeholder="Enter Name *" required>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <input class="form-control" type="email" name="email" id="email" placeholder="Enter E-mail *" required>
                                                    </div>
                                                </div>
                                                @endif
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <textarea class="form-control w-100" name="comment" id="comment" cols="10" rows="8" placeholder="konsultasi *" required></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" class="button button-contact Form btn_1 boxed-btn">Kirim</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Right Sidebar -->
            @include('masterPages.right-sidebar')
        </div>
    </div>
</section>
<!-- Footer -->
<div>
    @include('masterPages.footers.footer')
</div>
@endsection
