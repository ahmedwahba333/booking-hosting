<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <link rel="stylesheet" href="/assets/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/bookingForSharing.css') }}">
    <title>Booking for sharing</title>
</head>

<body>
    @extends('ui.temp')

    @section('body')
        <!--      section       -->


        <section class="section0">
            <article class="article0">
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" style="width: 100%;">
                    <div class="carousel-indicators">

                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                            class="active" aria-current="true" aria-label="Slide 1"></button>

                        @for ($i = 2; $i <= count($data->Propertyimg) + 1; $i++)
                            <button type="button" data-bs-target="#carouselExampleIndicators"
                                data-bs-slide-to="{{ $i - 1 }}" aria-label="Slide {{ $i }}"></button>
                        @endfor
                    </div>
                    <div class="carousel-inner">
                        {{-- {{ dd($data->Propertyimg )}} --}}

                        {{-- <img src="/storage/imgs/{{$item['image']}}" class="d-block w-100" alt="..."> --}}


                        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">

                                <div class="carousel-item active">

                                    <img src="/storage/imgs/{{ $data->Propertyimg[0]['image'] }}" class="d-block w-100"
                                        alt="...">
                                </div>
                                @foreach ($data->Propertyimg as $item)
                                    <div class="carousel-item">
                                        <img src="/storage/imgs/{{ $item['image'] }}" class="d-block w-100" alt="...">
                                    </div>
                                @endforeach

                            </div>

                        </div>



                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>

                {{--
            <div>
                <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis, illum et
                    quia corrupti, maiores, assumenda quas quo blanditiis mollitia id eaque ex magni neque explicabo
                    ipsam quasi aliquid molestiae vel aliquam cupiditate voluptatem maxime nesciunt dolore! Nam mollitia
                    sequi, ab, architecto harum minima, suscipit animi perspiciatis similique commodi fugit eaque!</p>

            </div> --}}


            </article>





            <!--             aside              -->




            <aside>
                <div class="upperComment">
                    {{-- <img src="./assets/imgs/profile-picture.jpg" class="profileImg" alt=""> --}}
                    <h4 class="paragAside"> <i class="fa-solid fa-user"></i></h4>
                    {{-- @foreach ($items as $item)
                <h2> {{$item->User->email}}</h2>
                @endforeach --}}
                    <h4 class="paragAside">{{ $data->User->name }}</h4>

                    <h4 class="paragAside">added Date : <span>{{ $data->created_at }}</span> <i
                            class="fa-solid fa-calendar-days"></i></h4>
                    {{-- <a href="" class="aComments paragAside">view profile</a> --}}

                </div>



                <div>
                    <h2 class="description">
                        <i class="fa-brands fa-servicestack"></i>
                        Features and Services:<br>
                        @foreach ($data->services as $item)
                            {{ $item->name }}
                        @endforeach
                    </h2>
                </div>
                <div class="cabacity00">
                    <div class="cabacity0">
                        <p class="cabacity"><i class="fa-solid fa-money-bill-1-wave"></i> Price </p>
                        <p class="cabacity" id="cabacityNum"> {{ $data->price }}</p>
                    </div>
                    <div class="cabacity0">
                        <p class="cabacity"><i class="fa-solid fa-user-group"></i> Capacity </p>
                        <p class="cabacity" id="cabacityNum"> {{ $data->capacity }}</p>
                    </div>
                    {{-- <div class="cabacity0">
                    <p class="cabacity">Availavle</p>
                    <p class="cabacity" id="availableNum"></p>
                </div> --}}
                </div>
                <div class="choose0">
                    <button class="bookNow" onclick="showPopUpSharing()"><i class="fa-brands fa-first-order"></i> Book
                        now!</button>
                </div>

                <!-- <form action="" class="formInput">

                        <input type="text" class="commentsInput" name="comment" placeholder="Enter your comment :)" id="">
                        <input type="submit" class="submit" value="Submit">
                    </form> -->
                </div>


            </aside>
        </section>




        <!-- popUp form -->


        <div id="popUpSharing" class="hidePopUpSharing">
            <div class="popUpSharingChild">
                <form action="{{ route('storeUser') }}" method="post" enctype="multipart/form-data"
                    class="popUpSharingChild2">
                    @csrf
                    <label class="formContentPopUp labelContentPopUp" for="description">do you want to tell the owner
                        anything about you?</label>
                    <input class="formContentPopUp textContentPopUp" type="text" name="description">
                    <label for="startDate">start date</label>
                    <input type="date" name="startdate">
                    <label for="endDate">end date</label>
                    <input type="date" name="enddate">
                    <input type="text" hidden value="{{ $data['id'] }}" name="property_id">
                    <input class="formContentPopUp submitContentPopUp" id="disableSubmitContentPopUp"
                        onclick="clickBookingSharing()" type="submit" value="Book Now">
                </form>
                <button class="formContentPopUp goBackContentPopUp" onclick="hidePopUpSharing()">go back</button>
            </div>
        </div>



        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
        </script>
        <script src="{{ asset('assets/bookingForSharing.js') }}"></script>
    @endsection
</body>

</html>
