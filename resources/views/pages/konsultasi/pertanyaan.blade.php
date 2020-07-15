<div class="tab-pane fade show active m-t-40" id="pertanyaan">
    <p class="fs-24 f-b f-blk" style="margin-top: -20px">Kirim Pertanyaan</p>
    @if (Auth::user() == null)
    <i>Alamat email Anda tidak akan dipublikasikan. Ruas yang wajib ditandai *</i>
    @endif
    <form class="form-contact comment_form m-t-20" action="{{ route('konsultasi.pertanyaan_store') }}" method="post">
        {{ csrf_field() }}
        <div class="row">
            @if (Auth::user() == null)
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
            @else
            <input type="hidden" name="nama" value="{{ Auth::user()->username }}">
            <input type="hidden" name="email" value="{{ Auth::user()->email }}">
            @endif
            <div class="col-12">
                <div class="form-group">
                    <textarea class="form-control w-100" name="pertanyaan" id="pertanyaan" cols="10" rows="8" placeholder="Pertanyaan *"></textarea>
                </div>
            </div>
        </div>
        <div class="form-group">
            <button type="submit" class="button button-contact Form btn_1 boxed-btn">Kirim</button>
        </div>
    </form>
</div>