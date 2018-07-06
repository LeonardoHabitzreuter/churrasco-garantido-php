<?php
declare(strict_types=1);

abstract class ErrorBase
{
  protected $errors;

  public function __construct()
  {
    $this->errors = array();
  }

  protected function addError(string $error)
  {
    array_push($this->errors, $error);
  }
}