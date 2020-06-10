<div>
    <nav>
        <ul>
            <li>
                <a href="{{ route('kategori','kategori=1') }}" style="font-size: 13px !important">HEADLINE <span class="fa fa-angle-down "></span></a>
                <ul class="submenu">
                    @foreach ($sub_headline as $i)
                        <li><a href="{{ route('sub_kategori','sub_kategori='.$i->id) }}">{{ $i->n_sub_kategori }}</a></li>    
                    @endforeach
                </ul>
            </li>
            <li>
                <a href="{{ route('kategori','kategori=2') }}" style="font-size: 13px !important">INDEPTH <span class="fa fa-angle-down "></span></a>
                <ul class="submenu">
                    @foreach ($sub_indepth as $i)
                        <li><a href="{{ route('sub_kategori','sub_kategori='.$i->id) }}">{{ $i->n_sub_kategori }}</a></li>
                    @endforeach
                </ul>
            </li>
            <li>
                <a href="{{ route('kategori','kategori=3') }}" style="font-size: 13px !important">KEBIJAKAN <span class="fa fa-angle-down "></span></a>
                <ul class="submenu">
                    @foreach ($sub_kebijakan as $i)
                        <li><a href="{{ route('sub_kategori','sub_kategori='.$i->id) }}">{{ $i->n_sub_kategori }}</a></li>
                    @endforeach
                </ul>
            </li>
            <li>
                <a href="{{ route('kategori','kategori=4') }}" style="font-size: 13px !important">SERBA SERBI <span class="fa fa-angle-down "></span></a>
                <ul class="submenu">
                    @foreach ($sub_serbaSerbi as $i)
                        <li><a href="{{ route('sub_kategori','sub_kategori='.$i->id) }}">{{ $i->n_sub_kategori }}</a></li>
                    @endforeach
                </ul>
            </li>
            <li>
                <a href="{{ route('kategori','kategori=5') }}" style="font-size: 13px !important">KONSULTASI <span class="fa fa-angle-down "></span></a>
                <ul class="submenu">
                    @foreach ($sub_konsultasi as $i)
                        <li><a href="{{ route('sub_kategori','sub_kategori='.$i->id) }}">{{ $i->n_sub_kategori }}</a></li>
                    @endforeach
                </ul>
            </li>
            @if (Auth::user() != null)
            <li>
                <a href="#" style="font-size: 13px !important">AKUN <span class="fa fa-angle-down"></a>
                <ul class="submenu">
                    <li><a href="{{ route('profil') }}">Edit Profil</a></li>
                    <li><a href="{{ route('kirim-tulisan') }}">Kirim Tulisan</a></li>
                    <li><a href="{{ url('ketentuan-tulisan') }}">Ketentuan Tulisan</a></li>
                </ul>
            </li>
            @else
            <li>
                <a href="#" style="font-size: 13px !important">AKUN <span class="fa fa-angle-down "></a>
                <ul class="submenu">
                    <li><a href="{{ route('kirim-tulisan') }}">Kirim Tulisan</a></li>
                    <li><a href="{{ url('ketentuan-tulisan') }}">Ketentuan Tulisan</a></li>
                    <li><a href="{{ route('login') }}">Login</a></li>
                </ul>
            </li>
            @endif
            <li style="margin-left: -40px">
                <form class="form-row d-flex justify-content-center md-form form-sm mt-0">
                    <input class="row bdr-5  single-input-primary2 ml-5 w-75" style="margin-top: -8px; height: 30px;" type="text" placeholder="Search">
                </form>
            </li>
        </ul>
    </nav>
</div>
