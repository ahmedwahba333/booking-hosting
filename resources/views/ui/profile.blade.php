<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./assets/css/all.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <link rel="stylesheet" href="./assets/profile.css">
    <title>Profile</title>
</head>

<body>

    @extends('ui.temp')
    @section('body')
        <section class="section">


            <div class="card cardFirst">
                <!-- <div class="form1"> -->
                <img class="img" src="./assets/Empty State Concept.jpg">
                <h2 id="fName">{{ $name = Auth::user()->name }}</h2> <!-- ERROR -->
                <div class="hHeading">
                    {{-- auth->user->"name" --}}
                    {{-- $email = Auth::user()->email; --}}
                    <h3 id="myEmail">Email: {{ $email = Auth::user()->email }}</h3>

                    <hr>
                    <h3 id="birthDate">Birthdate: {{ $birthdate = Auth::user()->birthdate }}</h3><!-- ERROR -->
                    <hr>
                    <h3 id="nid">National ID: {{ $nid = Auth::user()->nid }}</h3>
                    <hr>
                    <h3 id="myPhoneNum">Phone: {{ $phone = Auth::user()->phone }}</h3>
                    <hr>
                    <h3 id="gender">Gender: {{ $gender = Auth::user()->gender }}</h3>
                </div>
                {{-- <div class="booking01Btns">
                    <button onclick="showPopUpSharing()" id="myBtnBooking" class="booking0">add bio</button>
                </div> --}}
            </div>






            {{--
            <div id="popUpSharing" class="hidePopUpSharing card cardMid">


                <div class="popUpSharingChild">
                    <input class="formContentPopUp goBackContentPopUp" onclick="hidePopUpSharing()" type="submit"
                        value="SUBMIT">
                    <div id="myModalBooking" class="modalBio modelBook hideTable">
                        <label for="" class="Label">tell more about your self</label>
                        <input type="text" name="" id="bioTextID" class="bioText">
                    </div>

                    <div id="myModalHosting" class="modalBioCheck modelBook hideTable">
                        <fieldset style="border-radius: 20px;">
                            <legend>Hoppies</legend>
                            <div>
                                <input class="checkProfile" type="checkbox" value="Blogging">
                                <label for="">Blogging</label>
                            </div>
                            <div>
                                <input class="checkProfile" type="checkbox" value="Reading">
                                <label for="">Reading</label>
                            </div>
                            <div>
                                <input class="checkProfile" type="checkbox" value="Learning a new language">
                                <label for="">Learning a new language</label>
                            </div>
                            <div>
                                <input class="checkProfile" type="checkbox" value="Journaling">
                                <label for="">Journaling</label>
                            </div>
                            <div>
                                <input class="checkProfile" type="checkbox" value="Staying informed">
                                <label for="">Staying informed</label>
                            </div>
                            <div>
                                <input class="checkProfile" type="checkbox" value="Vacation planning">
                                <label for="">Vacation planning</label>
                            </div>
                            <div>
                                <input class="checkProfile" type="checkbox" value="Gardening">
                                <label for="">Gardening</label>
                            </div>
                            <div>
                                <input class="checkProfile" type="checkbox" value="Hiking">
                                <label for="">Hiking</label>
                            </div>
                            <div>
                                <input class="checkProfile" type="checkbox" value="Camping">
                                <label for="">Camping</label>
                            </div>
                            <div>
                                <input class="checkProfile" type="checkbox" value="Nature identification">
                                <label for="">Nature identification</label>
                            </div>
                            <div>
                                <input class="checkProfile" type="checkbox" value="Playing an instrument">
                                <label for="">Playing an instrument</label>
                            </div>
                            <div>
                                <input class="checkProfile" type="checkbox" value="Nail art">
                                <label for="">Nail art</label>
                            </div>
                            <div>
                                <input class="checkProfile" type="checkbox" value="Origami">
                                <label for="">Origami</label>
                            </div>
                            <div>
                                <input class="checkProfile" type="checkbox" value="Scrapbooking">
                                <label for="">Scrapbooking</label>
                            </div>
                            <div>
                                <input class="checkProfile" type="checkbox" value="Running">
                                <label for="">Running</label>
                            </div>
                            <div>
                                <input class="checkProfile" type="checkbox" value="Dancing">
                                <label for="">Dancing</label>
                            </div>
                            <div>
                                <input class="checkProfile" type="checkbox" value="Yoga">
                                <label for="">Yoga</label>
                            </div>
                            <div>
                                <input class="checkProfile" type="checkbox" value="Rollerblading">
                                <label for="">Rollerblading</label>
                            </div>
                            <div>
                                <input class="checkProfile" type="checkbox" value="Slacklining">
                                <label for="">Slacklining</label>
                            </div>
                            <div>
                                <input class="checkProfile" type="checkbox" value="Baking">
                                <label for="">Baking</label>
                            </div>
                            <div>
                                <input class="checkProfile" type="checkbox" value="Cooking">
                                <label for="">Cooking</label>
                            </div>
                            <div>
                                <input class="checkProfile" type="checkbox" value="Cheesemaking and home brewing">
                                <label for="">Cheesemaking and home brewing</label>
                            </div>
                            <div>
                                <input class="checkProfile" type="checkbox" value="Handicraft">
                                <label for="">Handicraft</label>
                            </div>
                            <div>
                                <input class="checkProfile" type="checkbox" value="Woodburning">
                                <label for="">Woodburning</label>
                            </div>
                            <div>
                                <input class="checkProfile" type="checkbox" value="Budgeting">
                                <label for="">Budgeting</label>
                            </div>
                            <div>
                                <input class="checkProfile" type="checkbox" value="Investing">
                                <label for="">Investing</label>
                            </div>
                            <div>
                                <input class="checkProfile" type="checkbox" value="Shopping">
                                <label for="">Shopping</label>
                            </div>
                        </fieldset>

                    </div>
                </div>
            </div> --}}









            {{-- <div class="card cardMid">
                <div class="smallcardup">
                    <h2>BIO:</h2>

                    <p class="bio2" id="pioProfile0">Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                        Provident aliquam, distinctio deserunt iure qui dolore quas est iste
                        numquam doloribus laboriosam culpa ipsam, praesentium maxime nam
                        placeat enim perferendis explicabo!
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                        Provident aliquam, distinctio deserunt iure qui dolore quas est iste
                        numquam doloribus laboriosam culpa ipsam, praesentium maxime nam
                        placeat enim perferendis explicabo!
                    </p>
                </div>

                <div>
                    <h2> Hoppies :</h2>
                    <p class="hoppy" id="hoppiesProfile0"></p>
                </div>

                <div class="smallcarddown">
                    <h2>Rate</h2>
                    <i class="iconForm3 fa-solid fa-star"></i>
                    <i class="iconForm3 fa-solid fa-star"></i>
                    <i class="iconForm3 fa-solid fa-star"></i>
                    <i class="iconForm3 fa-regular fa-star"></i>
                    <i class="iconForm3 fa-regular fa-star"></i>
                </div>

            </div> --}}






            <div class="card">
                <h2>Flats :</h2>
                <div class="cardFlats" id="flatsInProfile">
                    {{-- <style>
                    th,
                    td {
                        border: 1px solid;
                    }
                </style> --}}
                    <table class="table table-striped table-light">
                        <thead>
                            <tr>
                                <th scope="col">start date</th>
                                <th scope="col">end date</th>
                                <th scope="col">Bio</th>
                                <th scope="col">created at</th>
                                <th scope="col">status</th>
                                {{-- <th scope="col">action</th>
                        <th scope="col">status</th> --}}
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($items as $item)



                                {{-- @foreach (Auth::user()->properties as $item) --}}
                                {{-- {{dd($item)}} --}}
                                <tr>
                                    <td>{{ $item['startdate'] }}</td>
                                    <td>{{ $item['enddate'] }}</td>
                                    <td>{{ $item['description'] }}</td>
                                    {{-- <td><img src="Storage/img/{{ $item['img'] }}" style="width: 50px" alt=""></td> --}}
                                    <td>{{ $item['created_at'] }}</td>
                                    <td>{{ $item['userstatus'] }}</td>
                                </tr>
                              
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>


        </section>


        {{-- <script src="assets/profile.js"></script> --}}
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
    @endsection
</body>

</html>
