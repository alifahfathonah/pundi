@extends('layouts.app')

@section('content')
    <!-- Header -->
    @include('masterPages.headers.header')

    <div class="container col-md-4 m-t-50">
        <form method="POST" action="{{ route('password.update') }}">
            @csrf
            <input type="hidden" name="token" value="{{ $token }}">
            <p class="text-center fs-32 f-b f-blk">Ganti Password</p>
            <p class="text-center m-t-20 f-blk" style="margin-top: -1%">Masukan Password baru!</p>
        
            <!-- E-mail -->
            <div class="mt-10">
                <input type="email" class="input single-input-primary @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}"
                required="" autocomplete="email"/>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <!-- Password -->
            <div class="mt-10">
                <input type="password" class="input single-input-primary @error('password') is-invalid @enderror" name="password" placeholder="Password" required
                autofocus oninvalid="this.setCustomValidity('Password tidak boleh kosong!')" oninput="setCustomValidity('')"/>
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>Konfirmasi password tidak cocok!</strong>
                    </span>
                @enderror
            </div>

            <!-- Konfirmasi Password -->
            <div class="mt-10">
                <input type="password" class="input single-input-primary" name="password_confirmation" placeholder="Konfirmasi password" required
                oninvalid="this.setCustomValidity('Password tidak boleh kosong!')" oninput="setCustomValidity('')"/>
            </div>    

            <button class="genric-btn primary circle btn-block m-t-20 bdr-20">Ganti Password</button>
        </form>
    </div>
@endsection
