<!DOCTYPE html>
<html>
<title>dashboard</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<body>

    <!-- Sidebar -->
    <div class="w3-sidebar w3-light-grey w3-bar-block" style="width:14%;">
        <h3 class="w3-bar-item" style="background-color: #003580;color:white;">dashboard Owner</h3>
        <h3>
            <a href="{{ url('addproperty') }}" class="w3-bar-item w3-button">properies</a>
            <a href="{{ url('UserProperties') }}" class="w3-bar-item w3-button">request</a>
        </h3>

    </div>
    <!-- Page Content -->
    <div style="margin-left:14%">

        <div class="w3-container w3-teal" style="background-color:#003580 !important;">
            <h1 style="display:inline-block;">Dashboard Owner</h1>
            <a href="{{url('home')}}" class="btn btn-primary m-2" style="float: right;">Home</a>
        </div>
        <div class="w3-container">

            @yield('dashboardowner')

        </div>


        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>

</html>
