<?php
declare(strict_types=1);

class LoginHandler
{
    public function handle(LoginCommand $command)
    {
      $password_hash = DB::table('users')->where('email', $command->email)->first();
    }
}