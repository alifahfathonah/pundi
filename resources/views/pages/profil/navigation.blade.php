<div class="mt-5">
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active f-orange" id="home-tab" data-toggle="tab" href="#artikel">Artikel</a>
        </li>
        <li class="nav-item">
            <a class="nav-link f-orange" id="profile-tab" data-toggle="tab" href="#info">Info</a>
        </li>
    </ul>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="artikel" role="tabpanel">
            <ul class="list-group list-group-flush">
                <?php $no = 0;?>
                @foreach ($post->take(10) as $i)
                <?php $no++ ;?>
                <li class="list-group-item">
                    <a class="text-black" style="margin-left: -20px !important" href="{{ route('artikel') .'?post='.$i->id}}">
                    {{ $no }}. &nbsp;{{ $i->judul }}
                    </a>
                </li>
                @endforeach
            </ul>
            @if ($post->count() > 10)
            <span class="bdr-5 fs-11 f-b m-r-10 sub-kategori-card">
                <a class="text-center" href="#">Lihat Semua Artikel</a>
            </span>
            @endif
        </div>
        <div class="tab-pane fade" id="info" role="tabpanel">
            info
        </div>
    </div>
</div>