<div class="col-lg-4" >
    <div class="blog_right_sidebar">
        <!-- Berita Terbaru -->
        <aside>
            <div class="news-poster d-none d-lg-block">
                <img class="bdr-5" src="{{ asset('images/iklan/images1.jpg') }}" width="350" alt="iklan">
            </div>
        </aside>
        <!-- Section Berita Terbaru -->
        <div class="">
            <p class="text-center m-t-15 fs-14" style="color: gray;"><i>- Advertisement -</i></p>
            <aside class="single_sidebar_widget popular_post_widget" style="background-color: transparent">
                <!-- title -->
                <div style="margin-bottom: -13px;">
                    <i class="fas fa-angle-up fa-lg" style="transform: rotate(-45deg); color: #FC5300 !important"></i>
                </div>
                <span class="f-b m-l-15 widget_title" style="color: #FC5300 !important;"> 
                    BERITA & ARTIKEL TERBARU
                </span>
                <!-- Content -->
                @foreach ($right_sideBar->take(3) as $i)
                <div class="media post_item m-t-20">
                    <!-- Gambar -->
                    <img class="bdr-5" src="{{ asset('post/'. $i->gambar) }}" width="120" height="90" alt="post">
                    <div class="media-body" style="margin-top: -7px">
                        <!-- Kategori -->
                        <span class="fs-13" style="color: #FC5300 !important; text-transform: uppercase">
                           <a style="color: #FC5300" href="{{ route('sub_kategori','sub_kategori='.$i->sub_kategori->id) }}">{{ $i->sub_kategori->n_sub_kategori }}</a> 
                        </span>
                        <!-- Judul -->
                        <a href="{{ route('artikel') .'?post='.$i->id}}">
                            <h3>{{ $i->judul }}</h3>
                        </a>
                        <!-- Waktu -->
                        <i class="fas fa-clock fa-sm" style="color: gray"></i>
                        <span class="fs-13" style="color: gray">{{ substr($i->created_at, 0, 10) }}</span>
                    </div>
                </div>
                @endforeach
            </aside>
            <aside class="single_sidebar_widget tag_cloud_widget " style="background-color: transparent !important">
                <div style="margin-bottom: -13px;">
                    <i class="fas fa-angle-up fa-lg" style="transform: rotate(-45deg); color: #FC5300 !important"></i>
                </div>
                <span class="f-b m-l-15 widget_title" style="color: #FC5300 !important; text-align: justify !important"> 
                    PUNDI.ID – TAJAM DAN MENCERAHKAN
                </span>
            </aside>
        </div>
    </div>
</div>

<script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/ScrollMagic.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/debug.addIndicators.min.js"></script>
<script>
    const postDetails = document.querySelector(".post-details");
    const postSidebar = document.querySelector(".post-sidebar");
    const postSidebarContent = document.querySelector(".post-sidebar > div");

    const controller = new ScrollMagic.Controller();
    const scene = new ScrollMagic.Scene({
        triggerElement: postSidebar,
        triggerHook: 0,
        duration: getDuration
    }).addTo(controller);

    if (window.matchMedia("(min-width: 768px)").matches) {
        scene.setPin(postSidebar, {pushFollowers: true});
    }

    // in your projects, you might want to debounce resize event for better performance
    window.addEventListener("resize", () => {
        if (window.matchMedia("(min-width: 768px)").matches) {
            scene.setPin(postSidebar, {pushFollowers: false});
        } else {
            scene.removePin(postSidebar, true);
        }
    });

    function getDuration() {
        return postDetails.offsetHeight - postSidebarContent.offsetHeight;
    }
</script>
