<?php

namespace App\Http\Contracts;

interface UserRepositoryInterface
{
    public function create(array $data);
}