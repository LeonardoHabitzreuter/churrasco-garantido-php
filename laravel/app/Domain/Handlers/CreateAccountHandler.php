<?php

use App\Domain;

class CreateAccountHandler
{
    public function handle(CreateAccountCommand $command)
    {
        $user = new User($command->name, new Email($command->email), new Password($command->password));
    }
}