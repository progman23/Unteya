<!DOCTYPE html>
<html lang="ru">

<head>

    <meta charset="utf-8">
    <!-- <base href="index.html"> -->

    <title>UNTEYA</title>
    <meta name="description" content="agricultural store">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Template Basic Images Start -->
    <meta property="og:image" content="path/to/image.jpg">
    <link rel="icon" type="image/png" href="../img/icons/favicon.png">
    <link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-touch-icon-180x180.png">
    <!-- Template Basic Images End -->
    <!-- Custom Browsers Color Start -->
    <meta name="theme-color" content="#e64f46">
    <!-- Custom Browsers Color End -->
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/"
     crossorigin="anonymous">
    <link rel="stylesheet" href=" {{asset('css/main.css')}}">
    <link rel="stylesheet" href="{{asset('../css/bootstrap/bootstrap.min.css')}}">
    
</head>

        @yield('content')

</body>
<script src="{{asset('../js/script1.js')}}"></script>
</html>