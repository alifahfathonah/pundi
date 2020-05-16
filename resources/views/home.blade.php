@extends('layouts.app')
@section('content')
    <div>
        <!-- Header -->
        @include('masterPages.headers.header')

        <!-- Page Trending -->
        @include('pages.trending')

        <!-- Weekely Trending --> 
        @include('pages.berita-mingguan')
    </div>
@endsection