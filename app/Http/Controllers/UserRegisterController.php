<?php

namespace App\Http\Controllers;

use App\CommandBus;
use App\Http\Commands\UserRegisterCommand;

class UserRegisterController extends Controller
{
    public function __construct(public CommandBus $bus)
    {
    }

    public function register()
    {
        $command = new UserRegisterCommand('ali' , '123');

        $this->bus->handle($command);
    }
}