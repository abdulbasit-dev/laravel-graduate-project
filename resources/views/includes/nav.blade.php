<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}"><img src="{{ asset('images/brand.png') }}" width="50"
                height="auto"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link fw-medium {{ Route::currentRouteName() == 'home' ? 'active' : '' }}"
                        aria-current="page" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-medium {{ Route::currentRouteName() == 'graduateProject' ? 'active' : '' }}"
                        href="{{ route('graduateProject') }}">Graduate Project</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-medium {{ Route::currentRouteName() == 'evaluation' ? 'active' : '' }}"
                        href="{{ route('evaluation') }}">Evaluation</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-medium {{ Route::currentRouteName() == 'conference' ? 'active' : '' }}"
                        href="{{ route('conference') }}">Conference and Grant</a>
                </li>
            </ul>
            @if (Route::has('login'))
            <div class="top-right links">
                        <ul class="navbar-nav">
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">Login <i
                                        class="fas fa-sign-in-alt"></i></a>
                            </li>

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('user.register') }}">Register <i
                                            class="fas fa-user"></i></a>

                                </li>
                            @endif
                        @endguest
                        @endif
                        @auth
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                        <form method="POST" id="logout-form" action="{{ route('logout') }}">
                            @csrf
                        </form>
                        {{ __('Log Out') }} <i class="fas fa-out"></i>
                    </a>
                </li>

                @endauth
            </ul>
        </div>
        </div>
    </div>
</nav>
