@extends('layout')

@section('title')
    home
@endsection

@section('content')
<div class="uk-margin-medium-top" uk-grid>
    <div class="uk-width-1-3@m">
        <div class="uk-card uk-card-default uk-card-body uk-border-rounded uk-box-shadow-large uk-box-shadow-hover-small uk-padding-small uk-animation-slide-bottom">

            <div class="uk-height-medium uk-flex uk-flex-center uk-flex-middle uk-background-cover uk-light uk-border-circle"
                data-src="luffy.png" uk-img>
            </div>

            <ul class="uk-nav-default uk-nav-parent-icon uk-margin-small-top text" uk-nav>

                <li class="brand-name uk-active">
                    <a href="#"><span class="uk-margin-small-right" uk-icon="icon: user"></span>
                        {{ Auth::user()->name }}
                    </a>
                </li>
                {{-- <li><a href="#"><span class="uk-margin-small-right" uk-icon="icon: thumbnails"></span> Item</a></li>
                <li><a href="#"><span class="uk-margin-small-right" uk-icon="icon: trash"></span> delete</a></li> --}}

            </ul>

        </div>
    </div>

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
