<?php
declare(strict_types=1);

class LoginCommand extends ErrorBase
{
    public $email;
    public $password;

    public function validate()
    {
        if (!$this->email) $this->addError('The email is required for login');
        if (!$this->password) $this->addError('The password is required for login');
        
        return [
            'is_valid' => empty($this->errors),
            'errors' => $this->errors
        ];
    }
}