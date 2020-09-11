<div class="blog-author -mt-20 -mb-20">
    <div class="media align-items-center">
        <img class="rounded-circle img-circular" src="{{ config('app.path_url').'ava/'.$artikel->user->photo }}" height="70" width="70" alt="photo">
        <div class="media-body m-l-40 m-t-20">
            <a href="#">
                <span class="fs-15 f-b non-hover f-blk">{{ $artikel->user->name }}</span>
            </a>
            <p>{{ $artikel->user->bio }}</p>
        </div>
    </div>
</div>