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
    protected int $duration;

    // Getters
    abstract public function getTitle() : string;
    abstract public function getDescription(): string;
    abstract public function getUUID(): string;
    abstract public function getScore(): float;
    abstract public function getShowImageLink(): string;

    // Setters
    abstract public function setTitle(string $title): void;
    abstract public function setDescription(string $description): void;
    abstract public function setUUID(string $uuid): void;
    abstract public function setScore(float $score): void;

    use HasFactory;
}
