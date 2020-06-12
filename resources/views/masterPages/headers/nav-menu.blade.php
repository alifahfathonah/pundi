<nav>                  
    <ul>    
        <li>
            <a href="{{ route('kategori','kategori=1') }}" style="font-size: 13px !important">ULASAN <span class="fa fa-angle-down "></span></a>
            <ul class="submenu">
                @foreach ($sub_headline as $i)
                    <li><a href="{{ route('sub_kategori','sub_kategori='.$i->id) }}">{{ $i->n_sub_kategori }}</a></li>    
                @endforeach
            </ul>
        </li>
        <li>
            <a href="{{ route('kategori','kategori=2') }}" style="font-size: 13px !important">KAJIAN <span class="fa fa-angle-down "></a>
            <ul class="submenu">
                @foreach ($sub_indepth as $i)
                    <li><a href="{{ route('sub_kategori','sub_kategori='.$i->id) }}">{{ $i->n_sub_kategori }}</a></li>
                @endforeach
            </ul> 
        </li>
        <li>
            <a href="{{ route('kategori','kategori=3') }}" style="font-size: 13px !important">KREATIVITAS <span class="fa fa-angle-down "></a>
            <ul class="submenu">
                @foreach ($sub_kebijakan as $i)
                    <li><a href="{{ route('sub_kategori','sub_kategori='.$i->id) }}">{{ $i->n_sub_kategori }}</a></li>
                @endforeach
            </ul>
        </li>
        <li>
            <a href="{{ route('kategori','kategori=4') }}" style="font-size: 13px !important">SERBA SERBI <span class="fa fa-angle-down "></a>
            <ul class="submenu">
                @foreach ($sub_serbaSerbi as $i)
                    <li><a href="{{ route('sub_kategori','sub_kategori='.$i->id) }}">{{ $i->n_sub_kategori }}</a></li>
                @endforeach
            </ul>
        </li>
        <li>
            <a href="{{ route('konsultasi') }}" style="font-size: 13px !important">KONSULTASI</a>
        </li>
        @if (Auth::user() != null)
        <li>
            <a href="#" style="font-size: 13px !important"">AKUN <span class="fa fa-angle-down "></a>
            <ul class="submenu">
                <li><a href="{{ route('profil') }}">Edit Profil</a></li>
                <li><a href="{{ route('kirim-tulisan') }}">Kirim Tulisan</a></li>
                <li><a href="{{ url('ketentuan-tulisan') }}">Ketentuan Tulisan</a></li>
                <li><a href="" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Log Out</a></li>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </ul>
        </li>
        @else
        <li>
            <a href="#" style="font-size: 13px !important"">AKUN <span class="fa fa-angle-down "></a>
            <ul class="submenu">
                <li><a href="{{ route('kirim-tulisan') }}">Kirim Tulisan</a></li>
                <li><a href="{{ url('ketentuan-tulisan') }}">Ketentuan Tulisan</a></li>
                <li><a href="{{ route('login') }}">Login</a></li>
            </ul>
        </li>
        @endif
        <li style="margin-left: -40px">
            <form class="form-row d-flex justify-content-center md-form form-sm mt-0" action="{{ route('hasil-pencarian') }}" method="GET">
                <input type="text" class="row bdr-5 single-input-primary2 ml-5 w-75" name="hasil_search" style="margin-top: -8px; height: 30px;" placeholder="Search">
                <div class="input-group-prepend">
                    <button type="submit" style="border: none; background: black; height: 30px; margin-top: -8px; border-radius: 0px 5px 5px 0px">
                        <i class="fa fa-search" style="color: white"></i> 
                    </button>
                </div>
            </form>
        </li>
    </ul>
</nav>
