<?php
declare(strict_types=1);

abstract class Entity extends ErrorBase
{
  private $id;

  public function getId()
  {
    return $this->id;
  }
}