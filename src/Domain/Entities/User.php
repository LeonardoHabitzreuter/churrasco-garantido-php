<?php
declare(strict_types=1);

class User extends Entity
{
    private $name;
    private $email;
    private $password;

    public function __construct(string $name)
    {
        parent::__construct();
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }

    public function validate()
    {
        if (!$this->name) $this->addError('The user should has a name');

        return [
            'is_valid' => empty($this->errors),
            'errors' => $this->errors
        ];
    }
}