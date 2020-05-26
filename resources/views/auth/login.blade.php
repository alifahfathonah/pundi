@extends('layouts.app')

@section('content')
    <!-- Header -->   
    @include('masterPages.headers.header')

    <div class="container col-md-4 m-t-50">
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <p class="text-center fs-32 f-b f-blk">Login</p>
            <p class="text-center m-t-20 f-blk" style="margin-top: -1%">Masukan E-mail dan Password</p>

            <!-- E-mail -->
            <div class="mt-10">
                <input type="email" class="input single-input-primary @error('email') is-invalid @enderror" name="email" placeholder="E-mail"/>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>Email / Password salah</strong>
                    </span>
                @enderror
            </div>

            <!-- Password -->
            <div class="mt-10">
                <input type="password" class="input single-input-primary @error('password') is-invalid @enderror" name="password" placeholder="Password"/>
                <a href="{{ route('password.request') }}">
                    <p class="f-blk text-right fs-15 f-red" style="margin-bottom: -1%">Lupa password?</p>
                </a>
            </div>

            <button class="genric-btn primary circle btn-block m-t-20 bdr-20" type="submit" value="Log in">Login <i class="fa fa-arrow-right"></i></button>
            <hr>
            <p class="text-center f-blk" style="margin-top: -2%">Belum punya akun? 
                <a href="{{ route('register') }}">
                    <u class="f-red">Daftar sekarang!</u>
                </a>
            </p>
        </form>
    </div>
@endsection
