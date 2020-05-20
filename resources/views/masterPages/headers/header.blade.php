<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Document</title>

</head>
<body>
    <header>
       <div class="header-area">
            <div class="main-header ">

                <!-- Header Top -->
                <div class="header-top black-bg d-none d-md-block" style=" background: linear-gradient(to right,#F8476C,#FE7D3D);">
                   <div class="container">
                       <div class="col-xl-12">
                            <div class="row d-flex justify-content-between align-items-center">
                                <div class="header-info-left">
                                    <ul>     
                                        <li style="margin-right: -0.5%">
                                            <a id="hari"></a>
                                            ,
                                            <a id="tanggal"></a>
                                            <a id="bulan"></a>
                                            <a id="tahun"></a>
                                        </li>
                                        <span style="border-left: 1px rgb(255, 255, 255) solid; height: 18px; margin-right: 10px; margin-left: 8px"></span>
                                        <li>
                                            <a id="jam"></a>
                                            :
                                            <a id="menit"></a>
                                            :
                                            <a id="detik"></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="header-info-right">
                                    @if (Auth::user() != null)
                                        <div class="main-menu d-none d-md-block">
                                            <nav>                  
                                                <ul>    
                                                    <a href="" style="font-size: 13px;">{{ Auth::user()->name }}</a>
                                                    <li>
                                                        <a href="#" style="margin-left: -15px;margin-right: -5px">
                                                            <img width="30px" height="30px" src="{{ asset('images\boy.png') }}" alt="..." class="rounded-circle">
                                                        </a>
                                                        <ul class="submenu">
                                                            <li><a href="elements.html">Edit Profil</a></li>
                                                            <li><a href="{{ route('artikel') }}">Kirim Tulisan</a></li>
                                                            <li><a href="{{ url('ketentuan-tulisan') }}">Ketentuan Tulisan</a></li>
                                                            <li> 
                                                                <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                                                    Log Out
                                                                </a>
                                                            </li>
                                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                                @csrf
                                                            </form>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </nav>
                                        </div>
                                    @else
                                    <ul class="header-social" style="margin-left: -15%">    
                                        <li><a href="{{ route('login') }}">Login</a></li>
                                        <li><a href="{{ route('register') }}">Register</a></li>
                                    </ul>
                                    @endif
                                </div>
                            </div>
                       </div>
                   </div>
                </div>
                <!-- Header Bottom -->
                <div class="header-mid d-none d-md-block shadow" style=" background: linear-gradient(to right,#F8476C,#FE7D3D);">
                   <div class="container">
                        <div class="row d-flex align-items-center">
                            <!-- Logo -->
                            <div class="col-xl-3 col-lg-3 col-md-3">
                                <div class="logo">
                                    <a href="{{ url('/') }}">
                                        <img src="{{ asset('images\logo.png') }}" width="200px" alt="Logo">
                                    </a>
                                </div>
                            </div>
                            <!-- Nav Menu -->
                            <div class="col-xl-9 col-lg-9 col-md-9">
                                <div class="header-banner f-right ">
                                    <div class="main-menu d-none d-md-block">
                                        @include('masterPages.headers.nav-menu')
                                    </div>
                                </div>
                            </div>
                        </div>
                   </div>
                </div>

                <!-- Sticky Header -->
                <div class="header-sticky">
                    <div class="container">
                        <div class="row d-flex align-items-center">
                            <!-- Logo -->
                            <div class="col-xl-3 col-lg-3 col-md-3">
                                <div class="sticky-logo">
                                    <a href="{{ url('/') }}">
                                        <img src="{{ asset('images\logo.png') }}" width="180px" alt="Logo">
                                    </a>
                                </div>
                            </div>   
                            <!-- Navigation -->
                            <div class="col-xl-9 col-lg-9 col-md-9">
                                <div class="sticky-logo">
                                    <div class="header-banner f-right ">
                                        <div class="main-menu d-none d-md-block" >
                                            @include('masterPages.headers.nav-menu-sticky')
                                        </div>
                                    </div>
                                </div>
                            </div> 
                            <!-- Mobile -->
                            <div class="col-12">
                                <div class="mobile_menu d-block d-md-none">
                                    <div style="display: none">
                                        @include('masterPages.headers.nav-mobile')
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
       </div>
    </header>
</body>
<script>
    // Jam
    window.setTimeout("waktu()", 1000);
    function addZero(i) {
        if (i < 10) {
            i = "0" + i;
        }
        return i;
    }

	function waktu() {
		var waktu = new Date();
		setTimeout("waktu()", 1000);
		document.getElementById("jam").innerHTML = addZero(waktu.getHours());
		document.getElementById("menit").innerHTML = addZero(waktu.getMinutes());
		document.getElementById("detik").innerHTML = addZero(waktu.getSeconds());
    }

    // Hari
    arrHari = [ "Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jum'at", "Sabtu"]
    Hari = new Date().getDay();
    document.getElementById("hari").innerHTML = arrHari[Hari];

    // Tanggal
    Tanggal = new Date().getDate();
    document.getElementById("tanggal").innerHTML = Tanggal;

    // Bulan
    arrbulan = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"];
    Bulan = new Date().getMonth();
    document.getElementById("bulan").innerHTML = arrbulan[Bulan];

    // Tahun
    Tahun = new Date().getFullYear();
    document.getElementById("tahun").innerHTML = Tahun;
</script>
</html>