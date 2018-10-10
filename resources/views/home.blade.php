@extends('layout')

@section('title')
    home
@endsection

@section('content')
<div class="uk-margin-medium-top" uk-grid>

    @include('avatar')

    <div class="uk-width-expand@m">

        @if ((Auth::user()->staf)==0)
            @include('noticeform')
        @endif

        <div class="uk-card uk-background-primary uk-card-body uk-border-rounded uk-box-shadow-medium uk-box-shadow-hover-small uk-padding-small uk-animation-slide-bottom">

            <a href="#">
                <div class="uk-card uk-card-default uk-card-body uk-border-pill uk-padding-small uk-margin text uk-animation-slide-right">

                    <div class="uk-padding uk-padding-remove-top uk-padding-remove-bottom">
    
                        lo rem ipsum lorem ip sum lo rem ipsum lorem ip sum lo rem ipsum lorem ip sum 
                        <small><strong>by username</strong></small>
    
                    </div>
    
                </div>
            </a>

        </div>
    </div>
</div>

@endsection
