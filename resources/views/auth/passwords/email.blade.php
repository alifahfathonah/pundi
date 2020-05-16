@extends('layouts.app')

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
@endsection
