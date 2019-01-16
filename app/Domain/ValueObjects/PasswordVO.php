<?php
namespace App\Domain\ValueObjects;

use App\CrossCutting\Base\ErrorBase;

class PasswordVO extends ErrorBase
{
    private $password;

    public function __construct(string $password)
    {
        $this->password = $password;
    }

    public function getHash(): string
    {
        return password_hash($this->password, PASSWORD_DEFAULT);
    }

    public function validate()
    {
        $this->errors = array();
        if (strlen($this->password) < 6) $this->addError('The password should be greater than 5 characters');
    }
}