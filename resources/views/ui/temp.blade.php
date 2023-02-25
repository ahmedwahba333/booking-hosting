<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <div class="container-fluid">
        <a class="nav-link" href="home">Booking & Hosting</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">

                <li class="nav-item">
                    <a class="nav-link" href="{{url('BookingGallery')}}">Booking</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('HostingGallary')}}">Hosting</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('aboutUs')}}">about</a>
                </li>

                <li class="nav-item">
                    @auth
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            {{ Auth::user()->name }}
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    Logout
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                            @if (Auth::user()->role == 'owner')
                            <li>
                                <a class="nav-link" href="{{url('addproperty')}}">Owner Dashboard</a>
                               </li>
                            @elseif (Auth::user()->role == 'customer')
                                <li class="nav-item">
                                    <a class="nav-link" href="{{url('profile')}}">profile</a>
                                </li>
                            @elseif (Auth::user()->role == 'admin')
                                <li class="nav-item">
                                    <a class="nav-link" href="{{url('useradmin')}}">Admin Dashboard</a>
                                </li>
                            @endif
                    </li>
                </ul>
                </li>
            @else
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href=" {{url('reg')}}">registration</a>
                </li>

                </li>
            @endauth
            </ul>
        </div>
    </div>
</nav>


@yield('body')

{{-- @extends('ui.footer') --}}

@include('ui.footer')
