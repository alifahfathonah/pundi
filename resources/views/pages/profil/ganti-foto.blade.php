<div class="modal fade" id="editPhoto" tabindex="-1" role="dialog"aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content text-center">
            <div class="modal-header">
                <h6 class="modal-title">Update Foto Profil</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('edit-profil.update-photo', Auth::user()->id) }}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                {{ method_field('POST') }}
                <div class="mt-3">
                    <img class="rounded-circle" src="{{ config('app.path_url').'ava/'.Auth::user()->photo }}" width="100" alt="photo"> 
                    <div class="mt-3">
                        <input type="hidden" name="id" value="{{ Auth::user()->id }}">
                        <input type="file" name="photo" id="file" class="input-file" value="{{ Auth::user()->photo }} " onchange="tampilkanPreview(this,'preview')">
                        <label for="file" class="genric-btn primary-border bdr-5 js-labelFile">
                            <i class="icon fa fa-image"></i>
                            <span class="js-fileName">Ganti Foto Profil</span>
                        </label>
                        <img width="300" class="rounded img-fluid mx-auto d-block m-t-10 mb-3" id="preview"/>
                        <hr class="m-0">
                        <i class="fs-12 ">Gambar bisa berupa foto (jpg, png, jpeg). Maksimal 1 Mb.</i>
                    </div>   
                </div>
                <div class="modal-footer">
                    <button type="submit" class="genric-btn primary-border bdr-5">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>