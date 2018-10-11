@extends('layout')

@section('title')
    notice
@endsection

@section('content')

    <div class="uk-margin-medium-top" uk-grid>

        @include('avatar')
    
        <div class="uk-width-expand@m">
    
                <div class="uk-card uk-card-default uk-border-rounded uk-box-shadow-large uk-box-shadow-hover-small uk-padding-small uk-animation-slide-right uk-margin-bottom">

                    <div class="uk-card-body">
                        <legend class="uk-legend">edit notice</legend>
                        <form method="POST" action="{{ route('notice.store') }}">
                            @csrf
                            
                            <input type="hidden" name="id" value="{{ $notice->id }}">

                            <div class="uk-margin">
                                <input class="uk-input" type="text" placeholder="head" name="head" value="{{ $notice->head }}">
                            </div>
                
                            <div class="uk-margin">
                                <textarea class="uk-textarea" rows="5" placeholder="notice" name="body">{{ $notice->body }}</textarea>
                            </div>
                
                            <div class="uk-margin">
                                <input class="uk-input" type="text" placeholder="from" name="from" value="{{ $notice->from }}">
                            </div>
                
                            <div class="uk-margin">
                                <button class="uk-button uk-button-primary" type="submit">edit</button>
                            </div>
                
                        </form>
                    </div>
                            
                </div>
                    
        </div>
    </div>
    
@endsection