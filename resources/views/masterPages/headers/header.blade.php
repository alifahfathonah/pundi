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
                                <!-- Infor Left -->
                                <div class="header-info-left row" style="margin-bottom: -22px">   
                                    <div class="fs-13 f-b m-l-15" style="margin-top: -3px !important; color: white">
                                        <i class="fa fa-bolt"></i>
                                        <span>NEWPOST</span>
                                        <span style="border-left: 0.5px rgb(255, 255, 255) solid; margin-right: -10px; margin-left: 10px"></span>
                                    </div>
                                    <ul id="js-news" class="js-hidden">
                                        @foreach ($header as $i)
                                            <li class="news-item">
                                                <a href="{{ route('artikel') .'?post='.$i->id}}">{{ $i->judul }}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                                <!-- Infro Right -->
                                <div class="header-info-right" style="margin-right: 18px !important">
                                    <ul class="header-social" style="color: white !important;">    
                                        <i class="fas fa-calendar-check m-r-2"></i>
                                        <li>
                                            <a id="hari"></a>
                                            ,
                                            <a id="tanggal"></a>
                                            <a id="bulan"></a>
                                            <a id="tahun"></a>
                                            /
                                        </li>
                                        <li>
                                            <a id="jam"></a>
                                            :
                                            <a id="menit"></a>
                                            :
                                            <a id="detik"></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                       </div>
                   </div>
                </div>
                <!-- Header Bottom -->
                <div class="header-mid d-none d-md-block" style="background: linear-gradient(to right,#F8476C,#FE7D3D);">
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
                                        <nav>                  
                                            <ul>    
                                                <li>
                                                    <a href="{{ route('kategori','kategori=1') }}" style="font-size: 13px !important">HEADLINE <span class="fa fa-angle-down m-l-5"></span></a>
                                                    <ul class="submenu">
                                                        @foreach ($sub_headline as $i)
                                                            <li><a href="{{ route('sub_kategori','sub_kategori='.$i->id) }}">{{ $i->n_sub_kategori }}</a></li>    
                                                        @endforeach
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="{{ route('kategori','kategori=2') }}" style="font-size: 13px !important">INDEPTH <span class="fa fa-angle-down m-l-5"></a>
                                                    <ul class="submenu">
                                                        @foreach ($sub_indepth as $i)
                                                            <li><a href="{{ route('sub_kategori','sub_kategori='.$i->id) }}">{{ $i->n_sub_kategori }}</a></li>
                                                        @endforeach
                                                    </ul> 
                                                </li>
                                                <li>
                                                    <a href="{{ route('kategori','kategori=3') }}" style="font-size: 13px !important">KEBIJAKAN <span class="fa fa-angle-down m-l-5"></a>
                                                    <ul class="submenu">
                                                        @foreach ($sub_kebijakan as $i)
                                                            <li><a href="{{ route('sub_kategori','sub_kategori='.$i->id) }}">{{ $i->n_sub_kategori }}</a></li>
                                                        @endforeach
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="{{ route('kategori','kategori=4') }}" style="font-size: 13px !important">SERBA SERBI <span class="fa fa-angle-down m-l-5"></a>
                                                    <ul class="submenu">
                                                        @foreach ($sub_serbaSerbi as $i)
                                                            <li><a href="{{ route('sub_kategori','sub_kategori='.$i->id) }}">{{ $i->n_sub_kategori }}</a></li>
                                                        @endforeach
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="{{ route('kategori','kategori=5') }}" style="font-size: 13px !important">KONSULTASI <span class="fa fa-angle-down m-l-5"></a>
                                                    <ul class="submenu">
                                                        @foreach ($sub_konsultasi as $i)
                                                            <li><a href="{{ route('sub_kategori','sub_kategori='.$i->id) }}">{{ $i->n_sub_kategori }}</a></li>
                                                        @endforeach
                                                    </ul>
                                                </li>
                                                @if (Auth::user() != null)
                                                <li>
                                                    <a href="#">
                                                        <img style="width: 30px !important" src="{{ asset('ava/' .Auth::user()->photo) }}" alt="..." class="rounded-circle">
                                                    </a>
                                                    <ul class="submenu">
                                                        <li><a href="{{ route('profil') }}">Profil</a></li>
                                                        <li><a href="{{ route('kirim-tulisan') }}">Kirim Tulisan</a></li>
                                                        <li><a href="{{ url('ketentuan-tulisan') }}">Ketentuan Tulisan</a></li>
                                                        <li>
                                                            <a href="{{ route('logout') }}"
                                                                onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                                                Log Out
                                                            </a>
                                                        </li>
                                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                            @csrf
                                                        </form>
                                                    </ul>
                                                </li>
                                                @else
                                                <li>
                                                    <a href="#">KIRIM TULISAN <span class="fa fa-angle-down m-l-5"></a>
                                                    <ul class="submenu">
                                                        <li><a href="{{ url('ketentuan-tulisan') }}">Ketentuan Tulisan</a></li>
                                                        <li><a href="{{ route('register') }}">Registrasi</a></li>
                                                        <li><a href="{{ route('login') }}">Login</a></li>
                                                    </ul>
                                                </li>
                                                @endif
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                   </div>
                </div>

                <!-- Sticky Header -->
                <div class="header-sticky" >
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
                                            <div>
                                                <nav>
                                                    <ul>
                                                        <li>
                                                            <a href="{{ route('kategori','kategori=1') }}" style="color: black !important;">HEADLINE <span style="size: 10px" class="fa fa-angle-down m-l-5"></span></a>
                                                            <ul class="submenu">
                                                                @foreach ($sub_headline as $i)
                                                                    <li><a href="{{ route('sub_kategori','sub_kategori='.$i->id) }}">{{ $i->n_sub_kategori }}</a></li>    
                                                                @endforeach
                                                            </ul>
                                                        </li>
                                                        <li>
                                                            <a href="{{ route('kategori','kategori=2') }}" style="color: black !important">INDEPTH <span class="fa fa-angle-down m-l-5"></span></a>
                                                            <ul class="submenu">
                                                                @foreach ($sub_indepth as $i)
                                                                    <li><a href="{{ route('sub_kategori','sub_kategori='.$i->id) }}">{{ $i->n_sub_kategori }}</a></li>
                                                                @endforeach
                                                            </ul>
                                                        </li>
                                                        <li>
                                                            <a href="{{ route('kategori','kategori=3') }}" style="color: black !important">KEBIJAKAN <span class="fa fa-angle-down m-l-5"></span></a>
                                                            <ul class="submenu">
                                                                @foreach ($sub_kebijakan as $i)
                                                                    <li><a href="{{ route('sub_kategori','sub_kategori='.$i->id) }}">{{ $i->n_sub_kategori }}</a></li>
                                                                @endforeach
                                                            </ul>
                                                        </li>
                                                        <li>
                                                            <a href="{{ route('kategori','kategori=4') }}" style="color: black !important">SERBA SERBI <span class="fa fa-angle-down m-l-5"></span></a>
                                                            <ul class="submenu">
                                                                @foreach ($sub_serbaSerbi as $i)
                                                                    <li><a href="{{ route('sub_kategori','sub_kategori='.$i->id) }}">{{ $i->n_sub_kategori }}</a></li>
                                                                @endforeach
                                                            </ul>
                                                        </li>
                                                        <li>
                                                            <a href="{{ route('kategori','kategori=5') }}" style="color: black !important">KONSULTASI <span class="fa fa-angle-down m-l-5"></span></a>
                                                            <ul class="submenu">
                                                                @foreach ($sub_konsultasi as $i)
                                                                    <li><a href="{{ route('sub_kategori','sub_kategori='.$i->id) }}">{{ $i->n_sub_kategori }}</a></li>
                                                                @endforeach
                                                            </ul>
                                                        </li>
                                                        @if (Auth::user() != null)
                                                        <li>
                                                            <a href="#">
                                                                <img width="30px" height="30px" src="{{ asset('ava/' .Auth::user()->photo) }}" alt="..." class="rounded-circle">
                                                            </a>
                                                            <ul class="submenu">
                                                                <li><a href="{{ route('profil') }}">Profil</a></li>
                                                                <li><a href="{{ route('kirim-tulisan') }}">Kirim Tulisan</a></li>
                                                                <li><a href="{{ url('ketentuan-tulisan') }}">Ketentuan Tulisan</a></li>
                                                                <li>
                                                                    <a href="{{ route('logout') }}"
                                                                        onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                                                        Log Out
                                                                    </a>
                                                                </li>
                                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                                    @csrf
                                                                </form>
                                                            </ul>
                                                        </li>
                                                        @else
                                                        <li>
                                                            <a href="#" style="color: black !important">KIRIM TULISAN <span class="fa fa-angle-down m-l-5"></a>
                                                            <ul class="submenu">
                                                                <li><a href="{{ url('ketentuan-tulisan') }}">Ketentuan Tulisan</a></li>
                                                                <li><a href="{{ route('register') }}">Registrasi</a></li>
                                                                <li><a href="{{ route('login') }}">Login</a></li>
                                                            </ul>
                                                        </li>
                                                        @endif
                                                    </ul>
                                                </nav>
                                            </div>                                            
                                        </div>
                                    </div>
                                </div>
                            </div> 
                            <!-- Mobile -->
                            <div class="col-12">
                                <div class="mobile_menu d-block d-md-none">
                                    <div style="display: none">
                                        <div>
                                            <nav>                  
                                                <ul id="navigation">    
                                                    <li>
                                                        <a href="#">Headline</a>
                                                        <ul class="submenu">
                                                            @foreach ($header as $i)
                                                                <li><a href="{{ route('sub_kategori','sub_kategori='.$i->id) }}">{{ $i->n_sub_kategori }}</a></li>    
                                                            @endforeach
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <a href="#">Indepth</a>
                                                        <ul class="submenu">
                                                            @foreach ($sub_indepth as $i)
                                                                <li><a href="{{ route('sub_kategori','sub_kategori='.$i->id) }}">{{ $i->n_sub_kategori }}</a></li>
                                                            @endforeach
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <a href="#">Kebijakan</a>
                                                        <ul class="submenu">
                                                            @foreach ($sub_kebijakan as $i)
                                                                <li><a href="{{ route('sub_kategori','sub_kategori='.$i->id) }}">{{ $i->n_sub_kategori }}</a></li>
                                                            @endforeach
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <a href="#">Serba serbi</a>
                                                        <ul class="submenu">
                                                            @foreach ($sub_serbaSerbi as $i)
                                                                <li><a href="{{ route('sub_kategori','sub_kategori='.$i->id) }}">{{ $i->n_sub_kategori }}</a></li>
                                                            @endforeach
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <a href="#">Konsultasi</a>
                                                        <ul class="submenu">
                                                            @foreach ($sub_konsultasi as $i)
                                                                <li><a href="{{ route('sub_kategori','sub_kategori='.$i->id) }}">{{ $i->n_sub_kategori }}</a></li>
                                                            @endforeach
                                                        </ul>
                                                    </li>
                                                    @if (Auth::user() != null)
                                                        <li>
                                                            <a href="#">
                                                                <img width="30px" height="30px" src="{{ asset('ava/' .Auth::user()->photo) }}" alt="..." class="rounded-circle">
                                                                <span>{{ Auth::user()->name }}</span>
                                                            </a>
                                                            <ul class="submenu">
                                                                <li><a href="{{ route('profil') }}">Profil</a></li>
                                                                <li><a href="{{ route('kirim-tulisan') }}">Kirim Tulisan</a></li>
                                                                <li><a href="{{ url('ketentuan-tulisan') }}">Ketentuan Tulisan</a></li>
                                                                <li>
                                                                    <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                                                        Log Out
                                                                    </a>
                                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                                        @csrf
                                                                    </form>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                    @else 
                                                    <li>
                                                        <a href="{{ route('login') }}">
                                                            <button class="genric-btn primary btn-block">Login</button>
                                                        </a>
                                                    </li>
                                                    @endif
                                                </ul>
                                            </nav>
                                        </div>
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