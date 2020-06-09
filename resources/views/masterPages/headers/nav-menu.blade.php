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
            <a href="{{ route('kategori','kategori=2') }}" style="font-size: 13px !important">INDEPTH <span class="fa fa-angle-down "></a>
            <ul class="submenu">
                @foreach ($sub_indepth as $i)
                    <li><a href="{{ route('sub_kategori','sub_kategori='.$i->id) }}">{{ $i->n_sub_kategori }}</a></li>
                @endforeach
            </ul> 
        </li>
        <li>
            <a href="{{ route('kategori','kategori=3') }}" style="font-size: 13px !important">KEBIJAKAN <span class="fa fa-angle-down "></a>
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
            <a href="{{ route('kategori','kategori=5') }}" style="font-size: 13px !important">KONSULTASI <span class="fa fa-angle-down "></a>
            <ul class="submenu">
                @foreach ($sub_konsultasi as $i)
                    <li><a href="{{ route('sub_kategori','sub_kategori='.$i->id) }}">{{ $i->n_sub_kategori }}</a></li>
                @endforeach
            </ul>
        </li>
     
        @if (Auth::user() != null)
        <li>
            <a href="#">AKUN <span class="fa fa-angle-down "></a>
            <ul class="submenu">
                <li><a href="{{ route('profil') }}">Edit Profil</a></li>
                <li><a href="{{ route('kirim-tulisan') }}">Kirim Tulisan</a></li>
                <li><a href="{{ url('ketentuan-tulisan') }}">Ketentuan Tulisan</a></li>
            </ul>
        </li>
        @else
        <li>
            <a href="#">AKUN <span class="fa fa-angle-down "></a>
            <ul class="submenu">
                <li><a href="{{ route('kirim-tulisan') }}">Kirim Tulisan</a></li>
                <li><a href="{{ url('ketentuan-tulisan') }}">Ketentuan Tulisan</a></li>
                <li><a href="{{ route('login') }}">Login</a></li>
            </ul>
        </li>
        @endif
        {{-- <li>
            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="25" height="25" style="margin-top: -3px" viewBox="0 0 172 172"
                style=" fill:#000000;">
                <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter"
                    stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none"
                    font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                    <path d="M0,172v-172h172v172z" fill="none"></path>
                    <g fill="#ffffff">
                        <path
                            d="M70.34479,19.35053c-13.06797,0 -26.13541,4.97135 -36.07916,14.9151c-19.8875,19.8875 -19.8875,52.27083 0,72.15833c9.94375,9.94375 22.97865,14.91772 36.1474,14.91772c13.16875,0 26.20365,-4.97397 36.1474,-14.91772c19.75313,-19.8875 19.75103,-52.27083 -0.13647,-72.15833c-9.94375,-9.94375 -23.01119,-14.9151 -36.07916,-14.9151zM70.27917,27.27917c11.01875,0 22.03698,4.16353 30.36823,12.62915c16.79688,16.79688 16.79635,44.07605 0.13385,60.87292c-16.79687,16.79688 -44.07605,16.79688 -60.87292,0c-16.79687,-16.79687 -16.79687,-44.07605 0,-60.87292c8.33125,-8.33125 19.3521,-12.62915 30.37085,-12.62915zM70.27917,35.34167c-9.27187,0 -18.0073,3.62708 -24.59167,10.34583c-6.31562,6.31563 -9.80885,14.51303 -10.21197,23.38178c-0.13437,2.28437 1.61302,4.03072 3.8974,4.1651h0.13385c2.15,0 3.89687,-1.7474 4.03125,-3.8974c0.26875,-6.85312 3.08905,-13.16927 7.79218,-18.00677c5.10625,-5.10625 11.8271,-7.92603 18.94897,-7.92603c2.28438,0 4.03125,-1.74688 4.03125,-4.03125c0,-2.28437 -1.74687,-4.03125 -4.03125,-4.03125zM47.03125,86c-2.2264,0 -4.03125,1.80485 -4.03125,4.03125c0,2.2264 1.80485,4.03125 4.03125,4.03125c2.2264,0 4.03125,-1.80485 4.03125,-4.03125c0,-2.2264 -1.80485,-4.03125 -4.03125,-4.03125zM112.01941,108.17188c-1.02461,0 -2.03242,0.40365 -2.77148,1.2099c-1.6125,1.6125 -1.6125,4.16457 0,5.6427l3.35938,3.35938c-0.80625,1.6125 -1.2099,3.3599 -1.2099,5.24115c0,3.225 1.20885,6.31615 3.49322,8.60053l17.20105,16.93072c2.41875,2.41875 5.50728,3.62708 8.5979,3.62708c3.09062,0 6.18177,-1.20885 8.60052,-3.49323c4.70313,-4.70312 4.70313,-12.36145 0,-17.06458l-17.19843,-17.20105c-2.28438,-2.28437 -5.37552,-3.49322 -8.60052,-3.49322c-1.88125,0 -3.62865,0.40365 -5.24115,1.2099l-3.35937,-3.35937c-0.80625,-0.80625 -1.84661,-1.2099 -2.87122,-1.2099zM123.49115,119.4599c1.075,0 2.14947,0.40365 2.82135,1.2099l17.06458,17.06458c1.6125,1.6125 1.6125,4.16458 0,5.6427c-1.6125,1.6125 -4.16458,1.6125 -5.6427,0l-17.06458,-16.93073c-0.80625,-0.80625 -1.2099,-1.8802 -1.2099,-2.9552c0,-1.075 0.40365,-2.14948 1.2099,-2.82135c0.80625,-0.80625 1.74635,-1.2099 2.82135,-1.2099z">
                        </path>
                    </g>
                </g>
            </svg>
        </li> --}}
        <li>
            <form class="form-row d-flex justify-content-center md-form form-sm mt-0">
                {{-- <i class="fas fa-search" aria-hidden="true"></i> --}}
                <input class="row bdr-5 single-input-primary ml-2 w-75" style="margin-top: -8px; height: 30px; width: 10px" type="text" placeholder="Search" aria-label="Search">
            </form>
        </li>
    </ul>
</nav>
