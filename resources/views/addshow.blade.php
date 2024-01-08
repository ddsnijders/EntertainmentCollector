<html>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
        <title>Main Page</title>
    </head>
    @include('header')
    <body class="bg-gradient-to-r from-slate-700 to-slate-800 h-screen">
        <div class="flex justify-center items-center">
            <form class="flex flex-col space-x-4 space-y-4 w-2/5 items-center" method="post" enctype="multipart/form-data">
                @csrf
                <label class="text-gray-50" for="title">Titel</label>
                <input class="w-full" type="text" name="title">
                <label class="text-gray-50" for="description">Beschrijving</label>
                <textarea name="description" rows="8" cols="58"></textarea>                                            
                <div class="flex flex-row space-x-4">
                    <label class="text-gray-50" for="score">Score</label>
                    <input type="number" step=".1" name="score">
                    <label class="text-gray-50" for="number">Aantal minuten</label>
                    <input type="number" step="1" name="duration">
                </div>
                <label class="text-gray-50" for="thumbnail">Thumbnail</label>
                <input class="text-gray-50" type="file" name="thumbnail" accept="image/png, image/jpg, image/gif, image/jpeg">
                <div class="bg-slate-400 w-1/2 h-8 flex justify-center items-center">
                    <input type="submit">
                </div>
            </form>
        </div>
    </body>
</html>