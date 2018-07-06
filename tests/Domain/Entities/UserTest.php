<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class UserTest extends TestCase
{
  public function testShouldHasOneErrorWhenNameIsAnEmptyString()
  {
    $user = new User('');

    $validationResult = $user->validate();

    $this->assertNotEmpty($validationResult['errors']);
    $this->assertFalse($validationResult['is_valid']);
  }

  public function testShouldHasNoErrorsWhenNameIsAValidString()
  {
    $user = new User('Valid Name');

    $validationResult = $user->validate();

    $this->assertEmpty($validationResult['errors']);
    $this->assertTrue($validationResult['is_valid']);
  }
}