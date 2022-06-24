<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="manifest" href="manifest.json">
    <link rel="icon" href="assets/images/favicon/4.png" type="image/x-icon">
    <link rel="apple-touch-icon" href="assets/images/favicon/4.png">
    <meta name="theme-color" content="#51983c">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Voxo">
    <meta name="msapplication-TileImage" content="assets/images/favicon/4.png">
    <meta name="msapplication-TileColor" content="#FFFFFF">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Voxo">
    <meta name="keywords" content="Voxo">
    <meta name="author" content="Voxo">
    <link rel="icon" href="assets/images/favicon/6.png" type="image/x-icon" />
    <title>SupplyChain | Vegetables Store</title>

    <!-- Google font -->
    <link rel="preconnect" href="../../../fonts.gstatic.com/index.html">
    <link href="../../../fonts.googleapis.com/css26830.css?family=Rubik:wght@400;500;600;700&amp;display=swap" rel="stylesheet">
    <link href="../../../fonts.googleapis.com/css237f4.css?family=Montserrat:wght@400;500;600;700;800;900&amp;display=swap"
        rel="stylesheet">

    <!-- bootstrap css -->
    <link id="rtl-link" rel="stylesheet" type="text/css" href="assets/css/vendors/bootstrap.css">

    <!-- font-awesome css -->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/font-awesome.css">

    <!-- feather icon css -->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/feather-icon.css">

    <!-- animation css -->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/animate.css">

    <!-- slick css -->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/slick/slick.css">
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/slick/slick-theme.css">

    <!-- Theme css -->
    <link id="color-link" rel="stylesheet" type="text/css" href="assets/css/demo6.css">

</head>

<body class="theme-color6 light ltr">

        @include('inc.nav');

        @yield('content')

        @include('inc.footer');

</body>
</html>
