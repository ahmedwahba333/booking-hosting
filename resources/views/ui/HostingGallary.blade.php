<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="keyword" contect="Booking and Hosting">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="discription" content="Booking apartment">

    <link rel="stylesheet" href="css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('assets/HostingGallary.css') }}">
</head>

<body onload="load()">

    @extends('ui.temp')
    @section('body')
        <div class="img1">
            <span class="address">
                <h1 class="head">Hosting Gallery </h1>
                <br>
                <p class="paragraph">you can be Hosted now, find a hoster and enjoy your stay with other people
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

                <img src="assets/BookingGalleryImg/Hostingimage.png" style="  width:25%  ; height:10%; box-shadow:none">
            </div>

            <div class="gallary1">







                @foreach ($Property as $zz)
                    @if ($zz['isavailable'] == 'yes')
                        <div class="card">

                            @if (isset($zz->Propertyimg[0]))
                                <img class="imgcard"src="/storage/imgs/{{ $zz->Propertyimg[0]['image'] }}">
                            @else
                                <img class="imgcard"src="/st">
                            @endif
                            <div class="view">
                                <article class="prizesign">for service</article>
                                <article class="prize1">{{ $zz['country'] }}</article>
                                <aside class="prize2">{{ $zz['city'] }}</aside>
                                <aside class="prize3">{{ $zz['street'] }}</aside>

                                <aside class="prize3">available: {{ $zz['isavailable'] }}</aside>


                                <a href="{{ route('property.host', ['id' => $zz['id']]) }}">
                                    <button class="button"> View</button> </a>

                            </div>
                        </div>
                        </form>
                    @endif
                @endforeach
            </div>
        </div>



        {{--

     <script src="assets/productcard.js"></script> --}}

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
            integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
            integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
        </script>
    @endsection
</body>

</html>
