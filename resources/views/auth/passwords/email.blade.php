@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="box">
                <div class="title"> {{ __('Reset Password') }} </div>

                <div class="content">
                    @if (session('status'))
                        <p class="help is-success"> {{ session('status') }} </p>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf
                        <div class="field">
                            <div class="col-md-6">
                                <input id="email" type="email" class="input{{ $errors->has('email') ? ' is-danger' : '' }}" name="email" value="{{ old('email') }}" placeholder="E-Mail" required>

                                @if ($errors->has('email'))
                                    <p class="help is-danger"> {{ $errors->first('email') }} </p>
                                @endif
                            </div>
                        </div>

                        <div class="field">

                                <button type="submit" class="button is-link">
                                    {{ __('Send Password Reset Link') }}
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
