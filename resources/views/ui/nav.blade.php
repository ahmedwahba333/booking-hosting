<div class="top">
    <header>Booking & Hosting</header>
    <nav>
        <ul class="links">
            <li><a class="aLinks" href="home">Home</a></li>

            <li><a class="aLinks" href="{{url('logIn')}}">registration</a></li>
            <li><a class="aLinks" href="{{url('BookingGallery')}}">Booking</a></li>
            <li><a class="aLinks" href="{{url('HostingGallary')}}">Hostig</a></li>
            <li><a class="aLinks" href="{{url('BookingGalleryforone')}}"> For One </a></li>
            <li><a class="aLinks" href="{{url('aboutUs')}}">about</a></li>
            <li>
                @auth
                @if (Auth ::user()->role=='owner')
                <li class="aLinks">
                    <a class="aLinks" href="dashboardOwner">Dashboard</a>
                </li>
                @else
                <li class="aLinks">
                    <a class="aLinks" href="profile">profile</a>
                </li>
                @endif
                @endauth
            </li>

            <li><a class="aLinks" href="pay">Payment</a></li>

            <li>
                @auth
                <li class="aLinks">
                    {{Auth ::user()->name}}
                    <form action="{{route("mylogout")}}" method="POST">
                        @csrf
                        <input class="aLinks" type="submit" value="Logout">
                    </form>
                </li>
                    @else
                    <li class="aLinks">
                        <a class="aLinks" href="{{route("login")}}">Login</a>
                    </li>
                    @endauth
            </li>




        </ul>

    </nav>
</div>
