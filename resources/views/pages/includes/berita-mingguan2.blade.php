<div class="weekly2-news-area  weekly2-pading gray-bg" style="margin-top: -30px !important">
    <div class="container">
        <div class="weekly2-wrapper" style="margin-top: -90px !important">
            <!-- section Tittle -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-tittle mb-30">
                        <div style="margin-bottom: -15px">
                            <i class="fas fa-angle-up fa-lg" style="transform: rotate(-45deg); color: #FC5300 !important"></i>
                        </div>
                        <span class="fs-18 m-l-15" style="color: #FC5300 !important; font-weight: 700 !important "> 
                            REPORT
                        </span>
                    </div>
                </div>
            </div>
            <div class="row" style="margin-top: -10px !important">
                <div class="col-12">
                    <div class="weekly2-news-active dot-style d-flex dot-style">
                        @foreach ($report as $i)
                            <div class="weekly2-single">
                                <div class="weekly2-img">
                                    <img src="{{ asset('post/'. $i->gambar) }}" height="200" alt="">
                                </div>
                                <div class="weekly2-caption">
                                    <span style="background-color: #FC5300; color: white">{{ $i->kategori->n_kategori }}</span><br>
                                    <i class="fas fa-clock fa-xs" style="color: gray"></i>
                                    <span style="margin-left: -10px !important" style="color: gray">{{ $i->created_at }}</span>
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