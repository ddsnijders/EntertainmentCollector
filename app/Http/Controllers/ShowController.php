<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shows;
use App\Models\Movies;
use App\Models\Actors;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Illuminate\Support\Collection;


class ShowController extends Controller
{
    public function show(): View{
        /*$movie = [];
        array_push($movie, '');
        array_push($movie, '');
        array_push($movie, '');
        array_push($movie, 1);
        array_push($movie, new Collection());
        array_push($movie, new Collection());
        array_push($movie, []);
        array_push($movie, 1);
        Movies::create($movie);*/

        $this->store();

        $movies = Movies::all();
        return view('shows', $movies);

    }

    public function store() {
        $movie = new Movies();
        $movie->setTitle('');
        $movie->setDescription('');
        $movie->setUUID('');
        $movie->setScore(1);
        $movie->setActors(new Collection());
        $movie->setDirectors(new Collection());
        $movie->setGenres([]);
        $movie->setDuration(1);
        $movie->save();
    }

    private function getShows(): Collection{
        //$shows = Show::all();

        //return $shows;
        return new Collection();
    }

    private function getMovies(): Collection{
        $movies = Movie::all();
        return $movies;
    }

    public function addMovie(): bool{
        $movie = new Movies();
        addShow($movie);
    }


    private function addShow(Shows $show): bool{
        $show;
        try{
            $show->set;
            $show->save();
        }
        catch (Exception $exception){
            return false;
        }
        return true;
        
    }
}
