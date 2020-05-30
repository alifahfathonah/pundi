<div>
    <nav>                  
        <ul id="navigation">    
            <li>
                <a href="#">Headline</a>
                <ul class="submenu">
                    <li><a href="#">News</a></li>
                    <li><a href="#">Editorial</a></li>
                    <li><a href="#">Laporan Utama</a></li>
                    <li><a href="#">Agenda</a></li>
                </ul>
            </li>
            <li>
                <a href="#">Indepth</a>
                <ul class="submenu">
                    <li><a href="#">Essay</a></li>
                    <li><a href="#">Kolom</a></li>
                    <li><a href="#">Interview</a></li>
                    <li><a href="#">Litera</a></li>
                </ul>
            </li>
            <li>
                <a href="#">Kebijakan</a>
                <ul class="submenu">
                    <li><a href="#">Analisis</a></li>
                    <li><a href="#">Suara Guru</a></li>
                    <li><a href="#">Suara Dosen</a></li>
                    <li><a href="#">Suara Mahasiswa</a></li>
                </ul>
            </li>
            <li>
                <a href="#">Serba serbi</a>
                <ul class="submenu">
                    <li><a href="#">Feature</a></li>
                    <li><a href="#">Motivasi</a></li>
                    <li><a href="#">Tokoh</a></li>
                    <li><a href="#">Liputan Khusus</a></li>
                    <li><a href="#">Kreativitas</a></li>
                </ul>
            </li>
            <li>
                <a href="#">Konsultasi</a>
                <ul class="submenu">
                    <li><a href="#">Curhat Remaja</a></li>
                    <li><a href="#">Curhat Anak</a></li>
                    <li><a href="#">Kolom Pertanyaan</a></li>
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