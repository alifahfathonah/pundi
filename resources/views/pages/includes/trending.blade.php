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
                                    <span class="bdr-5" style="background-color: #FC5300 !important; color: white !important">{{ $trending_top->kategori->n_kategori }}</span>
                                    <h2>
                                        <a href="{{ route('artikel') .'?post='.$trending_top->id}}">
                                            {{ $trending_top->judul }}
                                        </a>
                                    </h2>
                                    <i class="fa fa-user" style="background-color: transparent !important; color: white"></i>
                                    <a href="#" class="f-b fs-13 m-l-5" style="background-color: transparent !important; color: white">
                                        {{ $trending_top->user->name }}
                                    </a>
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
                            @foreach ($get_artikel->take(3) as $i)
                                <div class="col-lg-4">
                                    <div class="single-bottom mb-35">
                                        <div class="trend-bottom-img mb-30">
                                            <img src="{{ asset('post/'. $i->gambar) }}" alt="">
                                        </div>
                                        <div class="trend-bottom-cap">
                                            <span class="bdr-5" style="background-color: #FC5300 !important; color: white !important">{{ $i->kategori->n_kategori }}</span>
                                            <h4>
                                                <a href="{{ route('artikel') .'?post='.$i->id}}">
                                                    {{ $i->judul }}
                                                </a>
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <!-- Riht content -->
                <div class="col-lg-4">
                    @foreach ($get_artikel->take(5) as $i)
                    <div class="trand-right-single d-flex">
                        <div class="trand-right-img">
                            <img src="{{ asset('post/'. $i->gambar) }}" width="150" height="100" alt="">
                        </div>
                        <div class="trand-right-cap">
                            <span class="bdr-5" style="background-color: #FC5300 !important; color: white !important">{{ $i->kategori->n_kategori }}</span>
                            <h4>
                                <a href="{{ route('artikel') .'?post='.$i->id}}">
                                    {{ $i->judul }}
                                </a>
                            </h4>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>