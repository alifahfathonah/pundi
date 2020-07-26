<div class="comment-form">
    <p class="fs-24 f-b f-blk -mt-30">Tinggalkan Balasan</p>
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
                    <textarea class="form-control w-100" name="comment" id="comment" cols="30" rows="9" placeholder="Enter Comment *" required></textarea>
                </div>
            </div>
        </div>
        <div class="form-group">
            <button type="submit" class="button button-contactForm btn_1 boxed-btn">Post Komen</button>
        </div>
    </form>
</div>