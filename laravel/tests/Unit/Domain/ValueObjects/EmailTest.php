<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class EmailTest extends TestCase
{
    public function testShouldHasErrorsWhenCreatedFromInvalidEmailAddress()
    {
        $email = new Email('invalid');

        $validationResult = $email->validate();

        $this->assertNotEmpty($validationResult['errors']);
        $this->assertFalse($validationResult['is_valid']);
    }

    public function testShouldNotHasErrorsWhenCreatedFromValidEmailAddress()
    {
        $email = new Email('user@example.com');

        $validationResult = $email->validate();

        $this->assertEmpty($validationResult['errors']);
        $this->assertTrue($validationResult['is_valid']);
    }
}