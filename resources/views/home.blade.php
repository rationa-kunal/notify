@extends('layout')

@section('title')
    home
@endsection

@section('content')
<div class="uk-margin-medium-top" uk-grid>

    @include('avatar')

    <div class="uk-width-expand@m">

        @if ((Auth::user()->staf)==1)
            @include('noticeform')
        @endif

        <div class="uk-card uk-card-default uk-border-pill uk-box-shadow-medium uk-box-shadow-hover-small uk-animation-slide-bottom uk-margin-bottom">
            <form action="{{ route("notice.search") }}" class="uk-card-body">
                <fieldset class="uk-fieldset">
            
                    <div class="ukmargin"> 
                        <input class="uk-input" type="text" placeholder="search" name="search" value="{{ old("searc") }}">
                    </div>
            
                </fieldset>
            </form>
        </div>

        <div class="uk-card uk-background-primary uk-card-body uk-border-rounded uk-box-shadow-medium uk-box-shadow-hover-small uk-padding-small uk-animation-slide-bottom">

        @foreach ($notices as $notice)
        <a href="{{ route("notice.show", ["id"=>$notice->id]) }}">
            <div class="uk-card uk-card-default uk-card-body uk-border-pill uk-padding-small uk-margin text uk-animation-slide-right">
                <div class="uk-padding uk-padding-remove-top uk-padding-remove-bottom uk-overflow-hidden">

                    {{ $notice->head }}
                    <small><strong>by {{ $notice->from }}</strong></small>

                </div>
            </div>
        </a>
        @endforeach

        </div>
    </div>
</div>

@endsection
