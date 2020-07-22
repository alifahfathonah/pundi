<div class="col-lg-4">
    <div class="blog_right_sidebar">
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
                    <img class="bdr-5" src="{{ $path_url.'images/artikel/'. $i->gambar }}" width="120" height="90" alt="artikel">
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
            {{-- <aside class="single_sidebar_widget tag_cloud_widget " style="background-color: transparent !important">
                <div class="-mb-13">
                    <i class="fas fa-angle-up fa-lg arrow"></i>
                </div>
                <span class="f-b m-l-15 widget_title f-orange"> 
                    PUNDI.ID – TAJAM DAN MENCERAHKAN
                </span>
            </aside> --}}
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
