<?php

namespace App\Domain\Entities;

use App\Domain\Entities\Entity;

class Order extends Entity
{
  private $code;

  public function __construct()
  {
    parent::__construct();
    $this->code = uniqid();
  }

  public function validate()
  {
    return [
      'is_valid' => empty($this->errors),
      'errors' => $this->errors
    ];
  }
}