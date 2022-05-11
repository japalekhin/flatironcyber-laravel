<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    @if (isset($siteTitle))
        <title>{{ $siteTitle }}</title>
    @else
        <title>{{ env('APP_NAME', 'Flat Iron Cyber') }}</title>
    @endif
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta property="og:title" content="">
    <meta property="og:type" content="">
    <meta property="og:url" content="">
    <meta property="og:image" content="">

    <link rel="manifest" href="site.webmanifest">
    <link rel="apple-touch-icon" href="icon.png">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @livewireStyles

    <meta name="theme-color" content="#fafafa">
</head>

<body class="min-h-screen">
    <div id="app" class="flex flex-col min-h-screen">
        @yield('header')
        @yield('body')
        @yield('footer')
    </div>

    @livewireScripts
    <script src="{{ asset('js/app.js') }}" defer></script>
</body>

</html>
