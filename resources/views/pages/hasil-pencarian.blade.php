@extends('layouts.app')
@section('content')
@include('masterPages.headers.header')
<section class="blog_area section-padding" style="margin-top: -80px">
    <div class="container">
        <div class="row">
            <!-- Left Sidebar -->
            <div class="col-lg-8 mb-5 mb-lg-0">
                <div class="blog_left_sidebar" >
                    <div class="">
                        <p class="f-blk fs-30 f-b m-b-40">Hasil Pencarian Untuk: {{ $hasil_search }}</p>
                        @forelse ($artikel as $i)
                        <div class="row m-b-50">
                            <!-- Gambar -->
                            <div class="col-sm-6">
                                <img class="bdr-5 m-b-10" src="{{ asset('post/'.$i->gambar) }}" width="350" alt="">
                            </div>
                            <!-- Kategori -->
                            <div class="col-sm-6">
                                <span class="bdr-5 fs-11 f-b" style="background-color: #FEBD01 !important; color: white !important; padding: 3px 10px 3px 10px; text-transform: uppercase">
                                    <a href="{{ route('sub_kategori','sub_kategori='.$i->sub_kategori->id) }}">{{ $i->sub_kategori->n_sub_kategori}}</a>
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
                        <div style="height: 100px; width: 100px; position: absolute; margin-left: -50px; left: 50%;">
                            {{ $artikel->links() }}
                        </div>
                        @empty
                        <p class="f-blk fs-30 f-b">Tidak Ditemukan !</p>
                        <span>Sepertinya tidak ada yang ditemukan di sini. Mungkin coba cari lagi ?</span>
                        <form class="form-row d-flex justify-content-center md-form form-sm mt-4" action="{{ route('hasil-pencarian') }}" method="GET">
                            <div class="input-group input-group-lg">
                                <input type="text" class="single-input-primary2" name="hasil_search" style="width: 80%"  placeholder="Search Keyword">
                                <div class="input-group-prepend" style="background: #FEBD01;">
                                    <button type="submit" style="border: none; background: #FEBD01; width: 50px">
                                        <i class="fa fa-search" style="color: white"></i> 
                                    </button>
                                </div>
                            </div>
                        </form>
                        @endforelse
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
