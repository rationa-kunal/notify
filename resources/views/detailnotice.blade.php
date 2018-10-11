@extends('layout')

@section('title')
    {{ $notice->head }}
@endsection

@section('content')

    <div class="uk-margin-medium-top" uk-grid>

        @include('avatar')
    
        <div class="uk-width-expand@m">
    
            <div class="uk-card">

                <div class="uk-card uk-card-default uk-card-body uk-border-pill uk-padding-small uk-margin text uk-animation-slide-left">

                    <span class="uk-padding uk-padding-remove-top uk-padding-remove-bottom">
                        {{ $notice->head }}
                    </span>
    
                </div>
    
            </div>
    
            <div class="uk-card uk-card-primary uk-card-body uk-border-rounded uk-box-shadow-large uk-box-shadow-hover-small uk-padding-small uk-animation-slide-bottom">
    
                <div class="uk-card-body">
                    
                    @if((Auth::user()->staff)==1)
                        <div class="uk-margin-small">
                            <a href="{{ route("notice.delete", ["id" => $notice->id]) }}" uk-icon="icon: trash" uk-tooltip="delete"></a>
                            <a href="{{ route("notice.edit", ["id" => $notice->id]) }}" uk-icon="icon: pencil" uk-tooltip="edit"></a>
                        </div>
                    @endif

                    <div class="text">from {{ $notice->from }}</div>
                    <div class="text">{{ $notice->updated_on }}</div>

                    <div class="uk-margin">
                        <hr>
                    </div>

                    <div class="" style="word-wrap: break-word">
                        {{ $notice->body }}
                    </div>

                </div>
    
            </div>
        </div>
    </div>
    
@endsection