<!DOCTYPE html>
<html>

<head>


    <title>

        @yield('title')

    </title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- UIkit CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.17/css/uikit.min.css" />

    <!-- UIkit JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.17/js/uikit.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.17/js/uikit-icons.min.js"></script>

    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css?family=Arvo|Quicksand" rel="stylesheet">

    <style>
        .text {
            font-family: 'Quicksand', sans-serif;
        }

        .bg {
            z-index: -1;
            background: black;
            position: fixed;
            width: 100vw;
            height: 100vh;
            top: 0;
            left: 0;
            background-image: linear-gradient(120deg, #a1c4fd 0%, #c2e9fb 100%);
        }

        .brand-name {
            font-family: 'Arvo', serif;
        }
    </style>

</head>

<body>

    <div class="bg"></div>

    <div class="uk-container uk-container-small uk-margin-large-top">



        <nav class="uk-navbar-container uk-border-rounded uk-box-shadow-xlarge uk-box-shadow-hover-small uk-padding-small uk-padding-remove-top uk-padding-remove-bottom uk-animation-slide-left"
            uk-navbar>

            <div class="uk-navbar-left">
                <a href="{{ url('/home') }}" class="uk-logo brand-name" >notify</a>
            </div>

            <div class="uk-navbar-right">
                <ul class="uk-navbar-nav">
                    
                    @if (Route::has('login'))
                    @auth
                        <li> <a href="{{ route('logout') }}" uk-icon="icon: sign-out"></a> </li>
                    @else
                        <li> <a href="{{ route('login') }}" uk-icon="icon: facebook"></a> </li>
                        <li> <a href="{{ route('register') }}" uk-icon="icon: plus"></a> </li>
                    @endauth

                @endif

                    {{-- <li> <a href="#" uk-icon="icon: facebook"></a> </li>
                    <li> <a href="" uk-icon="icon: sign-out"></a> </li>
                    <li> <a href="" uk-icon="icon: plus"></a> </li> --}}

                </ul>
            </div>

        </nav>

        <div class="uk-margin-medium-top">

            @yield('content')

        </div>

    </div>

</body>

</html>