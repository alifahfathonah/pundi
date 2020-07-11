@extends('layouts.app')
@section('content')
@include('masterPages.headers.header')
<section class="blog_area section-padding" style="margin-top: -80px">
    <div class="container">
        <div class="row">
            <!-- Left Sidebar -->
            <div class="col-lg-8 mb-5 mb-lg-0">
                <div class="blog_left_sidebar" style="text-align: justify">
                    <div>
                        <p class="f-blk fs-30 f-b">Ketentuan Penulisan</p>
                        <p>
                            <span class="f-red">PUNDI.ID</span> memuat artikel-artikel ringan yang untuk membacanya hanya butuh waktu singkat 
                            sambil beraktivitas lain. Topik yang menjadi fokus kami adalah Islam, sains, dan keindonesiaan.
                        </p>
                        <P>
                            Bagi kamu yang berkeinginan mengirim naskah tulisan, perhatikan ketentuan kepenulisan berikut ini:
                        </P>
                        <ol class="ordered-list">
                            <li>Naskah ditulis dalam 500-1000 kata.</li>
                            <li>Kirim tulisanmu cukup dengan klik link berikut <a class="f-red" href="{{ route('kirim-tulisan') }}">“Kirim Tulisan”</a> atau pilih menu kirim tulisan di bagian header.</li>
                            <li>Bagi Penulis/Kontributor yang belum pernah mendaftar, silahkan daftar dengan klik link berikut <a class="f-red" href="{{ route('register') }}">“Register”</a>.</li>
                            <li>Penulis yang karyanya mencapai 1000 views dalam waktu 2 x 24 jam, bisa menghubungi PUNDI.ID untuk mendapatkan honorarium melalui CP berikut: 0857-8646-1500.</li>
                        </ol>
                    </div>
                    <div class="m-t-30">
                        <p class="f-blk fs-25 f-b">Kriteria kepenulisan</p>
                        <ol class="ordered-list">
                            <li>Semakin rapi Anda menulis dan semakin menarik tema yang Anda bahas, semakin cepat tulisan Anda diterbitkan.</li>
                            <li>Penulis wajib menggunakan nama lengkap (tidak boleh nama samaran) dan foto profil pribadi. Serta menyantumkan keterangan biodata yang jelas.</li>
                            <li>Tulisan harus memperhatikan tata-bahasa standar, dari soal tanda-baca, huruf besar-huruf-kecil, dan penggunaan transliterasi yang benar. Kata-kata asing umumnya dibuat miring (italyc).</li>
                            <li>Panjang setiap paragraf/alinea adalah antara 200 hingga 300 karakter. Paragraf/alinea yang lebih dari 300 karakter akan terlihat sangat panjang pada layar HP/ponsel.</li>
                            <li>Jangan menggunakan judul dengan huruf besar semua. Huruf besar hanya pada awal kata saja.</li>
                            <li>Jangan tulis judul dua kali. Judul cukup ditulis di kolom yang tersedia.</li>
                            <li>Setiap tulisan harus disertakan foto/gambar yang standar, yakni sebesar 450 piksel (atau maksimal 730X489) dengan menuliskan sumber gambar/foto tersebut diambil.</li>
                            <li>Pilih kategori tulisan sesuai dengan tema yang Anda tulis.</li>
                            <li>Penulis dilarang mengirimkan artikel yang pernah diterbitkan di media lain, baik media daring atau cetak tanpa sepengetahuan tim redaksi PUNDI.ID. Penulis juga dilarang mengirim satu tulisan pada saat bersamaan ke media lain.</li>
                        </ol>
                    </div>
                    <div class="m-t-30">
                        <p class="f-blk fs-25 f-b">Disclaimer</p>
                        <ol class="ordered-list">
                            <li>Hak cipta setiap karya yang telah dimuat di PUNDI.ID berada pada <b>penulis/kontributor</b>. Artinya PUNDI.ID hanya memiliki hak untuk mempublikasikan saja.</li>
                            <li>Redaksi berhak menolak/tidak menerbitkan tulisan yang telah dikirimkan. Jika dalam <b>tiga hari tulisan tidak terbit</b> di PUNDI.ID, maka secara <b>otomatis ditolak</b>.</li>
                            <li><b>Redaksi berhak menyunting tulisan</b> dari penulis, seperti mengubah judul dan isi naskah tanpa mengubah substansinya, atau menghilangkan segala isi unggahan pengguna yang melanggar aturan hukum sebagaimana diatur oleh Pedoman Pemberitaan Media Siber. Penyebaran karya PUNDI.ID di tempat lain diperkenankan sejauh menyebut nama penulis.</li>
                            <li>Penyebaran karya PUNDI.ID di tempat lain diperkenankan sejauh menyebut nama penulis dan sumber PUNDI.ID, serta minimal <b>dua hari</b> setelah ditayangkan di PUNDI.</li>
                            <li>Pihak yang merasa dirugikan oleh artikel-artikel yang dipublish di PUNDI.ID bisa melayangkan protes melalui email <b>redaksi@pundi.id</b>.</li>
                        </ol>
                    </div>
                </div>
            </div>
            <!-- Right Sidebar -->
            @include('masterPages.right-sidebar')
        </div>
    </div>
</section>
@include('masterPages.footers.footer')
@endsection
