<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use App\Domain\ValueObjects\EmailVO;

final class EmailVOTest extends TestCase
{
    public function testShouldHasErrorsWhenCreatedFromInvalidEmailAddress()
    {
        $email = new EmailVO('invalid');

        $email->validate();

        $this->assertNotEmpty($email->getErrors());
        $this->assertFalse($email->isValid());
    }

    public function testShouldNotHasErrorsWhenCreatedFromValidEmailAddress()
    {
        $email = new EmailVO('user@example.com');

        $email->validate();

        $this->assertEmpty($email->getErrors());
        $this->assertTrue($email->isValid());
    }
    
    public function testShouldHasNoErrorsWhenCreatedInvalidButThenSetValidAddress()
    {
        $email = new EmailVO('invalid');

        $email->validate();
        $email->setEmail('user@example.com');
        $email->validate();

        $this->assertEmpty($email->getErrors());
        $this->assertTrue($email->isValid());
    }
}