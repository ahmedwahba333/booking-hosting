<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/dashboardAdmin.css">
    <title>Dashboard Admin</title>
</head>

<body>
    @extends('ui.temp')
    @section('body')
        <aside>

            <div class="sidebar">
                <h1 class="heading0">dashboard admin</h1>

                <button onclick="showUsers()" id="UsersBtn" class="listSideBar"> Users </button>
                <button onclick="showOwners()" id="OwnersBtn" class="listSideBar"> Owners </button>
                <button onclick="showFlats()" id="FlatsBtn" class="listSideBar"> Flats </button>
                <button onclick="showRequests()" id="RequestsBtn" class="listSideBar"> Requests </button>
                <a href="addService" style="text-align: center; width:100%;"><button onclick="showRequests()"
                        id="RequestsBtn" class="listSideBar"> add services
                    </button></a>
            </div>


            <div class="article">
                <h1 class="heading0">dashboard admin</h1>



                <div class="hideTable" id="users">
                    <h2>Customer</h2>

                    <a href="logIn">
                        <button>ADD Users</button></a>

                    <table>


                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">firstname</th>
                                <th scope="col">lastname</th>
                                <th scope="col">nid</th>
                                <th scope="col">email</th>
                                <th scope="col">role</th>
                                <th scope="col">gender</th>
                                <th scope="col">phone</th>
                                <th scope="col">birthdate</th>
                                <th scope="col">country</th>
                                <th scope="col">city</th>
                                <th scope="col">street</th>
                                <th scope="col">email_verified_at</th>
                                <th scope="col">password</th>
                                <th scope="col">image</th>
                                <th scope="col">created at</th>
                                <th scope="col">updated_at</th>
                                <th scope="col">delete</th>

                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                @foreach ($Users as $XX)
                                    <td>{{ $XX['id'] }}</td>
                                    <td>{{ $XX['name'] }}</td>
                                    <td>{{ $XX['lastname'] }}</td>
                                    <td>{{ $XX['nid'] }}</td>
                                    <td>{{ $XX['email'] }}</td>
                                    <td>{{ $XX['role'] }}</td>
                                    <td>{{ $XX['gender'] }}</td>
                                    <td>{{ $XX['phone'] }}</td>
                                    <td>{{ $XX['birthdate'] }}</td>
                                    <td>{{ $XX['country'] }}</td>
                                    <td>{{ $XX['city'] }}</td>
                                    <td>{{ $XX['street'] }}</td>
                                    <td>{{ $XX['email'] }}</td>
                                    <td>{{ $XX['password'] }}</td>
                                    <td></td>
                                    {{-- <td><img src="Storage/img/{{ $item['img'] }}" style="width: 50px" alt=""></td> --}}
                                    <td>{{ $XX['created_at'] }}</td>
                                    <td>{{ $XX['updated_at'] }}</td>
                                    <td> <a href="{{ route('delete', ['id' => $XX['id']]) }}">delete</a></td>

                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="hideTable" id="flats">
                    <h2>flats</h2>
                    <table>
                        <tr>
                            <th>ID</th>
                            <th>Status</th>
                            <th>Is Available</th>
                            <th>Address</th>
                            <th>Capacity</th>
                            <th>Price</th>
                            <th>wi-fi</th>
                            <th>Rooms</th>
                            <th>elevator</th>
                            <th>Air-Condition</th>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Pending</td>
                            <td>yes</td>
                            <td>elsail,aswan</td>
                            <td>5</td>
                            <td>3000</td>
                            <td>yes</td>
                            <td>4</td>
                            <td>no</td>
                            <td>yes</td>
                        </tr>
                    </table>
                </div>

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
                            <!-- for flats -->
                            <th>ID</th>
                            <th>Status</th>
                            <th>Is Available</th>
                            <th>Address</th>
                            <th>Capacity</th>
                            <th>Price</th>
                            <th>wi-fi</th>
                            <th>Rooms</th>
                            <th>elevator</th>
                            <th>Air-Condition</th>
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
                            <!-- for flats -->
                            <td>1</td>
                            <td>Pending</td>
                            <td>yes</td>
                            <td>elsail,aswan</td>
                            <td>5</td>
                            <td>3000</td>
                            <td>yes</td>
                            <td>4</td>
                            <td>no</td>
                            <td>yes</td>
                        </tr>
                    </table>
                </div>
            </div>
        </aside>




        <script src="assets/dashboardAdmin.js"></script>
    </body>

    </html>
