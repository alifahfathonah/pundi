@extends('layouts.app')
@section('content')
@include('masterPages.headers.header')
<section class="blog_area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mb-5 mb-lg-0">
                <div class="blog_left_sidebar">
                    @include('masterPages.alerts')
                    <div>
                        <form action="{{ route('kirim-tulisan.tambah', Auth::user()->id) }}" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            {{ method_field('POST') }}
                            <p class="f-blk fs-30 f-b">Upload Tulisan</p>
                            <div class="m-t-30">
                                <label for="" class="f-b fs-17">JUDUL ARTIKEL<span class="text-danger ml-1">*</span></label>
                                <input type="text" class="input single-input-primary border bdr-5 col-md-12" name="judul" id="judul" value="{{ old('judul') }}" required="" oninvalid="this.setCustomValidity('Judul artikel tidak boleh kosong')" oninput="setCustomValidity('')"/>
                            </div>
                            <div class="m-t-15">
                                <label for="" class="f-b fs-17">KATEGORI<span class="text-danger ml-1">*</span></label><br>
                                <div class="row">
                                    <select name="kategori_id" id="kategori_id" value="{{ old('kategori_id') }}" class="kategori input single-input-primary border select" required="" oninvalid="this.setCustomValidity('Kategori tidak boleh kosong')" oninput="setCustomValidity('')">
                                        <option value="0">Pilih Kategori</option>
                                        @foreach ($kategori as $i)
                                            <option value="{{ $i->id }}" @if ($kategori_id == $i->id) selected="selected"@endif>
                                                {{ $i->n_kategori }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <select name="sub_kategori_id" id="sub_kategori_id" class="kategori1 input single-input-primary border select" required>
                                    </select>
                                </div>
                            </div>
                            <div class="m-t-15">
                                <label for="" class="f-b fs-17">ISI ARTIKEL<span class="text-danger ml-1">*</span></label>
                                @include('masterPages.summernote')
                            </div>
                            <div class="alert alert-dismissible" id="message" role="alert"></div>
                            <div style="margin-top: -20px">
                                <label for="" class="f-b fs-17">GAMBAR UNGGULAN <span class="text-danger ml-1">*</span></label><br>
                                <input type="file" name="gambar" id="file" class="input-file" onchange="tampilkanPreview(this,'preview')">
                                <label for="file" class="genric-btn primary-border bdr-5 js-labelFile">
                                    <i class="icon fa fa-image"></i>
                                    <span class="js-fileName">Pilih File</span>
                                </label>
                                <br>
                                <img width="300" class="rounded img-fluid d-block" id="preview" style="margin-top: 10px"/>
                            </div>
                            <div class="m-t-10">
                                <label for="" class="f-b fs-17">TAGS</label>
                                <input type="text" class="input single-input-primary border bdr-5 col-md-12" value="{{ old('tag') }}" name="tag" id="tag"/>
                                <i class="fs-12 f-red">Pisahkan dengan koma ( , )</i>
                            </div>
                            <button class="genric-btn primary bdr-5 m-t-20 " type="submit"  value="Log in">KirimTulisan</button>
                            <hr>
                        </form>
                    </div>
                </div>
            </div>
            @include('masterPages.right-sidebar')
        </div>
    </div>
</section>
@include('masterPages.footers.footer')
@endsection
@section('script')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<script type="text/javascript">
    // file name preview
    (function () {
        'use strict';
        $('.input-file').each(function () {
            var $input = $(this),
                $label = $input.next('.js-labelFile'),
                labelVal = $label.html();

            $input.on('change', function (element) {
                var fileName = '';
                if (element.target.value) fileName = element.target.value.split('\\').pop();
                fileName ? $label.addClass('has-file').find('.js-fileName').html(fileName) : $label
                    .removeClass('has-file').html(labelVal);
            });
        });
    })();

    // image preview
    function tampilkanPreview(gambar, idpreview) {
        var gb = gambar.files;
        for (var i = 0; i < gb.length; i++) {
            var gbPreview = gb[i];
            var imageType = /image.*/;
            var preview = document.getElementById(idpreview);
            var reader = new FileReader();
            if (gbPreview.type.match(imageType)) {
                preview.file = gbPreview;
                reader.onload = (function (element) {
                    return function (e) {
                        element.src = e.target.result;
                    };
                })(preview);
                reader.readAsDataURL(gbPreview);
            } else {
                Swal.fire(
                    'Tipe file tidak boleh',
                    'Harus format gambar',
                    'error'
                )
            }
        }
    }

    // Sub Kategori
    $(document).ready(function(){
        $('#kategori_id').change(function(){ 
            var id=$(this).val();
            $.ajax({
                url : "{{ route('kirim-tulisan.subKegiatanByKegiatan', ':id') }}".replace(':id', id),
                method : "GET",
                data : {id: id},
                async : true,
                dataType : 'json',
                success: function(data){
                    var html = '';
                    var i;
                    if (data) {
                        $.each(data, function(index, value){
                            html += '<option value='+value.id+'>'+value.n_sub_kategori+'</option>'; 
                        });
                        $('#sub_kategori_id').html(html);
                    } else {
                        $('#sub_kategori_id').html(html);
                    }   
                }
            });
            return false;
        }); 
    });
</script>
@endsection
