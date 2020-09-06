@php
$image = App\Models\Images::select('id', 'footer', 'header', 'poster')->first();
@endphp
<div class="col-lg-4">
    <div class="blog_right_sidebar make-me-sticky ">
        <aside>
            <div class="news-poster d-lg-block">
                <img class="bdr-5" src="{{ config('app.path_url').$image->poster }}" width="350" alt="poster">
            </div>
        </aside>
        <div class="">
            <p class="text-center m-t-15 fs-14 text-grey"><i>- Advertisement -</i></p>
            <aside class="single_sidebar_widget popular_post_widget bg-transparent">
                <div class="-mb-13">
                    <i class="fas fa-angle-up fa-lg arrow"></i>
                </div>
                <span class="f-b m-l-15 widget_title f-orange"> 
                    BERITA & ARTIKEL TERBARU
                </span>
                @foreach ($right_sideBar as $i)
                <div class="media post_item m-t-20">
                    <img style="object-fit: cover; object-position: center" class="bdr-5" src="{{ config('app.path_url').'artikel/'. $i->gambar }}" width="120" height="90" alt="artikel">
                    <div class="media-body">
                        <span class="fs-13 text-uppercase">
                           <a class="f-orange" href="{{ route('sub_kategori','sub_kategori='.$i->sub_kategori->id) }}">{{ $i->sub_kategori->n_sub_kategori }}</a> 
                        </span>
                        <a href="{{ route('artikel') .'?post='.$i->id}}">
                            <h3>{{ $i->judul }}</h3>
                        </a>
                        <i class="fas fa-clock fa-sm text-grey"></i>
                        <span class="fs-13 text-grey ml-1">{{ substr($i->created_at, 0, 10) }}</span>
                    </div>
                </div>
                @endforeach
            </aside>
            <aside class="single_sidebar_widget tag_cloud_widget " style="background-color: transparent !important">
                <div class="-mb-13">
                    <i class="fas fa-angle-up fa-lg arrow"></i>
                </div>
                <span class="f-b m-l-15 widget_title f-orange"> 
                    pundi.or.id – TAJAM DAN MENCERAHKAN
                </span>
                <div class="mt-2 ml-3">
                    <p class="text-black">PUNDI.OR.ID - Tajam dan Mencerahkan</p>
                    <p class="text-black">Jl. Kebun Raya, RT. 18/RW 6, Gg. Melati, Rejosari KG. I, Yogyakarta, 55171</p>
                    <p><a class="text-black" href="{{ route('tentang-kami') }}">Tentang Kami</a></p>
                    <p><a class="text-black" href="{{ route('disclaimer') }}">Disclaimer</a></p>
                    <p><a class="text-black" href="{{ route('redaksi') }}">Redaksi</a></p>
                    <p><a class="text-black" href="{{ route('media-siber') }}">Media Siber</a></p>
                </div>
            </aside>
        </div>
    </div>
</div>
