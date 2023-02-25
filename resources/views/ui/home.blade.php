<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="/assets/home.css">
    <title>Booking & Hosting</title>

</head>

<body>
    @extends('ui.temp')
    @section('body')
        <div class="content">
            <div>
                <h2 class="welcome"> Welcome to Booking & Hosting </h2>

                <p class="paragraph">Find your next stay</p>
            </div>

            <!-- <div class="img"><img src="booking.png"></div> -->
            <div class="sec">
                <div class="Booking secFormat">
                    <div class="card" style="width: 18rem;">
                        <img src="https://i.pinimg.com/originals/fb/e5/37/fbe5376ffd448f9037121f5732efbe5c.jpg"
                            class="card-img-top" alt="...">
                        <div class="card-body">
                            <h3 class="card-title"><a href="#" class="aSec">Booking</a></h3>
                            <p class="card-text">Booking now for yourself and enjoy your stay with us</p>
                            <a href="BookingGallery" class="btn btn-primary">Booking</a>
                        </div>
                    </div>
                </div>
                {{-- <div class="Booking secFormat">
                    <div class="card" style="width: 18rem;">
                        <img src="https://www.adweek.com/wp-content/uploads/files/blogs/captain-obvious-hed-2014_0.jpg"
                            class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><a href="#" class="aSec">Booking for Group</a></h5>
                            <p class="card-text">Booking now for Group and enjoy your stay with us</p>
                            <a href="#" class="btn btn-primary">Pick me up!</a>
                        </div>
                    </div>
                </div> --}}

                <div class="Booking secFormat">
                    <div class="card" style="width: 18rem;">
                        <img src="https://cf.bstatic.com/xdata/images/hotel/max1024x768/294520642.jpg?k=42fae5010e33721147e244ff99416ac0a58ae4a3ca88453e96d0a46c64780bcc&o=&hp=1"
                            class="card-img-top" alt="...">
                        <div class="card-body">
                            <h3 class="card-title"><a href="#" class="aSec">Hosting</a></h3>
                            <p class="card-text">you can be Hosted now, find a hoster and enjoy your stay with us</p>
                            <a href="HostingGallary" class="btn btn-primary">Hosting</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://img.traveltriangle.com/blog/wp-content/uploads/2019/05/aswan-things-to-do-cover1.jpg" class="d-block w-100"
                        alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Booking For one</h5>
                        <p>Booking now for yourself and enjoy your stay with us</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="https://static21.com-hotel.com/uploads/hotel/61106/photo/nuba-nile-hotel-aswan_16464070261.jpeg"
                        class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Booking For Group</h5>
                        <p>Booking now for Group and enjoy your stay with us</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="https://nilecruisers.com/wp-content/scimg/7358868631587228637.jpg"
                        class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Hosting</h5>
                        <p>you can be Hosted now, find a hoster and enjoy your stay with us</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>



        <div class="country">
            <h1>We Are in Egypt in</h1>
            <div class="container">
                <div class="row">
                    <div class="col">
                        Alexandria
                    </div>
                    <div class="col">
                        Aswan
                    </div>
                    <div class="col">
                        Asyut
                    </div>
                    <div class="col">
                        Beheira
                    </div>
                    <div class="col">
                        Beni Suef
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col">
                        Cairo
                    </div>
                    <div class="col">
                        Dakahlia
                    </div>
                    <div class="col">
                        Damietta
                    </div>
                    <div class="col">
                        Faiyum
                    </div>
                    <div class="col">
                        Gharbia
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col">
                        Giza
                    </div>
                    <div class="col">
                        Ismailia
                    </div>
                    <div class="col">
                        Kafr El Sheikh
                    </div>
                    <div class="col">
                        Luxor
                    </div>
                    <div class="col">
                        Matruh
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col">
                        Minya
                    </div>
                    <div class="col">
                        Monufia
                    </div>
                    <div class="col">
                        New Valley
                    </div>
                    <div class="col">
                        North Sinai
                    </div>
                    <div class="col">
                        Port Said
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col">
                        Qalyubia
                    </div>
                    <div class="col">
                        Qena
                    </div>
                    <div class="col">
                        Red Sea
                    </div>
                    <div class="col">
                        Sharqia
                    </div>

                    <div class="col">
                        Sohag
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col">
                        South Sinai
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col">
                        Suez
                    </div>
                </div>
            </div>
        </div>





        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
            integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
            integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
        </script>
    @endsection
    {{-- @extends('ui.footer') --}}
</body>

</html>
