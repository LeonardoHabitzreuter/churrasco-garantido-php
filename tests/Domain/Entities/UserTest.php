<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class UserTest extends TestCase
{
  public function testShouldHasOneErrorWhenNameIsAnEmptyString()
  {
    $user = new User('', new Email('someEmail@gmail.com'), new Password('abcdef'));

    $validationResult = $user->validate();

    $this->assertNotEmpty($validationResult['errors']);
    $this->assertFalse($validationResult['is_valid']);
  }

  public function testShouldHasErrorsWhenEmailIsInvalid()
  {
    $email = new Email('invalid email');
    $user = new User('Jhon', $email, new Password('abcdef'));

    $validationResult = $user->validate();

    $this->assertNotEmpty($validationResult['errors']);
    $this->assertFalse($validationResult['is_valid']);
  }

  public function testShouldHasErrorsWhenPasswordIsInvalid()
  {
    $password = new Password('ab');
    $user = new User('Jhon', new Email('someEmail@gmail.com'), $password);

    $validationResult = $user->validate();

    $this->assertNotEmpty($validationResult['errors']);
    $this->assertFalse($validationResult['is_valid']);
  }

  public function testShouldHasNoErrorsWhenNameAndEmailIsValid()
  {
    $user = new User('Valid Name', new Email('someEmail@gmail.com'), new Password('abcdef'));

    $validationResult = $user->validate();

    $this->assertEmpty($validationResult['errors']);
    $this->assertTrue($validationResult['is_valid']);
  }
}