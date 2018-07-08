<?php
declare(strict_types=1);

class Password extends ErrorBase
{
    private $password;

    public function __construct(string $password)
    {
        parent::__construct();
        $this->password = $password;
    }

    public function getHash()
    {
        return password_hash($this->password, PASSWORD_DEFAULT);
    }

    public function validate()
    {
        if (strlen($this->password) < 6) $this->addError('The password should be greater than 5 characters');

        return [
            'is_valid' => empty($this->errors),
            'errors' => $this->errors
        ];
    }
}