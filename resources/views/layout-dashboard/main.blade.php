<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body>
    @vite("resources/js/app.js")

    @include('layout-dashboard.nav')
    @include('layout-dashboard.sidebar')
    <div class="p-4 sm:ml-64">
        @yield('container')
     </div>


</body>
</html>
