@extends('layouts.app')
@section('content')
@include('masterPages.headers.header')
<div class="container m-t-15">
    <span class="fa fa-home"></span>
    <a class="m-l-8 m-r-8 f-red fs-14 non-hover f-orange" href="{{ route('/') }}">
        <span>Home</span>
    </a>
    <span class="fa fa-angle-right"></span>
    <a class="m-l-8 m-r-8 f-red fs-14 non-hover f-orange" href="{{ route('sub_kategori','sub_kategori='.$artikel->sub_kategori->id) }}">
        <span>{{ $artikel->sub_kategori->n_sub_kategori }}</span>
    </a>
    <span class="fa fa-angle-right"></span>
    <span class="m-l-8 m-r-8 fs-14 f-orange">{{substr($artikel->judul, 0, 20)}}...</span>
</div>
<section class="blog_area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 posts-list">
                <div class="single-post" style="position: -webkit-sticky">
                    <div class="blog_detail">
                        <h3 class="f-b m-b-20">{{ $artikel->judul }}</h3>
                        <span class="bdr-5 fs-12 f-b sub-kategori-card">
                            <a href="{{ route('sub_kategori','sub_kategori='.$artikel->sub_kategori->id) }}">{{ $artikel->sub_kategori->n_sub_kategori }}</a>
                        </span>
                        <img src="{{ config('app.path_url').'ava/'.$artikel->user->photo }}" class="rounded-circle img-circular m-l-30" height="45" width="45" alt="photo">
                        <span class="fs-14 f-b m-l-10">{{ $artikel->user->name }}</span>
                        <i class="fas fa-clock m-l-15 text-grey"></i>
                        <span class="fs-14">{{ substr($artikel->created_at, 0, 40) }}</span>
                        <i class="fa fa-comments m-l-15 text-grey"></i>
                        <span class="fs-14">{{ $komen->count() }} Komentar</span>
                        <i class="fa fa-eye m-l-15 f-orange"></i>
                        <span class="fs-14">{{ $artikel->artikel_view }}</span>
                        <div class="m-b-25 m-t-30">
                            <img class="img-fluid bdr-5" width="800" height="" src="{{ config('app.path_url').'artikel/'.$artikel->gambar }}" alt="photo">
                        </div>
                        <div class="m-b-10">
                            <a href="http://www.facebook.com/sharer.php?u=http://pundi.or.id/pundi/public/artikel?post={{$artikel->id}}" target="_blank">
                                <img src="https://image.flaticon.com/icons/svg/1384/1384053.svg" width="30" alt="Facebook" />
                            </a>
                            <a href="https://twitter.com/share?url=http://pundi.or.id/pundi/public/artikel?post={{$artikel->id}}&text={{$artikel->judul}}" target="_blank">
                                <img src="https://image.flaticon.com/icons/svg/124/124021.svg" width="30" alt="Twitter" />
                            </a>
                            <a href="whatsapp://send?text={{$artikel->judul}}%0Ahttp://pundi.or.id/pundi/public/artikel?post={{$artikel->id}}" target="blank" data-action="share/whatsapp/share">
                                <img src="https://image.flaticon.com/icons/svg/124/124034.svg" width="30" alt="Twitter" />
                            </a>
                            <a href="#" data-action="share/whatsapp/share">
                                <img src="https://image.flaticon.com/icons/svg/124/124019.svg" width="30" alt="Twitter" />
                            </a>
                        </div>
                        <div id="less" style="font-size: 17px !important; line-height: 33px;">
                            {!! substr($artikel->isi, 0, 500) !!}
                        </div>
                        <div id="less1" class="blur-text"></div>
                        <div id="more" style="display: none">{!! $artikel->isi !!}</div>
                    </div>
                </div>
                <div>
                    <div class="m-t-20 m-b-20 text-center">
                        <button class="genric-btn warning bdr-5 m-r-5" id="tombol_show">Lebih Sedikit</button>
                        <button class="genric-btn primary bdr-5" id="tombol_hide">Baca Selengkapnya</button><br>
                    </div>
                    <span class="f-b f-blk">
                        <label>Editor : </label>
                        <label class="f-orange">
                            <a class="f-orange text-uppercase" href="#">{{ $editor->nama }}</a>
                        </label>    
                    </span>
                </div>
                <div class="m-t-10">
                    <span class="bdr-20 fs-17 tag-card1">
                        Tags :
                    </span>
                    @foreach (explode(',', $artikel->tag) as $tags)
                    <span class="bdr-20 fs-17 m-l-10 tag-card">
                        {{ $tags }}
                    </span>
                    @endforeach
                </div>
                <hr>
                @include('pages.artikel.info-penulis')
                @include('pages.artikel.komen')
                @include('pages.artikel.post-komen')
                <hr>
                @include('pages.artikel.related-artikel')
            </div>
            @include('masterPages.right-sidebar')
        </div>
    </div>
</section>
@include('masterPages.footers.footer')
@endsection
@section('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script>
    $(document).ready(function () {
        $("#tombol_hide").click(function () {
            $("#more").show();
            $("#less").hide();
            $("#less1").hide();
        })

        $("#tombol_show").click(function () {
            $("#more").hide();
            $("#less").show();
            $("#less1").show();
        })
    });
</script>
@endsection
