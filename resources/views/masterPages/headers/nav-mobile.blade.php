<div>
    <nav>                  
        <ul id="navigation">    
            <li>
                <a href="#">Headline</a>
                <ul class="submenu">
                    @foreach ($sub_headline as $i)
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
                <a href="#">Akun</a>
                <ul class="submenu">
                    <li><a href="{{ route('profil') }}">Edit Profil</a></li>
                    <li><a href="{{ route('kirim-tulisan') }}">Kirim Tulisan</a></li>
                    <li><a href="{{ url('ketentuan-tulisan') }}">Ketentuan Tulisan</a></li>
                </ul>
            </li>
            @else 
            <li>
                <a href="#">Akun</a>
                <ul class="submenu">
                    <li><a href="{{ route('kirim-tulisan') }}">Kirim Tulisan</a></li>
                    <li><a href="{{ url('ketentuan-tulisan') }}">Ketentuan Tulisan</a></li>
                    <li><a href="{{ route('login') }}">Login</a></li>
                </ul>
            </li>
            @endif
            <li>
                <form class="form-row d-flex justify-content-center md-form form-sm mt-1" action="{{ route('hasil-pencarian') }}" method="GET">
                    <div class="input-group input-group-lg" style="margin-left: 6%">
                        <input type="text" class="single-input-primary2" name="hasil_search" style="width: 82%"  placeholder="Search Keyword">
                        <div class="input-group-prepend" style="background: #FC5300;">
                            <button type="submit" style="border: none; background: #FC5300; width: 50px">
                                <i class="fa fa-search" style="color: white"></i> 
                            </button>
                        </div>
                    </div>
                </form>
            </li>
        </ul>
    </nav>
</div>