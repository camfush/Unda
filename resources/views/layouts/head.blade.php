<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" sizes="180x180" href="{{URL::to('apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{URL::to('favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{URL::to('favicon-16x16.png')}}">
    <link rel="manifest" href="{{URL::to('site.webmanifest')}}">
    <link rel="mask-icon" href="{{URL::to('safari-pinned-tab.svg')}}" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#191919">
    <meta name="theme-color" content="#ffffff">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset ('css/vendor.css') }}">
    <title>@yield('page-title', config('app.name')) | {{config('app.name')}}</title>
    <script>
    var themeSettings = (localStorage.getItem('themeSettings')) ? JSON.parse(localStorage.getItem('themeSettings')) :
    {};
    var themeName = themeSettings.themeName || '';
    if (themeName)
    {
        document.write('<link rel="stylesheet" id="theme-style" href="{{URL::to('css/app')}}-' + themeName + '.css">');
    }
    else
    {
        document.write('<link rel="stylesheet" id="theme-style" href="{{URL::to('css/app.css')}}">');
    }
</script>
</head>
