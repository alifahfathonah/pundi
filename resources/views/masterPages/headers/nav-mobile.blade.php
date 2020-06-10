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
                <form class="form-row d-flex justify-content-center md-form form-sm mt-2">
                    <div class="input-group-prepend">
                        <button style="border: none; background: none">
                            <span class="input-group-text" style="background-color: whitesmoke;">Search</span>
                        </button>
                    </div>
                    <input class="row bdr-5 single-input-primary2 ml-0 w-75" style="height: 38px" type="text">
                </form>
            </li>
        </ul>
    </nav>
</div>