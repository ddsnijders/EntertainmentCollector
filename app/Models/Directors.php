<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class Directors extends Model implements Person
{
    protected string $firstName;
    protected string $lastName;
    protected int $nationality;
    protected string $uuid;

    public function getFirstName(): string{
        return $this->attributes['firstName'];
    }

    public function getLastName(): string{
        return $this->attributes['lastName'];
    }

    public function getNationality(): int{
        return $this->attributes['nationality'];
    }

    public function getUUID(): string{
        return $this->attributes['uuid'];
    }

    use HasFactory;
}
