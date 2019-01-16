<?php

namespace App\Domain\Commands;

use App\CrossCutting\Base;

class LoginCommand extends ErrorBase
{
    public $email;
    public $password;

    public function validate()
    {
        if (!$this->email) $this->addError('The email is required for login');
        if (!$this->password) $this->addError('The password is required for login');
    }
}