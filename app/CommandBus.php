<?php

namespace App;

class CommandBus
{
    public function handle(CommandInterface $command)
    {
          $commands =  config('commands');

          $handler = new $commands[$command::class]();

          $handler->handle($command);
    }
}