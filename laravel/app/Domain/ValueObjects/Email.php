<?php
declare(strict_types=1);

class Email extends ErrorBase
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