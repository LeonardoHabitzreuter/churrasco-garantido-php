<?php
declare(strict_types=1);

abstract class Entity
{
  private $errors;

  private function __construct()
  {
    $this->errors = array();
  }
}