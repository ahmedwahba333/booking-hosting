@extends('dashboardOA.dashownerTemp')
@section('dashboardowner')
    <style>
        .hideTable {
            display: none;
        }
        .bookingBtn{
            width: 40%;
            height: 3rem;
            margin: 2rem
        }
    </style>
    <div class="booking01Btns">
        <button onclick="showBooking()" id="myBtnBooking" class="btn btn-primary bookingBtn">Booking</button>
        <button onclick="showHosting()" id="myBtnHosting" class="btn btn-primary bookingBtn">
            Hosting</button>
    </div>
    <form class="row g-3 modelBook hideTable" id="myModalBooking" action="{{ route('storeproperty') }}" method="post"
        enctype="multipart/form-data">
        @csrf
        <h1>Show your Property for booking</h1>
        <div class="col-md-6">
            <label for="" class="form-label" style="font-weight: bold">Country</label>
            <input type="text" name="country" class="form-control" placeholder="Enter your country">
        </div>
        <div class="col-md-6">
            <label for="" class="form-label" style="font-weight: bold">City</label>
            <input type="text" name="city" class="form-control" placeholder="Enter your City">
        </div>
        <div class="col-12">
            <label for="" class="form-label" style="font-weight: bold">Street</label>
            <input type="text" name="street" class="form-control" placeholder="Enter your street">
        </div>
        <div class="col-12">
            <label for="" class="form-label" style="font-weight: bold">Capacity</label>
            <input type="number" name="capacity" class="form-control" placeholder="Enter the capacity of people">
        </div>
        <div class="col-md-8">
            <label for="" class="form-label" style="font-weight: bold">Price</label>
            <input type="number" name="price" class="form-control" placeholder="Enter the price">
        </div>
        <div class="col-md-8">

            <input type="text" name="isavailable" class="form-control" placeholder="Enter the price"  hidden value="no">

        </div>
        <div class="col-md-4">
            <label for="" class="form-label" style="font-weight: bold">insert Pictures</label>
            <input type="file" class="form-control" id="img" name="imgs[]" multiple>

        </div>
        <div class="col-md-12 form-check">
            <label for="" class="form-check-label" style="font-weight: bold">
                services
            </label>
            <br>

            @foreach ($services as $service)
                <input type="checkbox" class="form-check-input" name="services[]" value=" {{ $service['id'] }}">
                {{ $service['name'] }} <br />
            @endforeach
        </div>
        <div class="col-12">
            <button type="submit" class="submitbtn btn btn-primary">Submit</button>
        </div>
    </form>





    <form class="row g-3 modelBook hideTable" id="myModalHosting" action="{{ route('storeproperty') }}" method="post"
        enctype="multipart/form-data">
        @csrf
        <h1>Show your Property for Hosting</h1>
        <div class="col-md-6">
            <label for="" class="form-label" style="font-weight: bold">Country</label>
            <input type="text" name="country" class="form-control" placeholder="Enter your country">
        </div>
        <div class="col-md-6">
            <label for="" class="form-label" style="font-weight: bold">City</label>
            <input type="text" name="city" class="form-control" placeholder="Enter your City">
        </div>
        <input type="text" name="isavailable" class="form-control" placeholder="Enter the price"  hidden value="no">

        <div class="col-12">
            <label for="" class="form-label" style="font-weight: bold">Street</label>
            <input type="text" name="street" class="form-control" placeholder="Enter your street">
        </div>
        <div class="col-12">
            <label for="" class="form-label" style="font-weight: bold" hidden>Capacity</label>
            <input type="number" name="capacity" value="1" hidden class="form-control"
                placeholder="Enter the capacity of people">
        </div>
        <div class="col-md-8">
            <label for="" class="form-label" style="font-weight: bold" hidden>Price</label>
            <input type="number" name="price" value="0" hidden class="form-control"
                placeholder="Enter the price">
        </div>
        <div class="col-md-4">
            <label for="" class="form-label" style="font-weight: bold">insert Pictures</label>
            <input type="file" class="form-control" id="img" name="imgs[]" multiple>

        </div>
        <div class="col-md-12 form-check">
            <label for="" class="form-check-label" style="font-weight: bold">
                services
            </label>
            <br>

            @foreach ($services as $service)
                <input type="checkbox" class="form-check-input" name="services[]" value=" {{ $service['id'] }}">
                {{ $service['name'] }} <br />
            @endforeach
        </div>
        <div class="col-12">
            <button type="submit" class="submitbtn btn btn-primary">Submit</button>
        </div>
    </form>

    <script src="assets/dashboardOwner.js"></script>
@endsection






{{-- <div class="services hideTable" id="services0">

        <h2 class="heading">which service do you have..</h2>

        <div class="booking01main">

            <div class="booking01Btns">
                <button onclick="showBooking()" id="myBtnBooking" class="booking0">Booking</button>
                <button onclick="showHosting()" id="myBtnHosting" class="booking0">
                    Hosting</button>
            </div> --}}


<!-- booking -->
{{-- <div id="myModalBooking" class="modalBooking modelBook hideTable">
                <p>
                <h1>Show your Property for booking</h1>
                </p>
                <form action="{{ route('storeproperty') }}" method="post" enctype="multipart/form-data">
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
                    <br><br> --}}
{{-- <label for="" class="Label">Availablity</label>
                    <input type="text" name="isavailable" id=""> --}}
{{-- <br><br>
                    <label for="">insert Pictures</label>
                    <input type="file" id="img" name="imgs[]" multiple>


                    <label for="">
                        <h1>services</h1>
                    </label>
                    <br>

                    @foreach ($services as $service)
                        <input type="checkbox" name="services[]" value=" {{ $service['id'] }}">
                        {{ $service['name'] }} <br />
                    @endforeach-
                    <button type="submit" class="submitbtn">Submit</button>




                </form> --}}






{{-- </div> --}}

<!-- Hosting -->
{{-- <div id="myModalHosting" class="modalHosting modelBook hideTable">
                <p>Show your flat for hosting</p>
                <form action="{{ route('storeproperty') }}" method="post" enctype="multipart/form-data">
                    @csrf

                    <label for="">Country</label>
                    <input type="text" name="country" id="">

                    <label for="">City</label>
                    <input type="text" name="city" id="">

                    <label for="">Street</label>
                    <input type="text" name="street" id="">


                    <input type="number" name="price" value="0" hidden>
                    <input type="number" name="capacity" value="1" hidden>
                    <br><br>

                    <label for="">Insert Pictures:<br>

                    </label>
                    <input type="file" id="img" name="imgs[]" multiple>
                    <input type="text" hidden name="user_id" value="{{ Auth::id() }}">


                    @foreach ($services as $services)
                        <input type="checkbox" name="services[]" value=" {{ $services['id'] }}">
                        {{ $services['name'] }} <br />
                    @endforeach

                    <button type="submit" class="submitbtn">

                        Submit
                    </button>
                </form>
            </div> --}}
{{-- </div>
    </div> --}}





{{-- <script src="assets/dashboardOwner.js"></script> --}}
