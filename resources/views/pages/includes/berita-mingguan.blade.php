<div class="weekly-news-area pt-20">
    <div class="container">
       <div class="weekly-wrapper">
            <!-- section Tittle -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-tittle m-b-20">
                        <div style="margin-bottom: -15px">
                            <i class="fas fa-angle-up fa-lg" style="transform: rotate(-45deg); color: #FC5300 !important"></i>
                        </div>
                        <span class="fs-20 m-l-15" style="color: #FC5300 !important; font-weight: 700 !important "> 
                            INDEPT OF ISSUES
                        </span>
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
                                    <i class="fa fa-user" style="background-color: transparent !important; color: black"></i>
                                    <a href="#" class="f-b fs-13 m-l-5" style="background-color: transparent !important; color: black">
                                        {{ $i->user->name }}
                                    </a>
                                    <i class="fas fa-clock m-l-25" style="background-color: transparent !important; color: black"></i>
                                    <a class="f-b fs-13 m-l-5" style="background-color: transparent !important; color: black">
                                        {{ $i->created_at }}
                                    </a>
                                </div>
                            </div> 
                        @endforeach
                    </div>
                </div>
            </div>
       </div>
    </div>
</div>    