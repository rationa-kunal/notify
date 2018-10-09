@extends('layout')

@section('content')
<div class="uk-card uk-card-default uk-border-rounded text">

    <div class="uk-card-body">
        <legend class="uk-legend">{{ __('Login') }}</legend>
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="uk-margin">
                <input class="uk-input" type="text" placeholder="{{ __('E-Mail Address') }}" value="{{ old('email') }}" name="email">
            </div>
            @if ($errors->has('email'))
                <div class="uk-alert-primary uk-margin" uk-alert>
                    <a class="uk-alert-close" uk-close></a>
                    <p>{{ $errors->first('email') }}</p>
                </div>
            @endif

            <div class="uk-margin">
                <input class="uk-input" type="password" placeholder="{{ __('Password') }}" name="password">
            </div>
            @if ($errors->has('password'))
                <div class="uk-alert-primary uk-margin" uk-alert>
                    <a class="uk-alert-close" uk-close></a>
                    <p>{{ $errors->first('password') }}</p>
                </div>
            @endif

            {{-- <div class="form-group row mb-0">
                <div class="col-md-8 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Login') }}
                    </button>

                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                </div>
            </div> --}}

            <div class="uk-margin">
                <button class="uk-button uk-button-primary" type="submit">{{ __('Login') }}</button>
            </div>

        </form>
    </div>
            
</div>
@endsection
