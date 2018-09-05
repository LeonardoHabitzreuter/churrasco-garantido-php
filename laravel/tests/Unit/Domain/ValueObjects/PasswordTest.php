<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class PasswordTest extends TestCase
{
    public function testShouldHasErrorsWhenPasswordDoesNotHasAtLeast6Characters()
    {
        $password = new Password('ab');

        $validationResult = $password->validate();

        $this->assertNotEmpty($validationResult['errors']);
        $this->assertFalse($validationResult['is_valid']);
    }

    public function testShouldNotHasErrorsWhenPasswordHasAtLeast6Characters()
    {
        $password = new Password('abcdef');

        $validationResult = $password->validate();

        $this->assertEmpty($validationResult['errors']);
        $this->assertTrue($validationResult['is_valid']);
    }

    public function testShouldReturnAHashFromThePassword()
    {
        $password = 'abcdef';
        $passwordObject = new Password($password);

        $hash = $passwordObject->getHash();
        
        $this->assertTrue(password_verify($password, $hash));
    }
}