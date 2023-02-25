<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/home.css">
    <link rel="stylesheet" href="assets/aboutUs.css">
    <title>About Us</title>
</head>

<body>

    @extends('ui.temp')
    @section('body')

        <section class="section">
            <div class="aside0 aside01">
                <div class="aside">
                    <h1>Booking & Hosting</h1>
                </div>
            </div>
            <div class="description">
                <p class="paragSec">Founded in 2022 in Egypt, Booking & Hosting has grown from a small startup to one of
                    the world’s leading digital Booking companies. Part of Booking & Hosting,
                    Booking & Hosting’s mission is to make it easier for everyone to experience the world.

                    By investing in the technology that helps take the friction out of travel, Booking & Hosting seamlessly
                    connects millions of travellers with memorable experiences, a range of transport options and incredible
                    places to stay - from homes to hotels and much more. As one of the world’s largest travel marketplaces
                    for both established brands and entrepreneurs of all sizes, Booking & Hosting enables properties all over the
                    world to reach a global audience and grow their businesses.

                    Booking & Hosting is available in 43 languages and offers more than 28 million total reported accommodation
                    listings, including over 6.6 million listings alone of homes, apartments and other unique places to
                    stay. No matter where you want to go or what you want to do, Booking & Hosting makes it easy and backs it all
                    up with 24/7 customer support.</p>
            </div>
        </section>

        <aside class="aside0">
            <div class="aside">
                <h1>Project Founders</h1>
            </div>
        </aside>


        <article>
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="card" style="width: 18rem;">
                            <img src="assets/aboutUsImgs/marinaAyman.jpg" class="card-img-top imgCard" alt="...">
                            <div class="card-body">
                                <p class="card-text">Marina Ayman</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card" style="width: 18rem;">
                            <img src="assets/aboutUsImgs/ahmedMostafa.jpg" class="card-img-top imgCard" alt="...">
                            <div class="card-body">
                                <p class="card-text">Ahmed Mostafa</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card" style="width: 18rem;">
                            <img src="assets/aboutUsImgs/fatmaRamadan.jpg" class="card-img-top imgCard" alt="...">
                            <div class="card-body">
                                <p class="card-text">Fatma Ramadan</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="card" style="width: 18rem;">
                            <img src="assets/aboutUsImgs/shimaaAhmed.jpg" class="card-img-top imgCard" alt="...">
                            <div class="card-body">
                                <p class="card-text">Shimaa Ahmed</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card" style="width: 18rem;">
                            <img src="assets/aboutUsImgs/ahmedObaida.jpg" class="card-img-top imgCard" alt="...">
                            <div class="card-body">
                                <p class="card-text">Ahmed Obaida</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card" style="width: 18rem;">
                            <img src="assets/aboutUsImgs/fatmaElzahraa.jpg" class="card-img-top imgCard" alt="...">
                            <div class="card-body">
                                <p class="card-text">Fatma Elzahraa</p>
                            </div>
                        </div>
                    </div>
                </div>



            </div>
        </article>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
    @endsection



</body>

</html>
