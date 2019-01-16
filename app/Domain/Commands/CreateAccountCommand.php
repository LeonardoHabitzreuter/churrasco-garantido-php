<?php

namespace App\Domain\Commands;

use App\CrossCutting\Base;

class CreateAccountCommand extends ErrorBase
{
    public $name;
    public $email;
    public $password;
    public $confirmPassword;

    public function __construct(string $name, string $email, string $password, string $confirmPassword)
    {
      parent::__construct();
      $this->name = $name;
      $this->email = $email;
      $this->password = $password;
      $this->confirmPassword = $confirmPassword;
    }

    public function validate()
    {
        if (!$this->name) $this->addError('The user should has a name');
        if (!$this->email) $this->addError('The user should has an email');
        if (!$this->password) $this->addError('The user should has a password');
        if (!$this->confirmPassword) $this->addError('The user should has a confirmPassword');
    }
}