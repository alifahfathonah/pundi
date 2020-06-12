@extends('layouts.app')

@section('content')
<!-- Header -->
@include('masterPages.headers.header')
<section class="blog_area section-padding" style="margin-top: -80px">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mb-5 mb-lg-0">
                <div class="blog_left_sidebar">
                    <div class="container">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <p class="text-center fs-30 f-b f-blk m-b-30">Login</p>
                            <!-- E-mail -->
                            <div class="mt-10 form-group row">
                                <label class="col-sm-2 f-b col-form-label" for="">E-MAIL</label>
                                <div class="col-sm-10">
                                    <input type="email" class="input single-input-primary @error('email') is-invalid @enderror" name="email" placeholder="E-mail"/>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>Email / Password salah</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <!-- Password -->
                            <div class="mt-10 form-group row">
                                <label class="col-sm-2 f-b col-form-label" for="">PASSWORD</label>
                                <div class="col-sm-10">
                                    <input type="password" class="input single-input-primary @error('password') is-invalid @enderror" name="password" placeholder="Password"/>
                                    <a href="{{ route('password.request') }}">
                                        <p class="f-blk text-right fs-15 f-red" style="margin-bottom: -1%">Lupa password?</p>
                                    </a>
                                </div>
                            </div>
                            <!-- Submit -->
                            <div class="row">
                                <div class="col-sm-2"></div>
                                <div class="col-sm-10">
                                    <button class="genric-btn primary bdr-5" type="submit" value="Log in">Login <i class="fa fa-arrow-right"></i></button>
                                </div>
                            </div>
                            <hr>
                            <p class="f-blk" style="margin-top: -2%">Belum punya akun? 
                                <a href="{{ route('register') }}">
                                    <u class="f-orange">Daftar sekarang!</u>
                                </a>
                            </p>
                        </form>
                    </div>
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