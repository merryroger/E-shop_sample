<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Интернет-магазин «Немо»</title>
    <link rel="icon" type="image/x-icon" href="./favicon.ico">
    <link rel="stylesheet" href="./styles/normalize.css">
    <link rel="stylesheet" href="./styles/choices.min.css">
    <link rel="stylesheet" href="./styles/default.css">
    <script src="/jslibs/components/choices.min.js"></script>
    <script src="/jslibs/components/just-validate.min.js"></script>
    <!--script src="/jslibs/components/sign.in.js"></script-->
</head>

<body>
@include('templates/guest/header')
@yield('main')
@include('templates/guest/footer')
</body>

</html>
