<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Booking & Hosting logIn</title>
    <link rel="stylesheet" href="assets/reg.css">

    <link rel="stylesheet" href="css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    {{-- <link rel="stylesheet" href="assets/home.css"> --}}
</head>

<body>

@extends('ui.temp')

@section('body')

        {{-- BODY --}}
<div class="content">
        {{-- SIGN UP --}}
    <div class="form">
        <h2> Join us </h2>
        {{-- {{ $errors }} --}}
        <form action="{{ route('register') }}" method="POST">
            @csrf

            <input class="inputLabel" id="fName" type="text" name="name"
                placeholder="Enter your first name">
            <label for="firstname" id="fNameLabel"></label>
            <br>
                @if (count($errors->get("name"))>0)
                @foreach ($errors->get("name") as $error)
                {{$error}}
                @endforeach
                @endif

            <input class="inputLabel" id="lName" type="text" name="lastname"
                placeholder="Enter your last name">
            <label for="lastname" id="lNameLabel"></label>
            <br>
                @if (count($errors->get("name"))>0)
                @foreach ($errors->get("name") as $error)
                {{$error}}
                @endforeach
                @endif

            <input class="inputLabel" id="nid" type="text" name="nid"
                placeholder="Enter your National ID">
            <label for="national id" id="nID"></label>
            <br>
                @if (count($errors->get("nid"))!=null)
                @foreach ($errors->get("nid") as $error)
                {{$error}}
                @endforeach
                @endif

            <div class="radiop">
                <div class="radiop" style="margin-top: 10px;">
                    <label for="gender">Gender</label>
                    <br>
                    <label for="">Male</label>
                    <input type="radio" name="gender" class="myGender" value="male">
                    <label for="">Female</label>
                    <input type="radio" name="gender" class="myGender" value="female">
                    <br>
                    @if (count($errors->get("gender"))>0)
                    @foreach ($errors->get("gender") as $error)
                    {{$error}}
                    @endforeach
                    @endif
                </div>

                <div style="margin-top: 10px;">
                    <label class="radiop" for="gender">Role</label>
                    <br>
                    <label for="">Owner</label>
                    <input type="radio" name="role" class="myGender" value="owner">
                    <label for="">Customer</label>
                    <input type="radio" name="role" class="myGender" value="customer">
                    <br>
                    @if (count($errors->get("role"))>0)
                    @foreach ($errors->get("role") as $error)
                    {{$error}}
                    @endforeach
                    @endif
                </div>

                <div>
                    <label for="birthDate" id="birthDateLabel">enter your Birth Date</label>
                    <br>
                    <input type="date" placeholder="enter your Birth Date" id="birthdate" name="birthdate" />
                    <br>
                    @if (count($errors->get("birthdate"))>0)
                    @foreach ($errors->get("birthdate") as $error)
                    {{$error}}
                    @endforeach
                    @endif
                </div>
            </div>

            <input class="inputLabel" id="myPhoneNum" type="text" name="phone"
                placeholder="Enter your phone number">
            <label for="phone number" id="myPhoneNumLabel"></label>
            <br>
            @if (count($errors->get("phone"))>0)
                    @foreach ($errors->get("phone") as $error)
                    {{$error}}
                    @endforeach
                    @endif

            <input class="inputLabel" id="myEmail" type="text" name="email" placeholder="Enter your email">
            <label for="email" id="myEmailLabel"></label>
            <br>
                    @if (count($errors->get("email"))>0)
                    @foreach ($errors->get("email") as $error)
                    {{$error}}
                    @endforeach
                    @endif

            <input class="inputLabel" id="myPassword"
                title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"
                type="password" name="password" placeholder="Enter your password">
            <label for="password" id="myPasswordLabel"></label>
            <br>
                    @if (count($errors->get("password"))>0)
                    @foreach ($errors->get("password") as $error)
                    {{$error}}
                    @endforeach
                    @endif

            <input class="inputLabel" id="confirmPassword" type="password" name="confirmPassword"
                placeholder="confirm your password">
            <label for="confirmPassword" id="confirmPasswordLabel"></label>
            <br>
                    @if (count($errors->get("password"))>0)
                    @foreach ($errors->get("password") as $error)
                    {{$error}}
                    @endforeach
                    @endif

            <input class="inputSignIn" type="submit">
        </form>
    </div>
</div>

<script src="logIn.js"></script>
@endsection


</body>

</html>
