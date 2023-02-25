<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DashBoard</title>
    <link rel="stylesheet" href="assets/dashboardOwnerEdit.css">
</head>

<body>


    @extends('ui.temp')

    @section('body')
        <aside>
            <div class="sidebar">
                <h1 class="heading0">dashboard owner</h1>
                <button onclick="showServices()" id="RequestsBtn" class="listSideBar"> Services </button>
                <button onclick="showFlats()" id="FlatsBtn" class="listSideBar"> Properties </button>
                <button onclick="showRequests()" id="RequestsBtn" class="listSideBar"> Requests </button>
            </div>



            <div class="article">
                <h1 class="heading0">dashboard owner</h1>


                <!-- services -->


                <div class="services hideTable" id="services0">

                    <h2 class="heading">which service do you have..</h2>

                    <div class="booking01main">

                        <div class="booking01Btns">
                            <button onclick="showBooking()" id="myBtnBooking" class="booking0">Booking</button>
                            <button onclick="showHosting()" id="myBtnHosting" class="booking0">
                                Hosting</button>
                        </div>

                        <!-- booking -->
                        <div id="myModalBooking" class="modalBooking modelBook hideTable">
                            <p>Show your Property for booking</p>
                            <form action="{{ route('update', ['id' => $data['id']]) }}" method="post"
                                enctype="multipart/form-data">
                                @csrf

                                <label for="" class="Label">Country</label>
                                <input type="text" name="country" id="" value="{{ $data['country'] }}">

                                <label for="" class="Label">City</label>
                                <input type="text" name="city" id="" value="{{ $data['city'] }}">

                                <label for="" class="Label">Street</label>
                                <input type="text" name="street" id="" value="{{ $data['street'] }}">

                                <label for="" class="Label">Capacity</label>
                                <input type="number" name="capacity" id="" value="{{ $data['capacity'] }}">

                                <label for="" class="Label">Price</label>
                                <input type="number" name="price" id="" value="{{ $data['price'] }}">

                                <label for="" class="Label">Availablity</label>
                                <input type="text" name="isAvailable" id="" value="{{ $data['isAvailable'] }}">

                                <label for=""></label>
                                <input type="file" id="img" name="imgs[]" multiple>
                                <button type="submit" class="submitbtn">Submit</button>
                            </form>
                        </div>

                        <!-- Hosting -->
                        <div id="myModalHosting" class="modalHosting modelBook hideTable">
                            <p>Show your flat for hosting</p>
                            <form action="{{ route('update', ['id' => $data['id']]) }}" method="post"
                                enctype="multipart/form-data">
                                @csrf

                                <label for="">Country</label>
                                <input type="text" name="country" id="">

                                <label for="">City</label>
                                <input type="text" name="city" id="">

                                <label for="">Street</label>
                                <input type="text" name="street" id="">

                                <label for="">Capacity</label>
                                <input type="number" name="capacity" id="">

                                <label for="">Insert 4 Pictures</label>
                                <input type="file" id="img" name="imgs[]" multiple>
                                <button type="submit" class="submitbtn">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>





                <!--    Properties    -->

                {{--
                <div class="hideTable" id="flats">

                    <h2>Properties</h2>
    <a href="{{route('addproperty')}}">add Property </a>
    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">country</th>
            <th scope="col">city</th>
            <th scope="col">street</th>
            <th scope="col">capacity</th>
            <th scope="col">price</th>
            <th scope="col">isavailable</th>
            <th scope="col">image</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>

        <tbody>
            @foreach ($properties as $property)
            <tr>
                <td>{{$property["country"]}}</td>
                <td>{{$property["city"]}}</td>
                <td>{{$property["street"]}}</td>
                <td>{{$property["capacity"]}}</td>
                <td>{{$property["price"]}}</td>
                <td>{{$property["isavailable"]}}</td>
                <td><img src="storage/imgs/{{$property["img"]}}" width="50 px" ></td>
                <td><a href="{{route("delete",["id"=>$property["id"]])}}" >delete </a>
                    <a href="{{route("edit",["id"=>$property["id"]])}}" >edit </a>
                </td>
            </tr>
            @endforeach
        </tbody>

      </table>

                </div> --}}

                <!--    requests    -->


                <div class="hideTable" id="Requests">
                    <h2>Requests</h2>
                    <table>
                        <tr>
                            <!-- for owners -->
                            <th>ID</th>
                            <th>National ID</th>
                            <th>Full Name</th>
                            <th>Birth Date</th>
                            <th>Email</th>
                            <th>Gender</th>
                            <th>Phone Number</th>
                            <th>Address</th>
                        </tr>
                        <tr>
                            <!-- for owners -->
                            <td>1</td>
                            <td>29711010101101</td>
                            <td>mohamed hasan</td>
                            <td>01/11/1997</td>
                            <td>mohamed@yahoo.com</td>
                            <td>male</td>
                            <td>01116002720</td>
                            <td>cairo,Egypt</td>
                        </tr>
                    </table>
                </div>




            </div>
            </div>
        </aside>

        {{-- <div class="hello">

            <h1>Contact Us</h1>

            <div class="bar1"></div>
            <div class="bar"></div>

            <div class="parag3">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur, qui reiciendis? Modi. Lorem
                    ipsum dolor sit amet<br>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Lorem, ipsum dolor.</p>
            </div>
            <div class="contact">
                <p>phone: +201116002720 / +201069780368</p>
                <p>Email: Ahmedmismail39@gmail.com</p>
            </div>

            <div class="locemail">
                <p>Location:Location On Map</p>
                <div class="srchmail">
                    <input class="email" type="email" placeholder="Subscribe Your Mail" aria-label="email">
                    <button class="sub" type="submit">SUBMIT</button>
                </div>

            </div>
            <div class="copyright">
                <p>CopyRight © 2022 Company Name - Design: <span>iti team 1</span> </p>

            </div>

            <div class="aHeader0">

                <a class="aHeader" href="">
                    <i class="fa-brands fa-facebook"></i>
                </a>
                <a class="aHeader" href="">
                    <i class="fa-brands fa-twitter"></i>
                </a>
                <a class="aHeader" href="">
                    <i class="fa-solid fa-envelope"></i>
                </a>
                <a class="aHeader" href="">
                    <i class="fa-solid fa-phone-volume"></i>
                </a>
            </div>
        </div> --}}

    </body>
    <script src="assets/dashboardOwner.js"></script>

    </html>
