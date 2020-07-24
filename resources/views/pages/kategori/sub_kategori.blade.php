@extends('layouts.app')
@section('content')
@include('masterPages.headers.header')
<div class="container m-t-15">
    <i class="fa fa-home"></i>
    <a class="m-l-8 m-r-8 f-red fs-14 non-hover f-orange" href="{{ route('/') }}">
        <span>Home</span>
    </a>
    <i class="fa fa-angle-right"></i>
    <a class="m-l-8 m-r-8 f-red fs-14 non-hover  f-orange" href="{{ route('sub_kategori','sub_kategori='.$sub_kategori->id) }}">
        <span>{{ $sub_kategori->n_sub_kategori }}</span>
    </a>
    <div class="m-t-10">
        <div class="-mb-13">
            <i class="fas fa-angle-up fa-lg arrow"></i>
        </div>
        <span class="fs-18 m-l-15 kategori-title"> 
            KATEGORI : {{ $sub_kategori->n_sub_kategori }}
        </span>
    </div>
</div>
<section class="blog_area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mb-5 mb-lg-0">
                <div class="blog_left_sidebar">
                    @foreach ($artikel as $i)
                    <div class="row m-b-30">
                        <div class="col-sm-6">
                            <img class="bdr-5 m-b-10" src="{{ config('app.path_url').'artikel/'.$i->gambar }}" width="350" alt="photo">
                        </div>
                        <div class="col-sm-6">
                            <span class="bdr-5 fs-11 f-b sub-kategori-card">
                                <a href="{{ route('sub_kategori','sub_kategori='.$i->sub_kategori->id) }}">{{ $i->sub_kategori->n_sub_kategori}}</a>
                            </span>
                            <p class="fs-19 f-b f-blk m-t-10">
                                <a href="{{ route('artikel') .'?post='.$i->id}}" class="text-black">{{ $i->judul }}</a>
                            </p>
                            <div class="-mt-10 text-grey">
                                <i class="fa fa-user"></i>
                                <span class="fs-13">{{ $i->user->name }}</span>
                                <i class="fas fa-clock m-l-10"></i>
                                <span class="fs-13">{{ substr($i->created_at,0,10) }}</span>
                            </div>
                            <div class="m-t-10 fs-16 text-justify">
                                {{  substr(strip_tags($i->isi),0,350) }} […]
                            </div>
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

            @include('masterPages.right-sidebar')
        </div>
    </div>
</section>
@include('masterPages.footers.footer')
@endsection
