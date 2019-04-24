@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="box">
                <h1 class="title"> {{ __('Reset Password') }} </h1>

                <div class="content">
                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="field">
                                <input id="email" type="email" class="input{{ $errors->has('email') ? ' is-danger' : '' }}" name="email" value="{{ $email ?? old('email') }}" placeholder="E-mail" required autofocus>

                                @if ($errors->has('email'))
                                    <p class="help is-danger"> {{ $errors->first('email') }} </p>
                                @endif
                        </div>

                        <div class="field">
                                <input id="password" type="password" class="input{{ $errors->has('password') ? ' is-danger' : '' }}" name="password" placeholder="Password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <p class="help is-danger"> {{ $errors->first('password') }} </p>
                                    </span>
                                @endif
                        </div>

                        <div class="field">

                                <input id="password-confirm" type="password" class="input" name="password_confirmation" placeholder="Re-enter Password" required>
                        </div>

                        <div class="field">
                                <button type="submit" class="button is-link">
                                    {{ __('Reset Password') }}
                                </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
