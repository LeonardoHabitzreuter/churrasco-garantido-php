<?php
declare(strict_types=1);

class CreateAccountCommand extends ErrorBase
{
    public $name;
    public $email;
    public $password;
    public $confirmPassword;

    public function validate()
    {
        if (!$this->name) $this->addError('The user should has a name');
        if (!$this->email) $this->addError('The user should has an email');
        if (!$this->password) $this->addError('The user should has a password');
        if (!$this->confirmPassword) $this->addError('The user should has a confirmPassword');
        
        return [
            'is_valid' => empty($this->errors),
            'errors' => $this->errors
        ];
    }
}