@extends('layouts.app')

@section('content')
<div class="container">
        <div class="columns">
        <div class="column is-4 is-offset-4">
                <div class="box">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <h1 class="title"> {{ __('Register') }} </h1>
                    <div class="field">
                        <p class="control">
                            <input class="input {{ $errors->has('email') ? ' is-danger' : '' }}" name="name" type="text" placeholder="Name" value="{{ old('name') }}" required autofocus>
                        </p>
                        @if ($errors->has('name'))
                            <p class="help is-danger"> {{ $errors->first('name') }} </p>
                        @endif
                    </div>
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
                            <input class="input {{ $errors->has('password') ? ' is-danger' : '' }}" name="password" type="password" placeholder="Password" required>
                        </p>
                        @if ($errors->has('password'))
                            <p class="help is-danger"> {{ $errors->first('password') }} </p>
                        @endif
                    </div>
                    <div class="field">
                        <p class="control">
                            <input class="input" id="password-confirm" type="password" name="password_confirmation" placeholder="Re-enter Password" required>
                        </p>
                    </div>
                    <div class="field">
                        <p class="control">
                            <button type="submit" class="button is-success">
                                {{ __('Register') }}
                            </button>
                        </p>
                    </div>

                    </form>
                </div>
        </div>
    </div>

    </div>
</div>
@endsection
