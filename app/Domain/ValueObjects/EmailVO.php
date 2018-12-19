<?php
namespace App\Domain\ValueObjects;

use App\CrossCutting\Base\ErrorBase;

class EmailVO extends ErrorBase
{
    private $email;

    public function __construct(string $email)
    {
        parent::__construct();
        $this->email = $email;
    }

    public function validate()
    {
        if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) $this->addError('The email is invalid');

        return [
            'is_valid' => empty($this->errors),
            'errors' => $this->errors
        ];
    }
}