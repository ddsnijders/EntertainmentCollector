<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Show
{
    private string $title;
    private string $description;
    private string $uuid;
    private float $score;
    private array $actors;
    private array $directors;
    private array $genres;
    private int $duration;

    // Getters
    public function getTitle()
    {
        return $this->title;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function getUuid()
    {
        return $this->uuid;
    }

    public function getScore()
    {
        return $this->score;
    }

    public function getActors()
    {
        return $this->actors;
    }

    public function getDirectors()
    {
        return $this->directors;
    }

    public function getGenres()
    {
        return $this->genres;
    }

    public function getDuration(): int
    {
        return $this->duration;
    }

    // Setters
    public function setTitle(string $title)
    {
        $this->title = $title;
    }

    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    public function setUuid(string $uuid)
    {
        $this->uuid = $uuid;
    }

    public function setScore(float $score)
    {
        $this->score = $score;
    }

    public function setActors(array $actors)
    {
        $this->actors = $actors;
    }

    public function setDirectors(array $directors)
    {
        $this->directors = $directors;
    }

    public function setGenres(array $genres)
    {
        $this->genres = $genres;
    }

    public function setDuration(int $duration)
    {
        $this->duration = $duration;
    }
    use HasFactory;
}
