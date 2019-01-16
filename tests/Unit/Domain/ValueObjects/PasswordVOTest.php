<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use App\Domain\ValueObjects\PasswordVO;

final class PasswordVOTest extends TestCase
{
    public function testShouldHasErrorsWhenPasswordDoesNotHasAtLeast6Characters()
    {
        $password = new PasswordVO('ab');

        $password->validate();

        $this->assertNotEmpty($password->getErrors());
        $this->assertFalse($password->isValid());
    }

    public function testShouldNotHasErrorsWhenPasswordHasAtLeast6Characters()
    {
        $password = new PasswordVO('abcdef');

        $password->validate();

        $this->assertEmpty($password->getErrors());
        $this->assertTrue($password->isValid());
    }

    public function testShouldReturnAHashFromThePassword()
    {
        $password = 'abcdef';
        $passwordObject = new PasswordVO($password);

        $hash = $passwordObject->getHash();
        
        $this->assertTrue(password_verify($password, $hash));
    }
}