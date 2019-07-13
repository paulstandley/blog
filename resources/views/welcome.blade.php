<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{config('app.name', 'blog')}}</title>

        <!-- Styles -->
        <link rel="stylesheet" href="css/app.css">
    </head>
    <body>
        <div id="Index" class="container"></div>
        <script src="js/app.js"></script>
    </body>
</html>
