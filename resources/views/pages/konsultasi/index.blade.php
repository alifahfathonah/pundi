@extends('layouts.app')
@section('content')
@include('masterPages.headers.header')
<section class="blog_area section-padding" style="margin-top: -80px">
    <div class="container">
        <div class="row">
            <!-- Left Sidebar -->
            <div class="col-lg-8 mb-5 mb-lg-0">
                <div class="blog_left_sidebar" style="text-align: justify">
                    <!-- Alert Success -->
                    @if (session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show text-center bdr-5 col-md-12 container" role="alert">
                        {{ session('success') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @endif
                    <!-- Alert Errors -->
                    @if (count($errors) > 0)
                    <div class="alert alert-danger">
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
                                    <a class="nav-item nav-link active f-orange " id="nav-home-tab" data-toggle="tab" href="#pertanyaan">Kirim Pertanyaan</a>
                                    <a class="nav-item nav-link f-orange" id="nav-profile-tab" data-toggle="tab" href="#konsultasi">Konsultasi</a>
                                </div>
                            </nav>
                            <div class="tab-content" id="nav-tabContent">
                                @include('pages.konsultasi.konsultasi')
                                @include('pages.konsultasi.pertanyaan')
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
@include('masterPages.footers.footer')
@endsection
