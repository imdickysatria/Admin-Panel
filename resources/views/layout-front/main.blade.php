<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Landing Page</title>
    @vite('resources/css/app.css')

    <style>
        * {
          box-sizing: border-box;
        }

        /* Create two equal columns that floats next to each other */
        .column {
          float: left;
          width: 50%;
          padding: 10px;

        }

        /* Clear floats after the columns */
        .row:after {
          content: "";
          display: table;
          clear: both;
        }
        </style>
</head>
<body>
    @vite("resources/js/app.js")


        <nav class="bg-yellow-300 border-gray-200 dark:bg-gray-900">
            @include('layout-front.header')
        </nav>

        <div class="content bg-indigo-200 pb-10">
            @yield('front')

        </div>


        <footer class="bg-gray-700 text-center font-bold text-white pt-8 pb-8">
            @include('layout-front.footer')
        </footer>



</body>
</html>
