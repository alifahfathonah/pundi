@extends('layouts.app')
@section('content')

<!-- Header -->
<div>
    @include('masterPages.headers.header')
</div>
<!-- Navigation -->
<div class="container m-t-25">
    <span class="fa fa-home"></span>
    <a class="m-l-8 m-r-8 f-red fs-14 non-hover" href="{{ route('/') }}">
        <span>Home</span>
    </a>
    <span class="fa fa-angle-right"></span>
    <a class="m-l-8 m-r-8 f-red fs-14 non-hover" href="{{ route('/') }}">
        <span>{{ $artikel->kategori->n_kategori }}</span>
    </a>
    <span class="fa fa-angle-right"></span>
    <span class="m-l-8 m-r-8 fs-14">{{substr($artikel->judul, 0, 20)}}...</span>
</div>
<section class="blog_area section-padding" style="margin-top: -70px">
    <div class="container">
        <div class="row">
            <!-- Left Sidebar -->
            <div class="col-lg-8 posts-list">
                <!-- Isi Artikel -->
                <div class="single-post">
                    <div class="blog_detail">
                        <h3 class="f-b m-b-20">{{ $artikel->judul }}</h3>
                        <span class="bdr-5 fs-12 f-b" style="background-color: #FC5300 !important; color: white !important; padding: 7px; text-transform: uppercase">
                            {{ $artikel->kategori->n_kategori }}
                        </span>
                        <img src="{{ asset('images/boy.png') }}" class="rounded-circle m-l-30" width="45" alt="">
                        <span class="fs-14 f-b m-l-10">{{ $artikel->user->name }}</span>
                        <span class="fas fa-clock m-l-15" style="color:gray"></span>
                        <span class="fs-14">{{ substr($artikel->created_at, 0, 40) }}</span>
                        <span class="fa fa-comments m-l-15" style="color:gray"></span>
                        <span class="fs-14">0 comments</span>
                        <span class="fa fa-eye m-l-15" style="color: #FC5300"></span>
                        <span class="f-red fs-14">{{ $artikel->artikel_view }}</span>
                        <div class="m-b-30 m-t-30">
                            <img class="img-fluid bdr-5" width="800" height="" src="{{ asset('post/'. $artikel->gambar) }}" alt="">
                        </div>
                        <ul class="blog-info-link mt-3 mb-4">
                            <li><a href="#"><i class="fa fa-user"></i>{{$artikel->kategori->n_kategori }}</a></li>
                            <li><a href="#"><i class="fa fa-comments"></i> 03 Comments</a></li>
                        </ul>
                        <div>
                            {!! $artikel->isi !!}
                        </div>
                        <span class="f-b f-blk">
                            <i>Editor: </i>
                            <i class="f-red">Fauzul Adim</i>    
                        </span>
                    </div>
                </div>
                <div class="card m-b-30 m-t-30" style="padding: 50px 20px 50px 20px; text-align: center; background: linear-gradient(to bottom,#FA5C59 ,#FE9B69); color: white">
                    <span>
                        <b style="color: white">PUNDI.ID</b> Dihidupi oleh jaringan penulis dan editor yang memerlukan dukungan untuk bisa menerbitkan tulisan secara berkala. 
                        Agar kami bisa terus memproduksi artikel-artikel keislaman yang mencerahkan, silakan sisihkan sedikit donasi untuk keberlangsungan kami.
                    </span>
                    <span class="m-t-30">
                        Transfer Donasi ke
                        <br> 
                        Mandiri xxxx-xxxx-xxx 
                        <br>
                        A.n Pegiat Pendidikan Indonesia
                    </span>
                </div>
                <span class="bdr-20 fs-17" style="background-color: #FC5300 !important; color: white !important; padding:4px 12px">
                    Tags :
                </span>
                @foreach (explode(',', $artikel->tag) as $tags)
                    <span class="bdr-20 fs-17 m-l-15" style="background-color: white !important; color: #AAAAAA !important; border: 1px solid #AAAAAA !important; padding:4px 12px">
                        {{ $tags }}
                    </span>
                @endforeach
                <hr>
                <!-- Info Penulis -->
                <div class="blog-author" style="margin-top: -20px; margin-bottom: -25px">
                    <div class="media align-items-center">
                        <img class="rounded-circle" src="{{ asset('ava/'. $artikel->user->photo) }}" width="70" alt="">
                        <div class="media-body m-l-40 m-t-20">
                            <a href="#">
                                <span class="fs-15 f-b non-hover f-blk">{{ $artikel->user->name }}</span>
                            </a>
                            <p>{{ $artikel->user->bio }}</p>
                        </div>
                    </div>
                </div>
                <!-- Komen -->
                <div class="comments-area" style="margin-bottom: -50px">
                    <p class="fs-24 f-b f-blk" style="margin-top: -20px">1 Komen</p>
                    <div class="comment-list">
                        <div class="single-comment justify-content-between d-flex">
                            <div class="user justify-content-between d-flex">
                                <div class="thumb">
                                    <img src="assets/img/comment/comment_1.png" alt="">
                                </div>
                                <div class="desc">
                                    <p class="comment">
                                        Multiply sea night grass fourth day sea lesser rule open subdue female fill
                                        which them
                                        Blessed, give fill lesser bearing multiply sea night grass fourth day sea lesser
                                    </p>
                                    <div class="d-flex justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <h5>
                                                <a href="#">Emilly Blunt</a>
                                            </h5>
                                            <p class="date">December 4, 2017 at 3:12 pm </p>
                                        </div>
                                        <div class="reply-btn">
                                            <a href="#" class="btn-reply text-uppercase">reply</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="comment-form">
                    <p class="fs-24 f-b f-blk" style="margin-top: -20px">Tinggalkan Balasan</p>
                    <i>Alamat email Anda tidak akan dipublikasikan. Ruas yang wajib ditandai *</i>
                    <form class="form-contact comment_form m-t-20" action="#" id="commentForm">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control" name="name" id="name" type="text" placeholder="Enter Name *">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control" name="email" id="email" type="email" placeholder="Enter E-mail *">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <input class="form-control" name="website" id="website" type="text" placeholder="Enter Website">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <textarea class="form-control w-100" name="comment" id="comment" cols="30" rows="9" placeholder="Enter Comment *"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="button button-contactForm btn_1 boxed-btn">Post Komen</button>
                        </div>
                    </form>
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
