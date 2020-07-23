@extends('layouts.app')
@section('content')
@include('masterPages.headers.header')
<section class="blog_area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mb-5 mb-lg-0">
                <div class="blog_left_sidebar">
                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf
                        <input type="hidden" name="token" value="{{ $token }}">
                        <p class="text-center fs-32 f-b f-blk">Ganti Password</p>
                        <p class="text-center m-t-20 f-blk m-b-30">Masukan Password baru!</p>
                        <div class="mt-10 form-group row">
                            <label class="col-sm-4 f-b col-form-label" for="email">EMAIL</label>
                            <div class="col-sm-8">
                                <input type="email" class="input single-input-primary @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}"
                                required="" autocomplete="email"/>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="mt-10 form-group row">
                            <label class="col-sm-4 f-b col-form-label" for="password">PASSWORD</label>
                            <div class="col-sm-8">
                                <input type="password" class="input single-input-primary @error('password') is-invalid @enderror" name="password" placeholder="Password" required autofocus oninvalid="this.setCustomValidity('Password tidak boleh kosong!')" oninput="setCustomValidity('')"/>
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>Konfirmasi password tidak cocok!</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="mt-10 form-group row">
                            <label class="col-sm-4 f-b col-form-label" for="password_confirmation">KONFIRMASI PASSWORD</label>
                            <div class="col-sm-8">
                                <input type="password" class="input single-input-primary" name="password_confirmation" placeholder="Konfirmasi password" required oninvalid="this.setCustomValidity('Password tidak boleh kosong!')" oninput="setCustomValidity('')"/>
                            </div>
                        </div>    
                        <div class="row">
                            <div class="col-sm-4"></div>
                            <div class="col-sm-8">
                                <button class="genric-btn primary m-t-20 bdr-5">Ganti Password</button>
                            </div>
                        </div>
                        <hr>
                    </form>
                </div>
            </div>
            @include('masterPages.right-sidebar')
        </div>
    </div>
</section>
@include('masterPages.footers.footer')
@endsection
