<?php
declare(strict_types=1);

abstract class Entity
{
  public $errors;

  public function __construct()
  {
    $this->errors = array();
  }

  protected function addError(string $error)
  {
    array_push($this->errors, $error);
  }
}