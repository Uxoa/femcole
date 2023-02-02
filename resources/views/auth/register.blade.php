@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="cardHeader">New Student {{ __('Register') }}</div>
            <div class="card">
                <div class="cardBody">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="row mb-3">
                            <label for="name" class="col-md-4 colFormLabel ">{{ __('Name') }}</label>

                            <div class="col-md-7">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="surname1" class="col-md-4  colFormLabel">{{ __('Surname1') }}</label>

                            <div class="col-md-7">
                                <input id="surname1" type="text" class="form-control @error('surname1') is-invalid @enderror" name="surname1" value="{{ old('surname1') }}" required autocomplete="surname1" autofocus>

                                @error('surname1')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="surname2" class="col-md-4  colFormLabel ">{{ __('Surname2') }}</label>

                            <div class="col-md-7">
                                <input id="surname2" type="text" class="form-control @error('surname2') is-invalid @enderror" name="surname2" value="{{ old('surname2') }}" required autocomplete="surname2" autofocus>

                                @error('surname2')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4  colFormLabel ">{{ __('Email Address') }}</label>

                            <div class="col-md-7">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4  colFormLabel ">{{ __('Password') }}</label>

                            <div class="col-md-7">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4  colFormLabel">{{ __('Confirm Password') }}</label>

                            <div class="col-md-7">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="image" class="col-md-4  colFormLabel ">{{ __('Image') }}</label>

                            <div class="col-md-7">
                                <input id="image" type="text" class="form-control" name="image">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="btnBox">
                                <a href="{{ route('createUser') }}">
                                    <button type="submit" class="btnRegister" >
                                        {{ __('Register') }}
                                    </button>
                                </a>

                                <!-- <a href="{{ route ('home') }}">
                                    <button type="reset" class="btnCancel">
                                        {{ __('Cancel') }}
                                    </button>
                                </a> -->

                                <button type="reset" class="btnCancel">
                                    <a href="{{ route ('home') }}">Cancel</a>
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
