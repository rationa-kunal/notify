@extends('layout')

@section('title')
    welcome
@endsection

@section('content')
    <div class="uk-card uk-card-default uk-border-rounded text uk-animation-slide-bottom">

        <div class="uk-card-body uk-box-shadow-large uk-box-shadow-hover-small">
            @if (Route::has('login'))
                @auth
                    got to <a href="{{url('notice.index')}}" class="uk-button uk-button-primary uk-margin-small-left">this link</a>
            @else
                    first login to get access <a href="{{url('login')}}" class="uk-button uk-button-primary uk-margin-small-left">this link</a>
                @endauth
            @endif     
        </div> 

    </div>
@endsection
