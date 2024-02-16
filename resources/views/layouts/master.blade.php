<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes, maximum-scale=2.0">
        <title>@yield('pageTitle')</title>
        <meta name="description" content="@yield('pageDescription')">
        <link href="{{ asset('/css/blocks.css') }}" rel="stylesheet">
        <link href="{{ asset('/css/style.css') }}" rel="stylesheet">
        <link href="{{ asset('/css/fonts.css') }}" rel="stylesheet">
        <link href="{{ asset('/css/font-awesome.min.css') }}" rel="stylesheet">
        <link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('/css/header-default.css') }}" rel="stylesheet">
        <link href="{{ asset('/css/animate.css') }}" rel="stylesheet">
        <link href="{{ asset('/css/jquery.multiselect.css') }}" rel="stylesheet">
        <link href="{{ asset('/css/sky-forms.css') }}" rel="stylesheet">
        <link href="{{ asset('/css/select2.min.css') }}" rel="stylesheet">
        <link href="{{ asset('/css/custom-sky-forms.css') }}" rel="stylesheet">
        <link href="{{ asset('/css/sumoselect.css') }}" rel="stylesheet">
        <link href="{{ asset('/css/tenderview.css') }}" rel="stylesheet">
        <link href="{{ asset('/css/light-theme.css') }}" rel="stylesheet">
        <link href="{{ asset('/css/plyr3.7.2.min.css') }}" rel="stylesheet">
        @stack('headerCSS')
        <link href="/css/custom.css?v=22" rel="stylesheet">
        @stack('headerJS')
    </head>
        <body class="header-fixed header-fixed-space-default bg-image">
        <script src="{{ asset('/js/jquery.min.js') }}"></script>
        <script src="{{ asset('/js/jquery-migrate.min.js') }}"></script>
        <script src="{{ asset('/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('/js/jquery.multiselect.js') }}"></script>
        <script src="{{ asset('/js/jquery.sumoselect3.4.9.min.js') }}"></script>
        <script src="{{ asset('/js/app.js') }}"></script>
        <script src="{{ asset('/js/select2.min.js') }}"></script>
        <script src="{{ asset('/js/common.js') }}"></script>
        @stack('footerJS')
    </body>
</html>
