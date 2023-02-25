<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="keyword" contect="Booking and Hosting">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="discription" content="Booking apartment">
    <title>Booking Gallery</title>

    <link rel="stylesheet" href="css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('assets/BookingGallery.css') }}">

</head>


<body>



    @extends('ui.temp')
    @section('body')
        <div class="img1">
            <span class="address">
                <h1 class="head">Booking Gallery For Group</h1>
                <br>
                <p class="paragraph">Booking now for yourself and enjoy your stay with others
                </p>

            </span>
        </div>



        <div>
            <div class="viewimg" style="text-align:center">
                <img src="assets/BookingGalleryImg/himg/218887704.jpg" style="  width:10%  ; height:10%; box-shadow:none">
                <img src="assets/BookingGalleryImg/bimg/images.jfif" style="  width:10%  ; height:10%; box-shadow:none">
                <img src="assets/BookingGalleryImg/images (25).jfif" style="  width:10%  ; height:10%; box-shadow:none">
                <img src="assets/BookingGalleryImg/images (3).jfif" style="   width:10%  ; height:10%; box-shadow:none">
                <img src="assets/BookingGalleryImg/images (20).jfif" style="  width:10%  ; height:10%; box-shadow:none">
                <img src="assets/BookingGalleryImg/images (23).jfif" style="  width:10%  ; height:10%; box-shadow:none">
                <img src="assets/BookingGalleryImg/images (19).jfif" style="   width:10% ; height:10%; box-shadow:none">
                <img src="assets/BookingGalleryImg/images (24).jfif" style="   width:10%  ; height:10%; box-shadow:none">

            </div>

            <hr>
            <div style="text-align: center">

                <img src="assets/BookingGalleryImg/Bookingimage.png" style="  width:25%  ; height:10%; box-shadow:none">
            </div>



            <div class="gallary1">

                @foreach ($Property as $yy)
                    @if ($yy['isavailable'] == 'yes')
                        <div class="card">

                            @if (!isset($yy->Propertyimg[0]))
                                <img class="imgcard"src="/st">
                            @else
                                <img class="imgcard"src="/storage/imgs/{{ $yy->Propertyimg[0]['image'] }}">
                            @endif
                            <div class="view">
                                <article class="prizesign"> {{ $yy['price'] }}$ </article>
                                <article class="prize1">{{ $yy['country'] }}</article>
                                <aside class="prize2">{{ $yy['city'] }}</aside>
                                <aside class="prize3">{{ $yy['street'] }}</aside>
                                <aside class="prize3">capacity: {{ $yy['capacity'] }}</aside>
                                <aside class="prize3">available: {{ $yy['isavailable'] }}</aside>


                                <a href="{{ url('groupproperty', ['id' => $yy['id']]) }}">
                                    <button class="button"> View</button> </a>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
            integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
            integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
        </script>
    @endsection
</body>

</html>
