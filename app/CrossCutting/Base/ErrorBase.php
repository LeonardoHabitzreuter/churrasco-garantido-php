<?php

namespace App\CrossCutting\Base;

abstract class ErrorBase
{
  protected $errors;

  protected function addError(string $error)
  {
    array_push($this->errors, $error);
  }

  protected function addErrors(array $errors)
  {
    $this->errors = array_merge($this->errors, $errors);
  }

  public function getErrors(): array
  {
    return $this->errors;
  }

  public function isValid(): bool
  {
    return empty($this->errors);
  }

  abstract public function validate();
}