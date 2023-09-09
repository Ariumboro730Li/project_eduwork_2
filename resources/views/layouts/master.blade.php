<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Affan - PWA Mobile HTML Template">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <meta name="theme-color" content="#0134d4">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">

    <!-- Title -->
    <title>Affan - PWA Mobile HTML Template</title>

    <!-- Favicon -->
    <link rel="icon" href={{asset("assets/img/core-img/favicon.ico")}}>
    <link rel="apple-touch-icon" href={{asset("assets/img/icons/icon-96x96.png")}}>
    <link rel="apple-touch-icon" sizes="152x152" href={{asset("assets/img/icons/icon-152x152.png")}}>
    <link rel="apple-touch-icon" sizes="167x167" href={{asset("assets/img/icons/icon-167x167.png")}}>
    <link rel="apple-touch-icon" sizes="180x180" href={{asset("assets/img/icons/icon-180x180.png")}}>

    @include("layouts.style")

    <!-- Web App Manifest -->
    <link rel="manifest" href={{asset("assets/manifest.json")}}>
</head>

<body>
    @include("layouts.header")
    @yield("content")
    @include("layouts.footer")
    @include("layouts.script")

</body>
</html>
