<?php

namespace App\Http\Commands;

use App\CommandInterface;

readonly class UserRegisterCommand implements CommandInterface
{
    public function __construct(
        public string $name ,
        public string $password)
    {
    }
}