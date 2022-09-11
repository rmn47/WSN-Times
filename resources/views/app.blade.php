<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title inertia>{{ config('app.name', 'Laravel') }}</title>

    <!-- Icon -->
    <!-- <link rel="icon" type="image/x-icon" href="/resources/js/assets/images/logo/favicon.ico" /> -->
    <link rel="icon" href="{{ url('favicon.png') }}">
    <!-- <link rel="icon" type="image/png" href="/resources/js/assets/images/logo/favicon.ico"> -->
    <!-- Fonts -->
    <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap"> -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    <!-- Scripts -->
    <script async src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>

</head>

<body class="font-sans antialiased">

    @inertia
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-4415514126120435" crossorigin="anonymous"></script>
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-10968648305"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'AW-10968648305');
    </script>
    @routes
    <script async src="{{ mix('js/app.js') }}" defer></script>
    @inertiaHead

    @env ('local')
    <script src="http://localhost:8080/js/bundle.js"></script>
    @endenv
</body>

</html>