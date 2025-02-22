
<header id="header" class="fixed-top justify-content-center align-items-center">
    <nav id="navbar" class="navbar" style="justify-content:space-between;" >

            <a class="navbar-brand text-center justify-content-around" href="/" ><img src="{{ asset('img/logo.png') }}" alt="logo"></a>
            <ul class="d-flex align-items-center justify-content-center" style=" width:50vw;">
                <li> <a class="nav-link {{ Request::is('homeAdmin')? 'active' : '' }}" href="/homeAdmin">Home</a> </li>
                {{-- <li> <a class="nav-link {{ Request::is('verifyPayment')? 'active' : '' }}" href="/verifyPayment">Verify Payment</a> </li> --}}
                <li> <a class="nav-link {{ Request::is('verifyTeacher')? 'active' : '' }}" href="/verifyTeacher">Verify Teacher</a></li>
                <li> <a class="nav-link {{ Request::is('admin*')? 'active' : '' }}" href="/admin">Article</a> </li>
            </ul>
            {{-- <a href="/profileAdmin" class="col navbar-brand d-flex justify-content-end "  style=" "><img src="{{ asset('img/notif.png') }}" ></a> --}}
            {{-- <a href="/profileAdmin" class="navbar-brand"  ><img src="{{ asset('img/PROFILE.png') }}" ></a> --}}

            <div class="d-flex justify-content-end align-items-center">

                @php
                    $user = App\Models\User::all();
                @endphp
                @if (auth()->user())

                        <a>Konnichiwa, {{ auth()->user()->name }}</a>

                        @if (auth()->user()->photo)
                        <a href="/profileAdmin" class="navbar-brand"  ><img src="{{ asset('storage/'.auth()->user()->photo) }}" style="
                            background-color: solid #FF8BA7;

                            height: 40px;
                            width: 40px;
                            border-radius: 50%;
                            overflow:hidden;" ></a>

                        @else
                        <a href="/profileAdmin" class="navbar-brand"  ><img src="{{ asset('img/PROFILE.png') }}" style="
                            background-color: solid #FF8BA7;

                            height: 40px;
                            border-radius: 50%;
                            overflow:hidden;" ></a>

                        @endif
                @else
                    <a href="/profileAdmin/{{ auth()->user() }}" class="navbar-brand"  ><img src="{{ asset('img/PROFILE.png') }}" ></a>
                @endif
            </div>

  </nav><!-- .navbar -->
</header><!-- End Header -->



{{-- <header id="header" class="fixed-top justify-content-center align-items-center">
    <nav id="navbar" class="navbar" >

            <a class="navbar-brand text-center justify-content-around" href="/"> <img src="img/logo.png" alt="logo"> </a>
            <ul>
                <li> <a class="nav-link {{ ($title == "home")? 'active' : '' }}" href="/homeStudent">Home</a> </li>
                <li> <a class="nav-link {{ ($title == "learn")? 'active' : '' }}" href="/learnStudent">Learn</a> </li>
                <li> <a class="nav-link {{ ($title == "article")? 'active' : '' }}" href="/articleStudent">Article</a> </li>
                <li> <a class="nav-link {{ ($title == "teacher")? 'active' : '' }}" href="/teacher">Teacher</a></li>
            </ul>
            <a href="/profileStudent" class="navbar-brand"  ><img src="{{ asset('img/PROFILE.png') }}" ></a>

  </nav><!-- .navbar -->
</header><!-- End Header --> --}}
