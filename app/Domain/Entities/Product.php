<?php
namespace App\Domain\Entities;

use App\Domain\Entities\Entity;

class Product extends Entity
{
    private $name;

    public function __construct()
    {
      parent::__construct();
      $this->name = uniqid();
    }
  
    public function validate()
    {
      return [
        'is_valid' => empty($this->errors),
        'errors' => $this->errors
      ];
    }
}
