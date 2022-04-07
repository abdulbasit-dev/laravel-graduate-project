<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container">
    <a class="navbar-brand"
      href="{{ route('home') }}"><img src="{{ asset('images/brand.png') }}"
        width="50"
        height="auto"></a>
    <button class="navbar-toggler"
      type="button"
      data-bs-toggle="collapse"
      data-bs-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent"
      aria-expanded="false"
      aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse"
      id="navbarSupportedContent">
      <!-- Right Side Of Navbar -->
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link fw-medium {{ Route::currentRouteName() == 'home' ? 'active' : '' }}"
            aria-current="page"
            href="{{ route('home') }}">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link fw-medium {{ Route::currentRouteName() == 'project' ? 'active' : '' }}"
            href="{{ route('project') }}">Projects</a>
        </li>

        {{-- <li class="nav-item">
            <a class="nav-link fw-medium {{ Route::currentRouteName() == 'posters' ? 'active' : '' }}"
                href="{{ route('posters') }}">Posters</a>
        </li> --}}

        <li class="nav-item">
          <a class="nav-link fw-medium {{ Route::currentRouteName() == 'conference' ? 'active' : '' }}"
            href="{{ route('conference') }}">Conference</a>
        </li>
        <li class="nav-item">
          <a class="nav-link fw-medium {{ Route::currentRouteName() == 'evaluationCommittee' ? 'active' : '' }}"
            href="{{ route('evaluationCommittee') }}">Evaluation Committee</a>
        </li>
        <li class="nav-item">
          <a class="nav-link fw-medium {{ Route::currentRouteName() == 'expertSystemInfo' ? 'active' : '' }}"
            href="{{ route('expertSystemInfo') }}">Expert System Info</a>
        </li>
        <li class="nav-item">
          <a class="nav-link fw-medium {{ Route::currentRouteName() == 'announcements' ? 'active' : '' }}"
            href="{{ route('announcements') }}">Announcement</a>
        </li>

        <li class="nav-item">
          <a class="nav-link fw-medium {{ Route::currentRouteName() == 'contactUs' ? 'active' : '' }}"
            href="{{ route('contactUs') }}">Contact Us</a>
        </li>

        <li class="nav-item dropdown">
            <a class="nav-link fw-medium  dropdown-toggle {{ Route::currentRouteName() == 'announcements' || Route::currentRouteName() == 'evaluationCommittee' ? 'active' : '' }}" href="#" data-bs-toggle="dropdown">Evaluation Committee</a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Project Announcement</a></li>
                <li><a class="dropdown-item" href="#">Evaluation Form</a></li>
            </ul>
        </li>

      </ul>
      @if (Route::has('login'))
        <div class="top-right links ">
          <ul class="navbar-nav">
            @guest
              <li class="nav-item">
                <a class="nav-link"
                  href="{{ route('login') }}">Login <i class="fas fa-sign-in-alt"></i></a>
              </li>

              @if (Route::has('register'))
                <li class="nav-item">
                  <a class="nav-link"
                    href="{{ route('register') }}">Register <i class="fas fa-user"></i></a>

                </li>
              @endif
            @endguest
      @endif
      @auth
        <li class="nav-item">
          <a class="nav-link"
            href="{{ route('logout') }}"
            onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
            <form method="POST"
              id="logout-form"
              action="{{ route('logout') }}">
              @csrf
            </form>
            {{ __('Logout') }} <i class="fas fa-out"></i>
          </a>
        </li>

        @role('student')
          <li class="nav-item">
            <a class="nav-link"
              href="{{ route('admin.home') }}" target="__blank">Profile</a>

          </li>
          @else
           <li class="nav-item">
            <a class="nav-link"
              href="{{ route('admin.home') }}" target="__blank">Dashboard</a>
          </li>
        @endrole



      @endauth

      </ul>
    </div>
  </div>
  </div>
</nav>
