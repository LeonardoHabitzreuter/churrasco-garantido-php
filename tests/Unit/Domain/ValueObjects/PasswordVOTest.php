<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use App\Domain\ValueObjects\PasswordVO;

final class PasswordVOTest extends TestCase
{
    public function testShouldHasErrorsWhenPasswordDoesNotHasAtLeast6Characters()
    {
        $password = new PasswordVO('ab');

        $validationResult = $password->validate();

        $this->assertNotEmpty($validationResult['errors']);
        $this->assertFalse($validationResult['is_valid']);
    }

    public function testShouldNotHasErrorsWhenPasswordHasAtLeast6Characters()
    {
        $password = new PasswordVO('abcdef');

        $validationResult = $password->validate();

        $this->assertEmpty($validationResult['errors']);
        $this->assertTrue($validationResult['is_valid']);
    }

    public function testShouldReturnAHashFromThePassword()
    {
        $password = 'abcdef';
        $passwordObject = new PasswordVO($password);

        $hash = $passwordObject->getHash();
        
        $this->assertTrue(password_verify($password, $hash));
    }
}