<nav class="navbar is-warning" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
        <a class="navbar-item" href="/">
            <b><i>Example</i></b>
        </a>

        <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
        </a>
    </div>

    <div id="navbarBasicExample" class="navbar-menu">
        <div class="navbar-start">
            <a  href="/"
                class="navbar-item {{ Request::path() === '/' ? "is-active" : "" }}">
               Home
            </a>

            <a href="/videos"
               class="navbar-item {{ Request::path() === 'videos' ? "is-active" : "" }}">
                YouTube videos
            </a>

            <a href="/pictures"
               class="navbar-item {{ Request::path() === 'pictures' ? "is-active" : "" }}">
                Pictures
            </a>

        </div>

        <div class="navbar-end">
            <div class="navbar-item">
                <div class="buttons">
                    @if(Auth::user())
                        <a href="{{ route('logout') }}" class="button is-light" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    @else
                    <a href="/register" class="button is-link {{ Request::path() === 'register' ? "is-active" : "" }}">
                        <strong>Sign up</strong>
                    </a>
                    <a href = "/login" class="button is-light">
                        Log in
                    </a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</nav>
