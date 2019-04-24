@extends('layouts.app')

@section('content')
<div class="container">

    <div class="columns">
        <div class="column is-4 is-offset-4">
                <div class="box">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <h1 class="title"> {{ __('Login') }} </h1>
                    <div class="field">
                        <p class="control">
                            <input class="input {{ $errors->has('email') ? ' is-danger' : '' }}" name="email" type="email" placeholder="Email" value="{{ old('email') }}" required autofocus>
                        </p>
                        @if ($errors->has('email'))
                            <p class="help is-danger"> {{ $errors->first('email') }} </p>
                        @endif
                    </div>
                    <div class="field">
                        <p class="control">
                            <input class="input {{ $errors->has('password') ? ' is-danger' : '' }}" name="password" type="password" placeholder="Password" value="{{ old('password') }}">
                        </p>
                        @if ($errors->has('password'))
                            <p class="help is-danger"> {{ $errors->first('password') }} </p>
                        @endif
                    </div>
                    <div class="field">
                        <label class="checkbox" for="remember">
                            <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                {{ __('Remember Me') }}
                        </label>
                    </div>
                    
                    <div class="field">
                        <p class="control">
                            <button type="submit" class="button is-success">
                                {{ __('Login') }}
                            </button>
                        </p>
                    </div>

                    @if (Route::has('password.request'))
                                    <a class="btn is-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                        @endif
                    </form>
                </div>
        </div>
    </div>
</div>
@endsection
