<?php
namespace App\Domain\Handlers;

use App\Domain\Commands;

class LoginHandler
{
    public function handle(LoginCommand $command)
    {
      $password_hash = DB::table('users')->where('email', $command->email)->first();
    }
}