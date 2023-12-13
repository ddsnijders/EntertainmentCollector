<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

abstract class Shows extends Model
{
    protected string $title;
    protected string $description;
    protected string $uuid;
    protected float $score;
    protected Collection $actors; //Actors 
    protected Collection $directors; //Directors
    protected array $genre;
    protected int $duration;

    // Getters
    abstract public function getTitle() : string;
    abstract public function getDescription(): string;
    abstract public function getUuid(): string;
    abstract public function getScore(): float;
    abstract public function getActors(): Collection;
    abstract public function getDirectors(): Collection;
    abstract public function getGenres(): array;

    // Setters
    abstract public function setTitle(string $title): void;
    abstract public function setDescription(string $description): void;
    abstract public function setUuid(string $uuid): void;
    abstract public function setScore(float $score): void;
    abstract public function setActors(Collection $actors): void;
    abstract public function setDirectors(Collection $directors): void;
    abstract public function setGenres(array $genre): void;

    use HasFactory;
}
