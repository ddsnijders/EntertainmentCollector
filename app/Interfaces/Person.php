<?php

namespace App\Interfaces;
interface Person{
    public function getFirstName(): string;
    public function getLastName(): string;
    public function getUUID(): string;
    public function getNationality(): int;
}

?>