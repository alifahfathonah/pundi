@extends('layouts.app')

@section('content')
    <!-- Header -->
    @include('masterPages.headers.header')

    <div class="container col-md-4 m-t-50">
        <form action="{{ route('register') }}" method="POST">
            @csrf
            <p class="text-center fs-32 f-b f-blk">Register</p>
            <p class="text-center m-t-20 f-blk" style="margin-top: -1%">Sudah punya akun? 
                <a href="{{ route('login') }}">
                    <u class="f-red">Login!</u>
                </a>
            </p>

            <!-- Name -->
            <div class="mt-10">
                <input type="text" class="input single-input-primary" name="name" placeholder="Nama" required="" autofocus
                oninvalid="this.setCustomValidity('Nama tidak boleh kosong!')" oninput="setCustomValidity('')"/>
            </div>

            <!-- E-mail -->
            <div class="mt-10">
                <input type="email" class="input single-input-primary {{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" placeholder="E-mail" required
                oninvalid="this.setCustomValidity('E-mail tidak boleh kosong!')" oninput="setCustomValidity('')"/>
                @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                        <strong>E-mail sudah pernah terdaftar!</strong>
                    </span>
                @endif
            </div>

            <!-- Password -->
            <div class="mt-10">
                <input type="password" class="input single-input-primary @error('password') is-invalid @enderror" name="password" placeholder="Password" required
                oninvalid="this.setCustomValidity('Password tidak boleh kosong!')" oninput="setCustomValidity('')"/>
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>Konfirmasi password tidak cocok!</strong>
                    </span>
                @enderror
            </div>

            <!-- Konfirmasi Passwrod -->
            <div class="mt-10">
                <input type="password" class="input single-input-primary" name="password_confirmation" placeholder="Konfirmasi password"
                oninvalid="this.setCustomValidity('Password tidak boleh kosong!')" oninput="setCustomValidity('')"/>
            </div>

            <button class="genric-btn primary circle btn-block m-t-20 bdr-20">Register</button>
            <hr>
        </form>
    </div>
@endsection
