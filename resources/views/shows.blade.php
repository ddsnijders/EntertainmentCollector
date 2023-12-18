<html>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
        <title>Main Page</title>
    </head>
    @include('header')
    <div class="flex justify-center">
    @foreach($movies as $movie)
        <div class="bg-neutral-200 w-10/12 h-36 m-20 flex items-center">
            <img class="object-contain h-32 w-40" src="{{$movie->getShowImageLink()}}">
            {{ $movie->getTitle() }}
        </div>

    @endforeach
    </div>
    <body class="bg-sky-200 dark:bg-stone-500 h-screen">
</html>