<?php

namespace App\CrossCutting\Base;

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

  protected function addErrors(array $errors)
  {
    $this->errors = array_merge($this->errors, $errors);
  }
}