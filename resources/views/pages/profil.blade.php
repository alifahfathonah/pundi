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
                        <p class="f-blk fs-30 f-b">Dashboard</p>
                        <p class="f-blk fs-25 f-b m-t-50">{{ Auth::user()->name }}'s Dashboard </p>
                        <span>You have created {{ $post->count() }} (Pos)</span>
                    </div>
                    <!-- Post -->
                    <div class="card p-2 m-t-10" style="background-color: #FCF8E3; border-color: #8A6D3B; color: #9C6D76">
                        <?php $no = 0;?>
                        @foreach ($post as $i)
                        <?php $no++ ;?>
                            <div class="row">
                                <div class="col-auto">
                                    <span>{{ $no }}</span>
                                </div>
                                <div class="col-9">
                                    <a class="fs-13" href="{{ route('artikel') .'?post='.$i->id}}" style="color: #9C6D76; margin-left: 0px">{{ $i->judul }}</a>
                                </div>
                                <div class="col">
                                    <a class="fs-13" href="#" style="color: #9C6D76"">{{ $i->kategori->n_kategori}}</a>
                                </div>
                            </div> 
                        @endforeach
                    </div>
                    <!-- Author info -->
                    <div class="card m-t-20">
                        <p class="card-header f-blk fs-25 f-b">Author Info</p>
                        <div class="p-2 m-l-10">
                            <div class="row">
                                <div class="col-sm-1">
                                    <img class="rounded-circle" src="{{ asset('ava/' . Auth::user()->photo) }}" width="45" alt="">
                                </div>
                                <div class="col-sm-11">
                                    <span class="m-t- f-blk f-b fs-20">{{ Auth::user()->name }}</span>
                                    <i type="button" class="fa fa-caret-down" data-toggle="dropdown"></i>
                                    <!-- DropDown -->
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item fs-15" href="{{ route('/') }}">Edit Profil</a>
                                        <a class="dropdown-item fs-15" href="{{ route('kirim-tulisan') }}">Kirim Tulisan</a>
                                        <a class="dropdown-item fs-15" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                            Log Out
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="m-t-10">
                                <!-- Bio -->
                                <p class="f-blk">{{ Auth::user()->bio }}</p>
                                <!-- Email -->
                                <i class="fas fa-envelope m-r-10 m-b-10"></i>
                                <span>{{ Auth::user()->email }}</span><br>
                                  <!-- Nomor HP -->
                                <i class="fas fa-phone m-r-10"></i>
                                <span>{{ Auth::user()->nomor_hp }}</span><br>
                                <!-- Facebook -->
                                <i class="fa fa-facebook-square m-r-10"></i>
                                <a class="f-blk" href="https://web.facebook.com/{{ Auth::user()->facebook }}" target="blank">{{ Auth::user()->facebook }}</a><br>
                                <!-- Twitter -->
                                <i class="fa fa-twitter m-r-10"></i>
                                <a class="f-blk" href="https://twitter.com/{{Auth::user()->twitter}}" target="blank">{{ Auth::user()->twitter }}</a><br>
                                <!-- Instagram -->
                                <i class="fa fa-instagram m-r-10"></i>
                                <a class="f-blk" href="https://www.instagram.com/{{ Auth::user()->instagram }}" target="blank">{{ Auth::user()->instagram }}</a>
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
