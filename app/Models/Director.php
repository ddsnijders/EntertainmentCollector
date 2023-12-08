<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Director extends Model
{
    private string $firstName;
    private string $lastName;
    private int $nationality;
    private string $uuid;

    public function getFirstName(): string{
        return $this->firstName;
    }

    public function getLastName(): string{
        return $this->lastName;
    }

    public function getNationality(): int{
        return $this->nationality;
    }

    public function getUUID(): string{
        return $this->uuid;
    }
    
    use HasFactory;
}
