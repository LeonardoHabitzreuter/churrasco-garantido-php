<?php

use PHPUnit\Framework\TestCase;
use App\Domain\Entities\User;
use App\Domain\ValueObjects\EmailVO;
use App\Domain\ValueObjects\PasswordVO;

final class UserTest extends TestCase
{
  public function testShouldHasOneErrorWhenNameIsAnEmptyString()
  {
    $user = new User('', new EmailVO('someEmail@gmail.com'), new PasswordVO('abcdef'));

    $validationResult = $user->validate();

    $this->assertNotEmpty($validationResult['errors']);
    $this->assertFalse($validationResult['is_valid']);
  }

  public function testShouldHasErrorsWhenEmailIsInvalid()
  {
    $email = new EmailVO('invalid email');
    $user = new User('Jhon', $email, new PasswordVO('abcdef'));

    $validationResult = $user->validate();

    $this->assertNotEmpty($validationResult['errors']);
    $this->assertFalse($validationResult['is_valid']);
  }

  public function testShouldHasErrorsWhenPasswordIsInvalid()
  {
    $password = new PasswordVO('ab');
    $user = new User('Jhon', new EmailVO('someEmail@gmail.com'), $password);

    $validationResult = $user->validate();

    $this->assertNotEmpty($validationResult['errors']);
    $this->assertFalse($validationResult['is_valid']);
  }

  public function testShouldHasNoErrorsWhenNameAndEmailIsValid()
  {
    $user = new User('Valid Name', new EmailVO('someEmail@gmail.com'), new PasswordVO('abcdef'));

    $validationResult = $user->validate();

    $this->assertEmpty($validationResult['errors']);
    $this->assertTrue($validationResult['is_valid']);
  }
}