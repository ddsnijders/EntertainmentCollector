<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

abstract class Show extends Model
{
    protected string $title;
    protected string $description;
    protected string $uuid;

    protected float $score;
    protected array $actors; //Actors 
    protected array $directors; //Directors
    protected int $genre;

    // Getters
    abstract public function getTitle() : string;
    abstract public function getDescription(): string;
    abstract public function getUuid(): string;
    abstract public function getScore(): float;
    abstract public function getActors(): array;
    abstract public function getDirectors(): array;
    abstract public function getGenre(): int;

    // Setters
    abstract public function setTitle($title): void;
    abstract public function setDescription($description): void;
    abstract public function setUuid($uuid): void;
    abstract public function setScore($score): void;
    abstract public function setActors($actors): void;
    abstract public function setDirectors($directors): void;
    abstract public function setGenre($genre): void;



    use HasFactory;
}
