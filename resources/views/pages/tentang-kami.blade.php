@extends('layouts.app')
@section('content')
@include('masterPages.headers.header')
<section class="blog_area section-padding">
    <div class="container">
        <div class="row">
            <!-- Left Sidebar -->
            <div class="col-lg-8 mb-5 mb-lg-0">
                <div class="blog_left_sidebar" style="text-align: justify">
                    <div>
                        <p class="f-blk fs-30 f-b">Tentang Kami</p>
                        <div class="m-t-30 m-b-30">
                            <img class="d-block m-auto img-fluid" src="{{ config('app.path_url').'logo.png' }}" width="350" alt="photo">
                            {{--    <p class="text-center m-t-10">pundi.or.id - Pegiat Pendidikan Indonesia</p> --}}
                        </div>
                        <p class="text-black">pundi.or.id merupakan portal berita pendidikan, dikelola oleh yayasan Pegiat Pendidikan Indonesia (PUNDI) yang berkedudukan di Yogyakarta. Surat kabar online, menyajikan berita terkini, trending topik sesuai fakta. Kami hadir untuk menambah referensi bagi masyarakat di Indonesia terhadap informasi yang terkini, akurat, dan teraktual.</p>
                        <p class="text-black">Produk berita yang dikeluarkan pundi.or.id telah melalui proses verifikasi dan kami melaksanakan tugas sesuai Kode Etik Jurnalistik (KEJ) dan dengan asas-asas jurnalistik yang baik. Berada di era arus informasi yang serba cepat, tidak sedikit muncul informasi yang tidak jelas sumber dan faktanya.</p>
                        <p class="text-black">Kami berusaha untuk menjadi sumber informasi pendidikan yang akurat dan sesuai fakta. Memperoleh data yang akurat sangat penting bagi kami sebagai bagian dari tujuan memberikan informasi yang tajam dan mencerahkan.</p>
                        <p class="text-black">Untuk mengetahui Pundi lebih detail silahkan mengunjungi kami di media sosial</p>
                        <span class="text-black">Instagram &nbsp;&nbsp; : pundi@official</span><br> 
                        <span class="text-black">Facebook &nbsp;&nbsp;&nbsp; : Pundi (Official Pundi)</span><br>
                        <span class="text-black">Youtube &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : Official Pundi</span>
                    </div>
                </div>
            </div>
            <!-- Right Sidebar -->
            @include('masterPages.right-sidebar')
        </div>
    </div>
</section>
<!-- Footer -->
@include('masterPages.footers.footer')
@endsection
