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