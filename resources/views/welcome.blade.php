@extends('layouts.app')
@section('content')
    <div>
        <!-- Header -->
        @include('masterPages.headers.header')

        <!-- Page Trending -->
        @include('pages.includes.trending')

        <!-- Weekely Trending --> 
        @include('pages.includes.berita-mingguan')

        <!-- Berita Terbaru -->
        @include('pages.includes.berita-baru')

        <!-- Berita Mingguan 2 -->
        @include('pages.includes.berita-mingguan2')
        
        <!-- Foote -->
        @include('masterPages.footers.footer')
    </div>
@endsection