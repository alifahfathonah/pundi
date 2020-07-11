@extends('layouts.app')
@section('content')
@include('masterPages.headers.header')
<!-- Navigation -->
<div class="container m-t-25">
    <i class="fa fa-home" style="color: gray"></i>
    <a class="m-l-8 m-r-8 f-red fs-14 non-hover f-orange" href="{{ route('/') }}">
        <span>Home</span>
    </a>
    <i class="fa fa-angle-right"></i>
    <a class="m-l-8 m-r-8 f-red fs-14 non-hover f-orange" href="{{ route('kategori','kategori='.$kategori->id) }}">
        <span>{{ $kategori->n_kategori }}</span>
    </a>
    <div class="m-t-10">
        <div style="margin-bottom: -15px">
            <i class="fas fa-angle-up fa-lg" style="transform: rotate(-45deg); color: #FEBD01 !important"></i>
        </div>
        <span class="fs-18 m-l-15" style="color: #FEBD01 !important; font-weight: 700 !important;text-transform: uppercase !important"> 
            KATEGORI : {{ $kategori->n_kategori }}
        </span>
    </div>
    <div class="m-t-15">   
        @foreach ($sub_kategori as $i)
        <span class="bdr-5 fs-11 f-b m-l-10" style="background-color: #FEBD01 !important; color: white !important; padding: 3px 10px 3px 10px; text-transform: uppercase">
            <a href="{{ route('sub_kategori','sub_kategori='.$i->id) }}">{{ $i->n_sub_kategori}}</a>
        </span>
        @endforeach
    </div>
</div>
<section class="blog_area section-padding" style="margin-top: -80px">
    <div class="container">
        <div class="row">
            <!-- Left Sidebar -->
            <div class="col-lg-8 mb-5 mb-lg-0">
                <div class="blog_left_sidebar">
                    @foreach ($artikel as $i)
                    <div class="row m-b-50">
                        <!-- Gambar -->
                        <div class="col-sm-6">
                            <img class="bdr-5 m-b-10" src="{{ asset('post/'.$i->gambar) }}" width="350" alt="">
                        </div>
                        <div class="col-sm-6">
                            <!-- Kategori -->
                            <span class="bdr-5 fs-11 f-b" style="background-color: #FEBD01 !important; color: white !important; padding: 3px 10px 3px 10px; text-transform: uppercase">
                                <a href="{{ route('kategori','kategori='.$i->kategori->id) }}" class="hover-blk">{{ $i->kategori->n_kategori}}</a>
                            </span>
                            <!-- Judul -->
                            <p class="fs-19 f-b f-blk m-t-10">
                                <a href="{{ route('artikel') .'?post='.$i->id}}" class="text-black">{{ $i->judul }}</a>
                            </p>
                            <!-- Penulis dan Waktu -->
                            <div style="color: gray; margin-top: -10px ">
                                <i class="fa fa-user"></i>
                                <span class="fs-13">{{ $i->user->name }}</span>
                                <i class="fas fa-clock m-l-10"></i>
                                <span class="fs-13">{{ substr($i->created_at,0,10) }}</span>
                            </div>
                            <!-- Isi Artikel -->
                            <div class="m-t-10 fs-16">
                                {{  substr(strip_tags($i->isi),0,500) }} […]
                            </div>
                            <!-- Read More -->
                            <a href="{{ route('artikel') .'?post='.$i->id}}" class="f-blk fs-13 f-b m-t-5">
                                <span>READ MORE</span>
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    @endforeach
                    <div style="height: 100px; width: 100px; position: absolute; margin-left: -50px; left: 50%;">
                        {{ $artikel->links() }}
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
