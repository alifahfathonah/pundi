<div class="weekly2-news-area mb-30">
    <div class="container">
        <div class="weekly2-wrapper" style="margin-top: -30px !important">
            <!-- Section Tittle -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-tittle mb-30">
                        <div style="margin-bottom: -15px">
                            <i class="fas fa-angle-up fa-lg" style="transform: rotate(-45deg); color: #FEBD01 !important"></i>
                        </div>
                        <span class="fs-18 m-l-15" style="color: #FEBD01 !important; font-weight: 700 !important "> 
                            REPORT
                        </span>
                    </div>
                </div>
            </div>
            <!-- Section Content -->
            <div class="row" style="margin-top: -10px !important">
                <div class="col-12">
                    <div class="weekly2-news-active dot-style d-flex dot-style">
                        @foreach ($report as $i)
                            <div class="weekly2-single">
                                <!-- Gambar -->
                                <div class="weekly2-img">
                                    <img src="{{ asset('post/'. $i->gambar) }}" height="200" alt="">
                                </div>
                                <div class="weekly2-caption">
                                    <!-- Kategori -->
                                    <span style="background-color: #FEBD01; color: white">
                                        <a href="{{ route('sub_kategori','sub_kategori='.$i->sub_kategori->id) }}">{{ $i->kategori->n_kategori }}</a>
                                    </span><br>
                                    <!-- Waktu -->
                                    <i class="fas fa-clock fa-xs" style="color: gray"></i>
                                    <span style="margin-left: -10px !important" style="color: gray">{{ $i->created_at }}</span>
                                    <!-- Judul -->
                                    <h4 style="margin-top: -15px !important"><a href="{{ route('artikel') .'?post='.$i->id}}">{{ $i->judul }}</a></h4>
                                </div>
                            </div> 
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>