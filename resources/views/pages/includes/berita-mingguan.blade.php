<div class="weekly-news-area pt-25">
    <div class="container">
       <div class="weekly-wrapper">
            <!-- section Tittle -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-tittle mb-30">
                        <h3 style="color: #FC5300 !important; ">INDEPT OF ISSUES</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="weekly-news-active dot-style d-flex dot-style">
                        @foreach ($get_artikel->take(5) as $i)
                            <div class="weekly-single">
                                <div class="weekly-img">
                                    <img src="{{ asset('post/' . $i->gambar) }}" width="" height="300" alt="">
                                </div>
                                <div class="weekly-caption">
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
</div>    