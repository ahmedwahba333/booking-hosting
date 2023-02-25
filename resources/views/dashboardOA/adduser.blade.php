@extends('dashboardOA.dashadmintemp')
@section('dashboardadmin')
    <div class="form">
        <h2> Join us </h2>
        {{-- {{ $errors }} --}}
        <form class="row g-3" action="{{ route('storeUser') }}" method="POST">
            @csrf
            <div class="col-12">
                <input class="inputLabel" id="fName" type="text" name="name" placeholder="Enter your first name">
                <label for="firstname" id="fNameLabel"></label>
            </div>
            <div class="col-12">
                <input class="inputLabel" id="lName" type="text" name="lastname" placeholder="Enter your last name">
                <label for="lastname" id="lNameLabel"></label>
            </div>
            <div class="col-12">
                <input class="inputLabel" id="nid" type="text" name="nid" placeholder="Enter your National ID">
                <label for="national id" id="nID"></label>
            </div>
            {{-- <div class="radiop "> --}}
            <div class="radiop col-12" style="margin-top: 10px;">
                <label for="gender">Gender</label><br>
                <input type="radio" name="gender" class="myGender" value="male" style="margin: 10px">Male
                <br>
                <input type="radio" name="gender" class="myGender" value="female" style="margin: 10px">Female
            </div>

            <div class="col-12" style="margin-top: 10px;">
                <label class="radiop" for="gender">Role</label> <br>
                <input type="radio" name="role" class="myGender" value="owner" style="margin: 10px">Owner
                <br>
                <input type="radio" name="role" class="myGender" value="customer" style="margin: 10px">Custumer
            </div>
            {{-- </div> --}}
            <div class="col-12">
                <input class="inputLabel" id="myPhoneNum" type="text" name="phone"
                    placeholder="Enter your phone number">
                <label for="phone number" id="myPhoneNumLabel"></label>
            </div>
            <div class="col-12">
                <input type="date" placeholder="enter your Birth Date" id="birthdate" name="birthdate" />
                <label for="birthDate" id="birthDateLabel"></label>
            </div>
            <div class="col-12">
                <input class="inputLabel" id="myEmail" type="text" name="email" placeholder="Enter your email">
                <label for="email" id="myEmailLabel"></label>
            </div>
            <div class="col-12">
                <input class="inputLabel" id="myPassword"
                    title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"
                    type="password" name="password" placeholder="Enter your password">
                <label for="password" id="myPasswordLabel"></label>
            </div>
            <div class="col-12">
                <input class="inputLabel" id="confirmPassword" type="password" name="password"
                    placeholder="confirm your password">
                <label for="password" id="confirmPasswordLabel"></label>
            </div>
            <input class="inputSignIn col-4 btn btn-primary" type="submit">
        </form>
    @endsection
