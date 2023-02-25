<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DashBoard</title>
    <link rel="stylesheet" href="assets/dashboardOwner.css">
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
                            <p>
                            <h1>Show your Property for booking</h1>
                            </p>
                            <form action="{{ route('store') }}" method="post" enctype="multipart/form-data">
                                @csrf

                                <label for="" class="Label">Country</label>
                                <input type="text" name="country" id="">
                                <br><br>
                                <label for="" class="Label">City</label>
                                <input type="text" name="city" id="">
                                <br><br>
                                <label for="" class="Label">Street</label>
                                <input type="text" name="street" id="">
                                <br><br>
                                <label for="" class="Label">Capacity</label>
                                <input type="number" name="capacity" id="">
                                <br><br>
                                <label for="" class="Label">Price</label>
                                <input type="number" name="price" id="">
                                <br><br>
                                <label for="" class="Label">Availablity</label>
                                <input type="text" name="isAvailable" id="">
                                <br><br>
                                <label for="">insert 4 Pictures</label>
                                <input type="file" id="img" name="imgs[]" multiple>


                                <label for="">
                                    <h1>services</h1>
                                </label>
                                <br>
                                @foreach ($services as $service)
                                    <input type="checkbox" name="services[]" value=" {{ $service['id'] }}">
                                    {{ $service['name'] }} <br />
                                @endforeach
                                <button type="submit" class="submitbtn">Submit</button>




                            </form>
                        </div>

                        <!-- Hosting -->
                        <div id="myModalHosting" class="modalHosting modelBook hideTable">
                            <p>Show your flat for hosting</p>
                            <form action="{{ route('store') }}" method="post" enctype="multipart/form-data">
                                @csrf

                                <label for="">Country</label>
                                <input type="text" name="country" id="">

                                <label for="">City</label>
                                <input type="text" name="city" id="">

                                <label for="">Street</label>
                                <input type="text" name="street" id="">

                                <label for="">Insert 4 Pictures:<br>

                                </label>
                                <input type="file" id="img" name="imgs[]" multiple>
                                <input type="text" hidden  name = "user_id" value="{{Auth::id()}}">

                                @foreach ($services as $services)
                                    <input type="checkbox" name="services[]" value=" {{ $services['id'] }}">
                                    {{ $services['name'] }} <br />
                                @endforeach

                                <button type="submit" class="submitbtn">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>



                <!--    Properties    -->


                <div class="hideTable" id="flats">

                    <h2>Properties</h2>
                    <a href="{{ route('addproperty') }}">add Property </a>
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
                                    {{-- {{dd($property->Propertyimg)}} --}}
                                    <td>{{ $property['country'] }}</td>
                                    <td>{{ $property['city'] }}</td>
                                    <td>{{ $property['street'] }}</td>
                                    <td>{{ $property['capacity'] }}</td>
                                    <td>{{ $property['price'] }}</td>
                                    <td>{{ $property['isavailable'] }}</td>



                                    @if (isset($property->Propertyimg['0']))
                                        <td><img src="storage/imgs/{{ $property->Propertyimg['0']['image'] }}"
                                                width="50 px"></td>
                                    @endif
                                    <td><a href="{{ route('delete', ['id' => $property['id']]) }}">delete </a>
                                        <a href="{{ route('edit', ['id' => $property['id']]) }}">edit </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>

                    </table>

                </div>

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

    </body>
    <script src="assets/dashboardOwner.js"></script>

    </html>
