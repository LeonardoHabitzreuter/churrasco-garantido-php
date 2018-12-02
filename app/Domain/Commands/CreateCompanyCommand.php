<?php
declare(strict_types=1);

class CreateCompanyCommand extends ErrorBase
{
    public $name;
    public $cnpj;

    public function validate()
    {
        if (!$this->name) $this->addError('The user should has a name');
        if (!$this->cnpj) $this->addError('The user should has a cnpj');
        
        return [
            'is_valid' => empty($this->errors),
            'errors' => $this->errors
        ];
    }
}