@extends('layouts.app')
@section('content')

<!-- Header -->
<div>
    @include('masterPages.headers.header')
</div>
<!-- Navigation -->
<div class="container m-t-25">
    <span class="fa fa-home"></span>
    <a class="m-l-8 m-r-8 f-red fs-14 non-hover" href="{{ route('/') }}">
        <span>Home</span>
    </a>
    <span class="fa fa-angle-right"></span>
    <a class="m-l-8 m-r-8 f-red fs-14 non-hover" href="{{ route('/') }}">
        <span>{{ $artikel->sub_kategori->n_sub_kategori }}</span>
    </a>
    <span class="fa fa-angle-right"></span>
    <span class="m-l-8 m-r-8 fs-14">{{substr($artikel->judul, 0, 20)}}...</span>
</div>
<section class="blog_area section-padding" style="margin-top: -70px">
    <div class="container">
        <div class="row">
            <!-- Left Sidebar -->
            <div class="col-lg-8 posts-list">
                <!-- Isi Artikel -->
                <div class="single-post">
                    <div class="blog_detail">
                        <h3 class="f-b m-b-20">{{ $artikel->judul }}</h3>
                        <!-- Kategori -->
                        <span class="bdr-5 fs-12 f-b" style="background-color: #FC5300 !important; color: white !important; padding: 3px 10px 3px 10px; text-transform: uppercase">
                            <a  href="">{{ $artikel->sub_kategori->n_sub_kategori }}</a>
                        </span>
                        <!-- Photo User -->
                        <img src="{{ asset('ava/'.$artikel->user->photo) }}" class="rounded-circle m-l-30" width="45" alt="">
                        <!-- Nama Penulis -->
                        <span class="fs-14 f-b m-l-10">{{ $artikel->user->name }}</span>
                        <!-- Waktu -->
                        <i class="fas fa-clock m-l-15" style="color:gray"></i>
                        <span class="fs-14">{{ substr($artikel->created_at, 0, 40) }}</span>
                        <!-- Info Komen -->
                        <i class="fa fa-comments m-l-15" style="color:gray"></i>
                        <span class="fs-14">{{ $komen->count() }} Komen</span>
                        <!-- Info Artikel dilihat -->
                        <i class="fa fa-eye m-l-15" style="color: #FC5300"></i>
                        <span class="f-red fs-14">{{ $artikel->artikel_view }}</span>
                        <!-- Gambar Artikel -->
                        <div class="m-b-30 m-t-30">
                            <img class="img-fluid bdr-5" width="800" height="" src="{{ asset('post/'. $artikel->gambar) }}" alt="">
                        </div>
                        <ul class="blog-info-link mt-3 mb-4">
                            <li><a href="#"><i class="fa fa-user"></i>{{$artikel->kategori->n_kategori }}</a></li>
                            <li><a href="#"><i class="fa fa-comments"></i> {{ $komen->count() }} komen</a></li>
                        </ul>
                        <div class="m-b-10">
                            <!-- Share Facebook -->
                            <a href="http://www.facebook.com/sharer.php?u=http://103.219.112.114/pundi/public/artikel?post={{$artikel->id}}" target="_blank">
                                <img src="https://image.flaticon.com/icons/svg/1384/1384053.svg" width="30" alt="Facebook" />
                            </a>
                            <!-- Share Twitter -->
                            <a href="https://twitter.com/share?url=http://103.219.112.114/pundi/public/artikel?post={{$artikel->id}}&text={{$artikel->judul}}" target="_blank">
                                <img src="https://image.flaticon.com/icons/svg/124/124021.svg" width="30" alt="Twitter" />
                            </a>
                            <!-- Share Whatsapp -->
                            <a href="whatsapp://send?text=The text to share!" data-action="share/whatsapp/share">
                                <img src="https://image.flaticon.com/icons/svg/124/124034.svg" width="30" alt="Twitter" />
                            </a>
                            <!-- Share Line -->
                            <a href="#" data-action="share/whatsapp/share">
                                <img src="https://image.flaticon.com/icons/svg/124/124027.svg" width="30" alt="Twitter" />
                            </a>
                        </div>
                        <!-- Isi Artikel -->
                        <div id="less" style="font-size: 17px !important;">{{ substr(strip_tags($artikel->isi), 0, 800) }} [...]</div>
                        <div id="more" style="display: none">{!! $artikel->isi !!}</div>
                        <!-- Button Hide And Show -->
                        <div class="m-t-20 m-b-20 text-center">
                            <button class="genric-btn danger bdr-5 m-r-5" id="tombol_show">Lebih Sedikit</button>
                            <button class="genric-btn primary bdr-5" id="tombol_hide">Baca Selengkapnya</button><br>
                        </div>
                        <!-- Editor -->
                        <span class="f-b f-blk">
                            <i>Editor: </i>
                            <i class="f-red">Fauzul Adim</i>    
                        </span>
                    </div>
                </div>
                <div class="card m-b-30 m-t-30" style="padding: 50px 20px 50px 20px; text-align: center; background: linear-gradient(to bottom,#FA5C59 ,#FE9B69); color: white">
                    <span>
                        <b style="color: white">PUNDI.ID</b> Dihidupi oleh jaringan penulis dan editor yang memerlukan dukungan untuk bisa menerbitkan tulisan secara berkala. 
                        Agar kami bisa terus memproduksi artikel-artikel keislaman yang mencerahkan, silakan sisihkan sedikit donasi untuk keberlangsungan kami.
                    </span>
                    <span class="m-t-30">
                        Transfer Donasi ke
                        <br> 
                        Mandiri xxxx-xxxx-xxx 
                        <br>
                        A.n Pegiat Pendidikan Indonesia
                    </span>
                </div>
                <span class="bdr-20 fs-17" style="background-color: #FC5300 !important; color: white !important; padding:4px 12px">
                    Tags :
                </span>
                @foreach (explode(',', $artikel->tag) as $tags)
                    <span class="bdr-20 fs-17 m-l-15" style="background-color: white !important; color: #AAAAAA !important; border: 1px solid #AAAAAA !important; padding:4px 12px">
                        {{ $tags }}
                    </span>
                @endforeach
                <hr>
                <!-- Info Penulis -->
                <div class="blog-author" style="margin-top: -20px; margin-bottom: -25px">
                    <div class="media align-items-center">
                        <img class="rounded-circle" src="{{ asset('ava/'. $artikel->user->photo) }}" width="70" alt="">
                        <div class="media-body m-l-40 m-t-20">
                            <a href="#">
                                <span class="fs-15 f-b non-hover f-blk">{{ $artikel->user->name }}</span>
                            </a>
                            <p>{{ $artikel->user->bio }}</p>
                        </div>
                    </div>
                </div>
                <!-- Komen -->
                <div class="comments-area" style="margin-bottom: -50px">
                    <p class="fs-24 f-b f-blk" style="margin-top: -20px">{{ $komen->count() }} komen</p>
                    @foreach ($komen as $i)
                        <div class="comment-list">
                            <div class="single-comment justify-content-between d-flex">
                                <div class="user justify-content-between d-flex">
                                    <div class="thumb">
                                        @if ($i->user_id != null)
                                        <img src="{{ asset('ava/' .$i->user->photo) }}" alt="">
                                        @else
                                        <img src="{{ asset('images/boy.png') }}" alt="">
                                        @endif
                                    </div>
                                    <div class="desc">
                                        <p class="comment">
                                            {{ $i->comment }}
                                        </p>
                                        <div class="d-flex justify-content-between">
                                            <div class="d-flex align-items-center">
                                                <h5>
                                                    <a href="#">{{ $i->nama }}</a>
                                                </h5>
                                                <i class="fas fa-clock fa-xs m-l-20" style="margin-right: -10px; color: gray"></i>
                                                <span class="date" >{{ $i->created_at }}</span>
                                            </div>
                                            <div class="reply-btn">
                                                {{-- <a href="#" class="btn-reply text-uppercase">reply</a> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <!-- Insert Komen -->
                <div class="comment-form">
                    <p class="fs-24 f-b f-blk" style="margin-top: -20px">Tinggalkan Balasan</p>
                    <i>Alamat email Anda tidak akan dipublikasikan. Ruas yang wajib ditandai *</i>
                    <form class="form-contact comment_form m-t-20" action="{{ route('komen.store') }}" method="post">
                        {{ csrf_field() }}
                        <input type="hidden" name="artikel_id" value="{{ $artikel->id }}">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control" type="text" name="nama" id="nama" placeholder="Enter Name *" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control" type="email" name="email" id="email" placeholder="Enter E-mail *" required>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <input class="form-control" type="text" name="website" id="website" placeholder="Enter Website">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <textarea class="form-control w-100" name="comment" id="comment" cols="30" rows="9" placeholder="Enter Comment *" required></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="button button-contactForm btn_1 boxed-btn">Post Komen</button>
                        </div>
                    </form>
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
@section('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script>
    $(document).ready(function () {
        $("#tombol_hide").click(function () {
            $("#more").show();
            $("#less").hide();
        })

        $("#tombol_show").click(function () {
            $("#more").hide();
            $("#less").show();
        })
    });
</script>
@endsection
