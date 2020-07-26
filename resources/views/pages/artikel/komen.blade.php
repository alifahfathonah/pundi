<div class="comments-area -mb-50">
    <p class="fs-24 f-b f-blk -mt-30">{{ $komen->count() }} komentar</p>
    @foreach ($komen as $i)
    <div class="comment-list">
        <div class="single-comment justify-content-between d-flex">
            <div class="user justify-content-between d-flex">
                <div class="thumb">
                    @if ($i->user_id != null)
                    <img src="{{ asset('ava/' .$i->user->photo) }}" alt="photo">
                    @else
                    <img src="{{ config('app.path_url').'ava/user.png' }}" alt="photo">
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
                            <i class="fas fa-clock fa-xs m-l-20 text-grey -mr-10"></i>
                            <span class="date" >{{ $i->created_at }}</span>
                        </div>
                        <div class="reply-btn">
                            <a href="#" class="btn-reply text-uppercase">reply</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>