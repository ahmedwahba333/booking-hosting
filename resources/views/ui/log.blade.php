<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Booking & Hosting logIn</title>
    <link rel="stylesheet" href="assets/logIn.css" class="stylesheet">

</head>

<body>

    @extends('ui.temp')
    @section('body')
        <div class="content">
            <img class="img" src="Empty State Concept.jpg">
            {{-- LOG IN --}}
            <form action="{{ route('login') }}" method="POST">
                @csrf
                
                <div class="log">
                    <label for="email" class="inputLabel">{{ __('Email Address') }}</label>
                    {{-- EMAIL --}}
                    <div class="inputLabel">
                        <input id="email" type="email"
                            class="inputLabel
                @error('email') is-invalid @enderror" name="email"
                            value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                {{-- PASSWORD --}}
                <div class="inputLabel">
                    <label for="password" class="inputLabel">{{ __('Password') }}</label>

                    <div class="inputLabel">
                        <input id="password" type="password" class="inputLabel @error('password') is-invalid @enderror"
                            name="password" required autocomplete="current-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                {{-- BUTTON --}}
                <div class="buttonLL">
                    <button type="submit" class="buttonLL">
                        {{ __('Login') }}
                    </button>
                </div>
            </form>
        </div>

    @endsection

    <script src="logIn.js"></script>
</body>

</html>
