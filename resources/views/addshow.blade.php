<html>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
        <title>Main Page</title>
    </head>
    @include('header')
    <body class="bg-gradient-to-r from-slate-700 to-slate-800 h-screen">
        <form method="post">
            @csrf
            <input type="text" name="title">
            <input type="submit">
        </form>
    </body>
</html>