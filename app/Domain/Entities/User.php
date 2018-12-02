<?php
namespace App\Domain\Entities;

use App\Domain\Entities\Entity;
use App\Domain\ValueObjects\EmailVO;
use App\Domain\ValueObjects\PasswordVO;

class User extends Entity
{
    private $name;
    private $email;
    private $password;

    public function __construct(string $name, EmailVO $email, PasswordVO $password)
    {
        parent::__construct();
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
    }

    public function getName()
    {
        return $this->name;
    }

    public function validate()
    {
        if (!$this->name) $this->addError('The user should has a name');
        
        $emailValidation = $this->email->validate();
        $passwordValidation = $this->password->validate();

        $this->addErrors($emailValidation['errors']);
        $this->addErrors($passwordValidation['errors']);

        return [
            'is_valid' => empty($this->errors),
            'errors' => $this->errors
        ];
    }
}