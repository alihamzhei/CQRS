<?php

namespace App\Http\CommandHandlers;

use App\Http\Commands\UserRegisterCommand;
use App\Http\Repositories\MysqlUserRepository;


class UserRegisterHandler
{
    public function __construct(public MysqlUserRepository $userRepository)
    {
    }

    public function handle(UserRegisterCommand $command)
    {
        $this->userRepository->create(
            [
                'name' => $command->name,
                'password' => $command->password
            ]
        );
    }
}