<?php

namespace App\Domain\ValueObjects;

use App\CrossCutting\Base\ErrorBase;

class EmailVO extends ErrorBase
{
    private $email;

    public function __construct(string $email)
    {
        $this->email = $email;
    }

    public function setEmail(string $email)
    {
        $this->email = $email;
    }

    public function validate()
    {
        $this->errors = array();
        if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) $this->addError('The email is invalid');
    }
}