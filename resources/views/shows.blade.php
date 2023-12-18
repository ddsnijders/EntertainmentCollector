<html>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
        <title>Main Page</title>
    </head>
    @include('header')
    <div class="flex justify-center items-center flex-col-reverse">
    @foreach($movies as $movie)
        <div class="bg-neutral-200 w-10/12 h-48 m-5 flex items-center">
            <img class="h-32 w-1/12 m-5" src="{{$movie->getShowImageLink()}}">
            <div class="m-10 w-7/12">
                <div>
                    <h5 class="mb-5 text-xl">{{ $movie->getTitle() }}</h5>
                </div>
                <div>
                    <div>
                        {{$movie->getScore()}}
                    </div>
                    <div>
                        {{$movie->getDescription()}}
                    </div>
                </div>
            </div>
            <div>
                <form action="edit" method="get">
                    <input type="submit" value="Edit">
                </form>
                <form action="delete" method="get">
                    <input type="submit" value="Delete">
                </form>
            </div>
        </div>

    @endforeach
    </div>
    <body class="bg-gradient-to-r from-slate-700 to-slate-800 h-screen">
</html>

<!--<body class="bg-sky-100 dark:bg-stone-400 h-screen">-->
 