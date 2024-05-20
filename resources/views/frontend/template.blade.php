<!doctype html>
<html>
<head>
    <link href='http://fonts.googleapis.com/css?family=Playfair+Display+SC:400italic,700italic&amp;subset=latin,cyrillic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Fira+Sans:300,400,500,700&amp;subset=latin,cyrillic-ext' rel='stylesheet' type='text/css'>
    <link href="/html/css/mobilemenu.css" rel="stylesheet">
    <link href="/html/css/font-awesome.min.css" rel="stylesheet">
    <link href="/html/css/simple-line-icons.css" rel="stylesheet">
    <link href="/html/css/foundation.min.css" rel="stylesheet">
    <link href="/html/css/jquery.fancybox.css" rel="stylesheet">
    <link href="/html/css/style.min.css" rel="stylesheet">

    <!-- Theme color -->
    <link href="/html/css/less/colors/blue.min.css" rel="stylesheet">

    <!-- <link href="favicon.ico" rel="icon" type="image/x-icon" /> -->
    <link rel="icon" type="image/png" href="favicon.png" sizes="32x32">

    <script src="/html/js/lib/modernizr.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js"></script>
    <title>Triablo - eCommerce Landing Page</title>

    <meta name="description" content=""/>
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <meta http-equiv="Content-type" content="text/html; charset=UTF-8"/>
    <link href='http://fonts.googleapis.com/css?family=Fira+Sans:300,400&amp;subset=latin,cyrillic-ext,cyrillic' rel='stylesheet' type='text/css'>
    <link href="/html/css/less/welcome/wl.min.css" rel="stylesheet">

</head>
<body>

@include('frontend.header')
{{--@include lo uso per le parti statiche come footer o header
@yield per tutte le parti dinamiche--}}

@yield('page-content')

<footer>

</footer>

<script data-main="/html/js/wl-script" src="/html/js/lib/require.js"></script>

</body>
</html>
