{{-- @extends('layouts.app')

@section('content')
    <!-- Header -->
    @include('masterPages.headers.header')

    <div class="container col-md-4 m-t-50">
        <!-- Notif sukses -->
        @if (session('status'))
            <div class="alert bdr-20 alert-success" style="padding: 0.5px" role="alert">
                <p class="text-center m-t-20">
                    Cek email Anda untuk mengganti password.
                </p>
            </div>
        @endif
        <form action="{{ route('password.email') }}" method="POST">
            @csrf
            <p class="text-center fs-32 f-b f-blk">Lupa Password</p>
            <p class="text-center m-t-20 f-blk" style="margin-top: -1%">Masukan E-mail untuk mengganti password</p>
        
            <!-- E-mail -->
            <div class="mt-10">
                <input type="email" class="input single-input-primary @error('email') is-invalid @enderror" name="email" required="" autofocus 
                placeholder="E-mail" oninvalid="this.setCustomValidity('E-mail tidak boleh kosong!')" oninput="setCustomValidity('')"/>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>E-mail belum terdaftar</strong>
                    </span>
                @enderror
            </div>

            <button class="genric-btn primary circle btn-block m-t-20 bdr-20">Kirim</button>
        </form>
    </div>
@endsection --}}


@extends('layouts.app')

@section('content')
<!-- Header -->
@include('masterPages.headers.header')
<section class="blog_area section-padding" style="margin-top: -80px">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mb-5 mb-lg-0">
                <div class="blog_left_sidebar">
                   
                    <!-- Notif sukses -->
                    @if (session('status'))
                        <div class="alert bdr-20 alert-success" style="padding: 0.5px" role="alert">
                            <p class="text-center m-t-20">
                                Cek email Anda untuk mengganti password.
                            </p>
                        </div>
                    @endif
                    <form action="{{ route('password.email') }}" method="POST">
                        @csrf
                        <p class="text-center fs-30 f-b f-blk">Lupa Password</p>
                        <p class="text-center m-t-20 f-blk m-b-30" style="margin-top: -1%">Masukan E-mail untuk mengganti password</p>
                    
                        <!-- E-mail -->
                        <div class="mt-10 form-group row">
                            <label class="col-sm-2 f-b col-form-label" for="">EMAIL</label>
                            <div class="col-sm-10">
                                <input type="email" class="input single-input-primary @error('email') is-invalid @enderror" name="email" required="" autofocus oninvalid="this.setCustomValidity('E-mail tidak boleh kosong!')" oninput="setCustomValidity('')"/>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>E-mail belum terdaftar</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-2"></div>
                            <div class="col-sm-10">
                                <button class="genric-btn primary bdr-5">Kirim</button>
                            </div>
                        </div>
                        <hr>
                    </form>

                </div>
            </div>
            <!-- sideBar -->
            @include('masterPages.right-sidebar')
        </div>
    </div>
</section>
<!-- Footer -->
@include('masterPages.footers.footer')
@endsection
