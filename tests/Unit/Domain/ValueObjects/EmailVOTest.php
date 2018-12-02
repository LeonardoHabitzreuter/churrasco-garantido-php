<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use App\Domain\ValueObjects\EmailVO;

final class EmailVOTest extends TestCase
{
    public function testShouldHasErrorsWhenCreatedFromInvalidEmailAddress()
    {
        $email = new EmailVO('invalid');

        $validationResult = $email->validate();

        $this->assertNotEmpty($validationResult['errors']);
        $this->assertFalse($validationResult['is_valid']);
    }

    public function testShouldNotHasErrorsWhenCreatedFromValidEmailAddress()
    {
        $email = new EmailVO('user@example.com');

        $validationResult = $email->validate();

        $this->assertEmpty($validationResult['errors']);
        $this->assertTrue($validationResult['is_valid']);
    }
}