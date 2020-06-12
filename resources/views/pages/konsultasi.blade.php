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
                            <img class="d-block m-auto" src="{{ asset('images/logo1.png') }}" width="200" alt="">
                        </div>
                        <div></div>
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
