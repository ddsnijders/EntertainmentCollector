<html>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
        <title>Main Page</title>
    </head>
    <body class="bg-sky-200 dark:bg-stone-500 h-screen">
        @include('header');
        <div class="flex justify-center items-center h-screen">
        <div class="flex justify-around p-2">
            <div class="p-2">
                <a href="./shows"><img src="images/shows.png"></a>
            </div>
            <div class="p-2">
                <a href=""><img src="images/music.png"></a>
            </div>
            <div class="p-2">
                <a href=""><img src="images/books.png"></a>
            </div>
        </div>
        </div>
    </body>
</html>