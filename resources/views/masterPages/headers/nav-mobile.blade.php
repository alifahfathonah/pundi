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
                <a href="#" >Kirim Tulisan</a>
                <ul class="submenu">
                    <li><a href="{{ url('ketentuan-tulisan') }}">Ketentuan Tulisan</a></li>
                    <li><a href="{{ route('register') }}">Registrasi</a></li>
                    <li><a href="{{ route('login') }}">Login</a></li>
                </ul>
            </li>
            <li>
                <a href="{{ route('login') }}">
                    <button class="genric-btn primary btn-block">Login</button>
                </a>
            </li>
            @endif
        </ul>
    </nav>
</div>