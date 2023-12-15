<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class Movies extends Shows
{
    protected string $title;
    protected string $description;
    protected string $uuid;
    protected float $score;
    protected Collection $actors;
    protected Collection $directors;
    protected array $genres;
    protected int $duration;
    public $timestamps = false;
    protected $casts = [
        'genres' => 'array',
    ];

    // Getters
    public function getTitle(): string
    {
        return $this->attributes['title'];
    }

    public function getDescription(): string
    {
        return $this->attributes['description'];
    }

    public function getUuid(): string
    {
        return $this->attributes['uuid'];
    }

    public function getScore(): float
    {
        return $this->attributes['score'];
    }

    public function getActors(): Collection
    {
        return $this->actors;
    }

    public function getDirectors(): Collection
    {
        return $this->directors;
    }

    public function getGenres(): array 
    {
        return $this->attributes['genres'];
    }

    public function getDuration(): int
    {
        return $this->attributes['duration'];
    }

    // Setters
    public function setTitle(string $title): void 
    {
        $this->attributes['title'] = $title;
    }

    public function setDescription(string $description): void
    {
        $this->attributes['description'] = $description;
    }

    public function setUUID(string $uuid): void
    {
        $this->attributes['uuid'] = $uuid;
    }

    public function setScore(float $score): void
    {
        $this->attributes['score'] = $score;
    }

    public function setActors(Collection $actors): void
    {
        $this->actors = $actors;
    }

    public function setDirectors(Collection $directors): void
    {
        $this->directors = $directors;
    }

    public function setGenres(array $genres): void
    {
        $this->attributes['genres'] = $genres;
    }

    public function setDuration(int $duration): void
    {
        $this->attributes['duration'] = $duration;
    }


    use HasFactory;
}
