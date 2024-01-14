<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movies;
use Ramsey\Uuid\Uuid;

trait ShowShowsTrait {
    public function showShows(){
        return app('App\Http\Controllers\ShowController')->show();
    }
}

class AddShowController extends Controller
{
    use ShowShowsTrait;

    public function show() {
        return view('addshow',);
    }

    public function store(Request $request){
        $movie = new Movies();
        $movie->setTitle(request('title'));
        $movie->setDescription(request('description'));
        $movie->setScore(request('score'));
        $movie->setDuration(request('duration'));
        $uuid = Uuid::uuid4();
        $movie->setUUID($uuid);
        $thumbnail = $request->file('thumbnail');
        $movie->save();
        if ($movie->save()){
            $this->storeThumbnail($thumbnail, $uuid);
        }
        return $this->showShows();
        
    }

    private function storeThumbnail(mixed $thumbnail, mixed $uuid): void{
        if (!is_null($thumbnail)){
        $imageName = $uuid . '.' . $thumbnail->getClientOriginalExtension();
        $thumbnail->storeAs('public/images', $imageName);
        }
    }
}
