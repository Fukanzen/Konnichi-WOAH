
<header id="header" class="justify-content-center align-items-center">
    <nav id="navbar" class="navbar" >

            <a class="navbar-brand text-center justify-content-around" href="/"> <img src="{{ asset('img/logo.png') }}" alt="logo"> </a>
            <ul>
                <li> <a class="nav-link {{ Request::is('homeStudent')? 'active' : '' }}" href="/homeStudent">Home</a> </li>
                <li> <a class="nav-link {{ Request::is('learnStudent/*')? 'active' : '' }}" href="/games">Learn</a> </li>
                <li> <a class="nav-link {{ Request::is('articleStudent')? 'active' : '' }}" href="/articleStudent">Article</a> </li>
                <li> <a class="nav-link {{ Request::is('teacher')? 'active' : '' }}" href="/teacher">Teacher</a></li>
            </ul>

            <div class="d-flex justify-content-end align-items-center">
                @if (auth()->user())

                        <a>Konnichiwa, {{ auth()->user()->name }}</a>

                    <a href="/profileStudent" class="navbar-brand"  ><img src="{{ asset('img/PROFILE.png') }}" ></a>
                    @else
                    <a href="/profileStudent/{{ auth()->user() }}" class="navbar-brand"  ><img src="{{ asset('img/PROFILE.png') }}" ></a>
                @endif
            </div>

  </nav><!-- .navbar -->
</header><!-- End Header -->
