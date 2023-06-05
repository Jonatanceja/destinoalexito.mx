<!DOCTYPE html>
<html class="scroll-smooth" lang="{{ $page->language ?? 'en' }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="canonical" href="{{ $page->getUrl() }}">
        <meta name="description" content="{{ $page->description }}">
        <meta name="keywords" content="{{ $page->keywords }}">
        <meta name="author" content="{{ $page->author }}">
        <title>{{ $page->title }}</title>
        <meta property="og:title" content="{{ $page->title }}" />
        <meta property="og:description" content="{{ $page->description }}" />
        <meta property="og:url" content="{{ $page->getUrl() }}" />
        <meta property="og:type" content="website" />
        <meta property="og:image" content="{{ $page->baseUrl }}/assets/images/logo.png" />
        <meta property="og:image:alt" content="{{ $page->title }}" />
        <meta property="og:image:width" content="1200" />
        <meta property="og:image:height" content="630" />
        <link rel="apple-touch-icon" sizes="180x180" href="/assets/images/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/assets/images/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/assets/images/favicon-16x16.png">
        <link rel="manifest" href="/assets/images/site.webmanifest">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="theme-color" content="#ffffff">
        <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
        <link rel="stylesheet" href="assets/build/css/animate.css">
        <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet">
        <script defer src="{{ mix('js/main.js', 'assets/build') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.3.5/dist/alpine.js" defer></script>
        <script src="assets/build/js/wow.min.js"></script>
        <script>
        new WOW().init();
        </script>
    </head>
    <body class="text-zinc-300 font-sans antialiased bg-zinc-900 scroll-smooth">
        @include('_partials.header')
        @yield('body')
        @include('_partials.footer')
    </body>
</html>
