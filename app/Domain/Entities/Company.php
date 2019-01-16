<?php
namespace App\Domain\Entities;

use App\Domain\Entities\Entity;

class Company extends Entity
{
  private $name;
  private $cnpj;
  private $userId;

  public function __construct(string $name)
  {
    parent::__construct();
    $this->name = $name;
  }

  public function validate()
  {
    if (!$this->name) $this->addError('The company should has a name');
      
    return [
      'is_valid' => empty($this->errors),
      'errors' => $this->errors
    ];
  }
}