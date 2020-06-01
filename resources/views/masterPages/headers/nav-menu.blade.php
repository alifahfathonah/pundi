<nav>                  
    <ul>    
        <li>
            <a href="{{ route('kategori','kategori=1') }}" style="font-size: 13px !important">HEADLINE <span class="fa fa-angle-down m-l-5"></span></a>
            <ul class="submenu">
                @foreach ($sub_kategori as $i)
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