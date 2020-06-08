<div class="trending-area fix">
    <div class="container">
        <div class="trending-main">
            <div class="row" style="margin-top: 40px">
                <div class="col-lg-8">
                    <!-- Trending Top -->
                    <div class="trending-top mb-30">
                        <div class="">
                            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" style="margin-top: -18px !important">
                                <ol class="carousel-indicators m-b-1">
                                    @foreach( $trending_top as $i )
                                        <li data-target="#carouselExampleIndicators" data-slide-to="{{ $loop->index }}" class="{{ $loop->first ? 'active' : '' }}"></li>
                                    @endforeach
                                </ol>
                                <div class="carousel-inner" role="listbox">
                                    @foreach( $trending_top as $i )
                                        <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                                            <img class="bdr-5" style="width: 100%;" src="{{ asset('post/' . $i->gambar  ) }}" height="520" width="730">
                                            <div class="carousel-caption">
                                                <div class="">
                                                    <!-- Kategori -->
                                                    <span class="bdr-5 p-2 capital f-b" style="background-color: #FC5300 !important; color: white !important; font-size: 13px !important">
                                                        <a href="{{ route('sub_kategori','sub_kategori='.$i->sub_kategori->id) }}">{{ $i->sub_kategori->n_sub_kategori }}</a>
                                                    </span>
                                                    <!-- Judul -->
                                                    <h2 class="m-t-20">
                                                        <a class="f-b text-white" href="{{ route('artikel') .'?post='.$i->id}}">
                                                            {{ $i->judul }}
                                                        </a>
                                                    </h2>
                                                    <!-- Penulis -->
                                                    <i class="fa fa-user" style="background-color: transparent !important; color: white"></i>
                                                    <a href="#" class="f-b fs-13 m-l-5" style="background-color: transparent !important; color: white">
                                                        {{ $i->user->name }}
                                                    </a>
                                                    <!-- Waktu -->
                                                    <i class="fas fa-clock m-l-25" style="background-color: transparent !important; color: white"></i>
                                                    <a class="f-b fs-13 m-l-5" style="background-color: transparent !important; color: white">
                                                        {{ $i->created_at }}
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- Trending Bottom -->
                    <div class="trending-bottom">
                        <div class="row">
                            @foreach ($trending_bottom as $i)
                                <div class="col-lg-4">
                                    <div class="single-bottom mb-35">
                                        <!-- Gambar -->
                                        <div class="trend-bottom-img mb-30">
                                            <img src="{{ asset('post/'. $i->gambar) }}" width="223" height="159" alt="">
                                        </div>
                                        <div class="trend-bottom-cap" style="margin-top: -20px">
                                            <!-- Kategori -->
                                            <p class="fs-13 capital">
                                                <a style="color: #FC5300 !important" href="{{ route('sub_kategori','sub_kategori='.$i->sub_kategori->id) }}">{{ $i->sub_kategori->n_sub_kategori }}</a>
                                            </p>
                                            <!-- Judul -->
                                            <h4 style="font-size: 15px !important; margin-top: -10px">
                                                <a href="{{ route('artikel') .'?post='.$i->id}}">
                                                    {{ $i->judul }}
                                                </a>
                                            </h4>
                                            <!-- Waktu -->
                                            <div style="color: gray; margin-left: -25px">
                                                <i class="fas fa-clock fa-xs m-l-25" style="background-color: transparent !important"></i>
                                                <a class="fs-13 m-l-5" style="background-color: transparent !important">
                                                    {{substr($i->created_at, 0, 10)}}
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <!-- Trending Right -->
                <div class="col-lg-4">
                    @foreach ($trending_right as $i)
                    <div class="trand-right-single d-flex">
                        <!-- Gambar -->
                        <div class="trand-right-img">
                            <img src="{{ asset('post/'. $i->gambar) }}" width="150" height="100" alt="">
                        </div>
                        <div class="trand-right-cap" style="margin-top: -8px">
                             <!-- Kategori -->
                            <p class="fs-13 capital">
                                <a style="color: #FC5300 !important" href="{{ route('sub_kategori','sub_kategori='.$i->sub_kategori->id) }}">{{ $i->sub_kategori->n_sub_kategori }}</a>
                            </p>
                            <!-- Judul -->
                            <h4 style="font-size: 15px !important; margin-top: -10px">
                                <a href="{{ route('artikel') .'?post='.$i->id}}">
                                    {{ $i->judul }}
                                </a>
                            </h4>
                            <!-- Waktu -->
                            <div style="color: gray; margin-left: -25px">
                                <i class="fas fa-clock fa-xs m-l-25" style="background-color: transparent !important"></i>
                                <a class="fs-13 m-l-5" style="background-color: transparent !important">
                                    {{substr($i->created_at, 0, 10)}}
                                </a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>