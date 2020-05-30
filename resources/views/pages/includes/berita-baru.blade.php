<section class="whats-news-area pt-40 pb-20">
    <div class="container">
        <div class="row">
        <div class="col-lg-8" style="margin-top: -10px">
            <div class="row d-flex justify-content-between">
                <div class="col-lg-3 col-md-3">
                    <div class="section-tittle mb-30">
                        <div style="margin-bottom: -15px">
                            <i class="fas fa-angle-up fa-lg" style="transform: rotate(-45deg); color: #FC5300 !important"></i>
                        </div>
                        <span class="fs-18 m-l-15" style="color: #FC5300 !important; font-weight: 700 !important "> 
                            BERITA TERBARU
                        </span>
                    </div>
                </div>
                <div class="col-lg-9 col-md-9">
                    <div class="properties__button">
                        <!--Nav Button  -->                                            
                        <nav>                                                                     
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link active" style="font-size: 15px !important" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">All</a>
                                <a class="nav-item nav-link" style="font-size: 15px !important" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Headline</a>
                                <a class="nav-item nav-link" style="font-size: 15px !important" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Indepth</a>
                                <a class="nav-item nav-link" style="font-size: 15px !important" id="nav-last-tab" data-toggle="tab" href="#nav-last" role="tab" aria-controls="nav-contact" aria-selected="false">Kebijakan</a>
                                <a class="nav-item nav-link" style="font-size: 15px !important" id="nav-Sports" data-toggle="tab" href="#nav-nav-Sport" role="tab" aria-controls="nav-contact" aria-selected="false">Serba Serbi</a>
                                <a class="nav-item nav-link" style="font-size: 15px !important" id="nav-technology" data-toggle="tab" href="#nav-techno" role="tab" aria-controls="nav-contact" aria-selected="false">Konsultasi</a>
                            </div>
                        </nav>
                        <!--End Nav Button  -->
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <!-- Nav Card -->
                    <div class="tab-content" id="nav-tabContent">
                        <!-- All -->
                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">           
                            <div class="whats-news-caption">
                                <div class="row">
                                    @foreach ($all->take(4) as $i)
                                        <div class="col-lg-6 col-md-6">
                                            <div class="single-what-news mb-100">
                                                <div class="what-img">
                                                    <img src="{{ asset('post/'. $i->gambar) }}" height="300" alt="">
                                                </div>
                                                <div class="what-cap">
                                                    <span class="color1">{{ $i->kategori->n_kategori }}</span>
                                                    <i class="fas fa-clock fa-xs m-l-10" style="color: gray"></i>
                                                    <span style="margin-left: -10px !important" style="color: gray">{{ substr($i->created_at, 0, 10) }}</span>
                                                    <h4><a href="{{ route('artikel') .'?post='.$i->id}}">{{ $i->judul }}</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <!-- Headline -->
                        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                            <div class="whats-news-caption">
                                <div class="row">
                                    @foreach ($headline->take(4) as $i)
                                        <div class="col-lg-6 col-md-6">
                                            <div class="single-what-news mb-100">
                                                <div class="what-img">
                                                    <img src="{{ asset('post/'.$i->gambar) }}" height="300" alt="">
                                                </div>
                                                <div class="what-cap">
                                                    <span class="color1">{{ $i->kategori->n_kategori }}</span>
                                                    <h4><a href="{{ route('artikel') .'?post='.$i->id}}">{{ $i->judul }}</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <!-- Indepth -->
                        <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                            <div class="whats-news-caption">
                                <div class="row">
                                    @foreach ($indepth as $i)
                                        <div class="col-lg-6 col-md-6">
                                            <div class="single-what-news mb-100">
                                                <div class="what-img">
                                                    <img src="{{ asset('post/'.$i->gambar) }}" height="300" alt="">
                                                </div>
                                                <div class="what-cap">
                                                    <span class="color1">{{ $i->kategori->n_kategori }}</span>
                                                    <h4><a href="{{ route('artikel') .'?post='.$i->id}}">{{ $i->judul }}</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <!-- Kebijakan -->
                        <div class="tab-pane fade" id="nav-last" role="tabpanel" aria-labelledby="nav-last-tab">
                            <div class="whats-news-caption">
                                <div class="row">
                                    @foreach ($kebijakan as $i)
                                        <div class="col-lg-6 col-md-6">
                                            <div class="single-what-news mb-100">
                                                <div class="what-img">
                                                    <img src="{{ asset('post/'.$i->gambar) }}" height="300" alt="">
                                                </div>
                                                <div class="what-cap">
                                                    <span class="color1">{{ $i->kategori->n_kategori }}</span>
                                                    <h4><a href="{{ route('artikel') .'?post='.$i->id}}">{{ $i->judul }}</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <!-- Serba Serbi -->
                        <div class="tab-pane fade" id="nav-nav-Sport" role="tabpanel" aria-labelledby="nav-Sports">
                            <div class="whats-news-caption">
                                <div class="row">
                                    @foreach ($serbaSerbi as $i)
                                        <div class="col-lg-6 col-md-6">
                                            <div class="single-what-news mb-100">
                                                <div class="what-img">
                                                    <img src="{{ asset('post/'.$i->gambar) }}" height="300" alt="">
                                                </div>
                                                <div class="what-cap">
                                                    <span class="color1">{{ $i->kategori->n_kategori }}</span>
                                                    <h4><a href="{{ route('artikel') .'?post='.$i->id}}">{{ $i->judul }}</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <!-- Konsultasi -->
                        <div class="tab-pane fade" id="nav-techno" role="tabpanel" aria-labelledby="nav-technology">
                            <div class="whats-news-caption">
                                <div class="row">
                                    @foreach ($konsultasi as $i)
                                        <div class="col-lg-6 col-md-6">
                                            <div class="single-what-news mb-100">
                                                <div class="what-img">
                                                    <img src="{{ asset('post/'.$i->gambar) }}" height="300" alt="">
                                                </div>
                                                <div class="what-cap">
                                                    <span class="color1">{{ $i->kategori->n_kategori }}</span>
                                                    <h4><a href="{{ route('artikel') .'?post='.$i->id}}">{{ $i->judul }}</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                <!-- End Nav Card -->
                </div>
            </div>
        </div>
        <!-- Right SideBar -->
        @include('masterPages.right-sidebar')
    </div>
</section>