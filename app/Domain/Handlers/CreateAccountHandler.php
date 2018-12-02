<?php

use App\Domain;

class CreateAccountHandler
{
    public function handle(CreateAccountCommand $command)
    {
        // verify if the confirmPass equals password
        $user = new User($command->name, new EmailVO($command->email), new PasswordVO($command->password));
        $user->save();
    }
}