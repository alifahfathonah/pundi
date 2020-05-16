<div>
    <nav>                  
        <ul id="navigation">    
            <li><a href="index.html">Home</a></li>
            <li><a href="categori.html">Category</a></li>
            <li><a href="about.html">About</a></li>
            <li><a href="latest_news.html">Latest News</a></li>
            <li><a href="contact.html">Contact</a></li>
            <li><a href="#">Pages</a>
                <ul class="submenu">
                    <li><a href="elements.html">Element</a></li>
                    <li><a href="blog.html">Blog</a></li>
                    <li><a href="single-blog.html">Blog Details</a></li>
                    <li><a href="details.html">Categori Details</a></li>
                </ul>
            </li>
            @if (Auth::user() != null)
                <li>
                    <a href="#">
                        <img width="30px" height="30px" src="images\boy.png" alt="..." class="rounded-circle">
                    </a>
                    <ul class="submenu">
                        <li><a href="#">Profil</a></li>
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
            @endif
        </ul>
    </nav>
</div>