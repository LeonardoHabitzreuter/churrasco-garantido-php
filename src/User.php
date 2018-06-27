<?php
declare(strict_types=1);

final class User
{
    private $name;
    private $email;
    private $password;

    private function __construct(string $name, string $email, string $password)
    {
        $this->name = $name;
        $this->email = Email::fromString($email);
        $this->password = Password::fromString($password);
        // Concat Errors
    }
}