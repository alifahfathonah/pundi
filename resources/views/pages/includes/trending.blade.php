<div class="trending-area fix">
    <div class="container">
        <div class="trending-main">
            <div class="row" style="margin-top: 40px">
                <div class="col-lg-8">
                    <!-- Trending Top -->
                    <div class="trending-top mb-30">
                        <div class="trend-top-img">
                            <input type="hidden" value="{{ $trending_top->id }}" name="id">
                            <img src="{{ asset('post/' . $trending_top->gambar) }}" alt="">
                            <div class="trend-top-cap">
                                <!-- Kategori -->
                                <span class="bdr-5" style="background-color: #FC5300 !important; color: white !important">
                                    {{ $trending_top->sub_kategori->n_sub_kategori }}
                                </span>
                                <!-- Judul -->
                                <h2>
                                    <a href="{{ route('artikel') .'?post='.$trending_top->id}}">
                                        {{ $trending_top->judul }}
                                    </a>
                                </h2>
                                <!-- Penulis -->
                                <i class="fa fa-user" style="background-color: transparent !important; color: white"></i>
                                <a href="#" class="f-b fs-13 m-l-5" style="background-color: transparent !important; color: white">
                                    {{ $trending_top->user->name }}
                                </a>
                                <!-- Waktu -->
                                <i class="fas fa-clock m-l-25" style="background-color: transparent !important; color: white"></i>
                                <a class="f-b fs-13 m-l-5" style="background-color: transparent !important; color: white">
                                    {{ $trending_top->created_at }}
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
                                        <div class="trend-bottom-img mb-30">
                                            <img src="{{ asset('post/'. $i->gambar) }}" height="150" alt="">
                                        </div>
                                        <div class="trend-bottom-cap" style="margin-top: -20px">
                                            <p class="fs-13" style="color: #FC5300 !important; text-transform: uppercase">
                                                {{ $i->kategori->n_kategori }}
                                            </p>
                                            <h4 style="font-size: 15px !important; margin-top: -10px">
                                                <a href="{{ route('artikel') .'?post='.$i->id}}">
                                                    {{ $i->judul }}
                                                </a>
                                            </h4>
                                            <div style="color: gray; margin-left: -25px">
                                            <i class="fas fa-clock fa-xs m-l-25" style="background-color: transparent !important"></i>
                                            <a class="fs-13 m-l-5" style="background-color: transparent !important">
                                                {{substr($trending_top->created_at, 0, 10)}}
                                            </a>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <!-- Riht content -->
                <div class="col-lg-4">
                    @foreach ($trending_right->take(5) as $i)
                    <div class="trand-right-single d-flex">
                        <div class="trand-right-img">
                            <img src="{{ asset('post/'. $i->gambar) }}" width="150" height="100" alt="">
                        </div>
                        <div class="trand-right-cap" style="margin-top: -8px">
                            <p class="fs-13" style="color: #FC5300 !important; text-transform: uppercase">
                                {{ $i->kategori->n_kategori }}
                            </p>
                            <h4 style="font-size: 15px !important; margin-top: -10px">
                                <a href="{{ route('artikel') .'?post='.$i->id}}">
                                    {{ $i->judul }}
                                </a>
                            </h4>
                            <div style="color: gray; margin-left: -25px">
                                <i class="fas fa-clock fa-xs m-l-25" style="background-color: transparent !important"></i>
                                <a class="fs-13 m-l-5" style="background-color: transparent !important">
                                    {{substr($trending_top->created_at, 0, 10)}}
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