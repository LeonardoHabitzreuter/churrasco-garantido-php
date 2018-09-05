<?php
declare(strict_types=1);

class CreateAccountHandler
{
    public function handle(CreateAccountCommand $command)
    {
        $user = new User($command->name);
    }
}