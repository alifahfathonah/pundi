@extends('layouts.app')
@section('content')
    <div>
        <!-- Header -->
        @include('masterPages.headers.header')

        <!-- Section 1 : Trending Section -->
        @include('pages.includes.trending')

        <!-- Section 2 : Indepth Of Issues --> 
        @include('pages.includes.indepth-of-issues')

        <!-- Section 3 :  -->
        @include('pages.includes.berita-terbaru')

        <!-- Berita Mingguan 2 -->
        @include('pages.includes.report')
        
        <!-- Foote -->
        @include('masterPages.footers.footer')
    </div>
@endsection