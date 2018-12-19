<?php
namespace App\Domain\Handlers;

use App\Domain\Commands;
use App\Domain\Entities;
use App\Domain\ValueObjects;

class CreateAccountHandler
{
    public function handle(CreateAccountCommand $command)
    {
        // verify if the confirmPass equals password
        $user = new User($command->name, new EmailVO($command->email), new PasswordVO($command->password));
        $user->save();
    }
}