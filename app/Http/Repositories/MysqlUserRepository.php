<?php

namespace App\Http\Repositories;

use App\Http\Contracts\UserRepositoryInterface;
use App\Models\User;

class MysqlUserRepository implements UserRepositoryInterface
{
    public function create(array $data)
    {
        User::create([
            'name' => $data['name'],
            'password' => bcrypt($data['password'])
        ]);
    }
}