<?php
declare(strict_types=1);

abstract class Entity extends ErrorBase
{
  private $id;

  public function __construct()
  {
    parent::__construct();
    $this->id = uniqid();
  }

  public function getId()
  {
    return $this->id;
  }
}