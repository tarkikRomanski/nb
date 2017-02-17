<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>NB</title>
    {{ Html::style('css/bootstrap-grid.min.css') }}
    {{ Html::style('css/main.css') }}
    <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="  crossorigin="anonymous"></script>
</head>
<body>
@include('layouts._modal')
@include('layouts._header')
@yield('content')

@yield('script')
</body>
</html>