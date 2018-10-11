<div class="uk-card uk-card-default uk-border-rounded uk-box-shadow-large uk-box-shadow-hover-small uk-padding-small uk-animation-slide-right uk-margin-bottom">

    <div class="uk-card-body">
        <legend class="uk-legend">add notice</legend>
        <form method="POST" action="{{ route("notice.create") }}">
            @csrf

            <div class="uk-margin">
                <input class="uk-input" type="text" placeholder="head" name="head">
            </div>

            <div class="uk-margin">
                <textarea class="uk-textarea" rows="5" placeholder="notice" name="body"></textarea>
            </div>

            <div class="uk-margin">
                <input class="uk-input" type="text" placeholder="from" name="from">
            </div>

            <div class="uk-margin">
                <button class="uk-button uk-button-primary" type="submit">add</button>
            </div>

        </form>
    </div>
            
</div>
