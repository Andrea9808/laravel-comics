<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @vite("resources/js/app.js")

    @yield('head')
</head>
<body>
    <div>
        @include('components.header')
        @include('components.jambo')
        @yield('content')
        @include('components.shop')
        @include('components.footer')
        @include('components.social')
    </div>
</body>
</html>
