@extends('layout')

@section('title')
    notice
@endsection

@section('content')

    <div class="uk-margin-medium-top" uk-grid>

        @include('avatar')
    
        <div class="uk-width-expand@m">
    
            <div class="uk-card">

                <div class="uk-card uk-card-default uk-card-body uk-border-pill uk-padding-small uk-margin text uk-animation-slide-left">

                    <span class="uk-padding uk-padding-remove-top uk-padding-remove-bottom">
                        notice head
                    </span>
    
                </div>
    
            </div>
    
            <div class="uk-card uk-card-primary uk-card-body uk-border-rounded uk-box-shadow-large uk-box-shadow-hover-small uk-padding-small uk-animation-slide-bottom">
    
                <div class="uk-card-body">

                    <div class="uk-margin-small">
                        <a href="" uk-icon="icon: trash"></a>
                        <a href="" uk-icon="icon: pencil"></a>
                    </div>

                    <div class="text">from user</div>
                    <div class="text">on date</div>

                    <div class="uk-margin">
                        <hr>
                    </div>

                    <div class="">
                        notice body
                    </div>

                </div>
    
            </div>
        </div>
    </div>
    
@endsection