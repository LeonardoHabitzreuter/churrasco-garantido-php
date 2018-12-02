<?php
namespace App\Domain\Entities;

use Illuminate\Database\Eloquent\Model;

abstract class Entity extends Model
{
  private $id;
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

  public function getId()
  {
    return $this->id;
  }
}