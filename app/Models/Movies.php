<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;
use Ramsey\Uuid\Uuid;

class Movies extends Shows
{
    protected string $title;
    protected string $description;
    protected string $uuid;
    protected float $score;
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

    public function getUUID(): string
    {
        return $this->attributes['uuid'];
    }

    public function getScore(): float
    {
        return $this->attributes['score'];
    }

    public function getDuration(): int
    {
        return $this->attributes['duration'];
    }

    public function getShowImageLink(): string{
        //return asset('images/' . $this->getUUID() . ".png");
        return asset('storage/images/' . $this->getUUID() . ".jpg");
    }

    // Setters
    public function setTitle(?string $title): void 
    {
        if (!is_null($title)){
            $this->attributes['title'] = $title;
        }
        else{
            $this->attributes['title'] = "";
        }
    }

    public function setDescription(?string $description): void
    {
        if (!is_null($description)){
            $this->attributes['description'] = $description;
        }
        else{
            $this->attributes['description'] = "";
        }
    }

    public function setUUID(?string $uuid): void
    {
        if (!is_null($uuid)){
            $this->attributes['uuid'] = $uuid;
        }
        else{
            $this->attributes['uuid'] = Uuid::uuid4();
        }
    }

    public function setScore(?float $score): void
    {
        if (!is_null($score)){
            $this->attributes['score'] = $score;
        }
        else{
            $this->attributes['score'] = 0;
        }
    }

    public function setDuration(?int $duration): void
    {
        if (!is_null($duration)){
            $this->attributes['duration'] = $duration;
        }
        else{
            $this->attributes['duration'] = 0;
        }
    }

    use HasFactory;
}
