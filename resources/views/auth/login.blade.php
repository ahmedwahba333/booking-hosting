{{-- @extends('layouts.app') --}}
{{-- @section('content') --}}

@extends('ui.temp')
@section('body')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


<link rel="stylesheet" href="{{asset('assets/log.css')}}">

    <div class="content">
        <div class="log">
            <h2>Log In</h2>
            <br>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div>
                    {{-- <label for="email" class="inputLabel">{{ __('Email') }}</label> --}}
                    <div>
                        <input id="email" type="email" class="inputLabel @error('email') is-invalid @enderror"
                            name="email" value="{{ old('email') }}" placeholder="Enter your Email Address"
                             required autocomplete="email" autofocus>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
<br>
                <div>
                    {{-- <label for="password"  class="inputLabel">{{ __('Password') }}</label> --}}

                    <div>
                        <input id="password" type="password"  class="inputLabel" @error('password') is-invalid @enderror"
                            name="password" placeholder="Enter your password" required autocomplete="current-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>


                {{-- <div class="buttonLL"> --}}
                    <button type="submit" class="buttonLL">
                        {{ __('Login') }}
                    </button>

                    {{-- <p>Don't have Account?</p>
                    <button type="submit" class="buttonLL" href="ui.reg">
                        {{ __('Register') }}
                    </button> --}}

                    {{-- @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif --}}
                {{-- </div> --}}
            </form>
        </div>
    </div>
@endsection
