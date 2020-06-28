<div class="weekly-news-area pt-20">
    <div class="container">
       <div class="weekly-wrapper">
            <!-- section Tittle -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-tittle m-b-20">
                        <div style="margin-bottom: -15px">
                            <i class="fas fa-angle-up fa-lg" style="transform: rotate(-45deg); color: #FEBD01 !important"></i>
                        </div>
                        <span class="fs-18 m-l-15" style="color: #FEBD01 !important; font-weight: 700 !important "> 
                            INDEPT OF ISSUES
                        </span>
                    </div>
                </div>
            </div>
            <!-- Section Content -->
            <div class="row">
                <div class="col-12">
                    <div class="weekly-news-active dot-style d-flex dot-style">
                        @foreach ($indepth_of_issues as $i)
                            <div class="weekly-single">
                                <!-- Gambar -->
                                <div class="weekly-img">
                                    <img src="{{ asset('post/' . $i->gambar) }}" width="" height="350" alt="">
                                </div>
                                <div>
                                    <img src="test.png" alt="">
                                </div>
                                <div class="weekly-caption">
                                    <!-- Kategori -->
                                    <span class="bdr-5" style="background-color: #FEBD01 !important; color: white !important">
                                        <a href="{{ route('sub_kategori','sub_kategori='.$i->sub_kategori->id) }}">{{ $i->sub_kategori->n_sub_kategori }}</a>
                                    </span>
                                    <!-- Judul -->
                                    <h4>
                                        <a href="{{ route('artikel') .'?post='.$i->id}}">
                                            {{ $i->judul }}
                                        </a>
                                    </h4>
                                    <!-- Penulis dan Waktu -->
                                    <div style="color: gray">
                                        <i class="fa fa-user" style="background-color: transparent !important"></i>
                                        <a href="#" class="fs-13 m-l-5" style="background-color: transparent !important; color:gray">
                                            {{ $i->user->name }}
                                        </a>
                                        <i class="fas fa-clock m-l-10" style="background-color: transparent !important"></i>
                                        <a class="fs-13 m-l-5" style="background-color: transparent !important">
                                            {{ substr($i->created_at, 0, 10) }}
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
</div>    