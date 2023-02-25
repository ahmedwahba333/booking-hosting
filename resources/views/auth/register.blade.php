







<div class="top">{{ __('Register') }}</div>
<div class="top">
    @extends('ui.temp')
    @section('body')
    <form method="POST" action="">
        @csrf
        {{-- FIRST NAME --}}
        <div class="">
            <label for="firstname" class="inputLabel">{{ __('firstname') }}</label>

            <div class="">
                <input id="fName" type="text" class="form-control @error('firstname') is-invalid @enderror"
                placeholder="Enter your first name"
                name="firstname" value="{{ old('firstname') }}" required autocomplete="firstname" autofocus>

                @error('firstname')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        {{-- LAST NAME --}}
        <div class="">
            <label for="lastname" class="inputLabel">{{ __('lastname') }}</label>

            <div class="">
                <input id="lName" type="text" class="form-control @error('lastname') is-invalid @enderror"
                placeholder="Enter your last name"
                 name="lastname" value="{{ old('lastname') }}" required autocomplete="lastname" autofocus>

                @error('lastname')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        {{-- NID --}}
        <div class="">
            <label for="nid" class="inputLabel">{{ __('nid') }}</label>

            <div class="">
                <input id="nid" type="text" class="form-control @error('national id') is-invalid @enderror"
                placeholder="Enter your National ID"
                name="nid" value="{{ old('name') }}" required autocomplete="name" autofocus>
                @error('nid')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        {{-- GENDER --}}
        <div class="">
            <label for="gender" class="inputLabel">{{ __('gender') }}</label>
            <div class="">
                <input type="radio" class="myGender @error('gender') is-invalid @enderror"
                 name="gender" value="{{ old('male') }}" required autocomplete="male" autofocus>Male

                 <input type="radio" class="myGender @error('gender') is-invalid @enderror"
                 name="gender" value="{{ old('female') }}" required autocomplete="female" autofocus>Female

                @error('gender')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        {{-- ROLE --}}
        <div class="row mb-3">
            <label for="role" class="inputLabel">{{ __('role') }}</label>
            <div>
                <input type="radio" class="myRole"
                 name="Role" value="{{ old('admin') }}"
                 required autocomplete="admin" autofocus>Admin

                 <input type="radio" class="myRole"
                 name="Role" value="{{ old('Owner') }}"
                 required autocomplete="owner" autofocus>Owner

                 <input type="radio" class="myRole"
                 name="Role" value="{{ old('Customer') }}"
                 required autocomplete="customer" autofocus>Customer
                @error('role')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <br>
        {{-- PHNE NUMBER --}}
            <div class="">
                <label for="phonenumber" class="myPhoneNumLabel">{{ __('phonenumber') }}</label>
                <br>
                <input id="myPhoneNum" type="text" class="inputLabel @error('phonenumber') is-invalid @enderror"
                placeholder="Enter your phone number"
                name="phonenumber" value="{{ old('phonenumber') }}" required autocomplete="phonenumber" autofocus>

                @error('phonenumber')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        {{-- BIRTH DATE --}}
            <div class="">
                <label for="birthDate" id="birthDateLabel">{{ __('birthdate') }}</label>
                <br>
                <input type="date" class="birthdate @error('birthdate') is-invalid @enderror"
                name="birthdate" value="{{ old('birthdate') }}" required autocomplete="birthdate" autofocus>


                @error('birthdate')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        {{-- EMAIL --}}
        <div class="">
            <label for="email" class="inputLabel">{{ __('Email Address') }}</label>

            <div class="">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                placeholder="Enter your email"
                name="email" value="{{ old('email') }}" required autocomplete="email">

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        {{-- PASSWORD --}}
        <div class="">
            <label for="password" class="inputLabel">{{ __('Password') }}</label>

            <div class="">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                placeholder="Enter your password"
                name="password" required autocomplete="new-password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        {{-- CONFIRM PASSWORD --}}
        <div class="">
            <label for="password-confirm" class="inputLabel">{{ __('Confirm Password') }}</label>

            <div class="">
                <input id="password-confirm" type="password" class="form-control"
                placeholder="confirm your password"
                name="password_confirmation" required autocomplete="new-password">
            </div>
        </div>

        <div class="">
            <div class="">
                <button type="submit" class="btn btn-primary">
                    {{ __('signup') }}
                </button>
            </div>
        </div>
    </form>
</div>
</div>
</div>
</div>
</div>
@endsection
