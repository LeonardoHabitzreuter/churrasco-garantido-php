<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

class FakeEntity extends Entity 
{
    public function addAnError()
    {
        $this->addError("The entity should has a valid name");
    }

    public function getErrors()
    {
        return $this->errors;
    }
}

final class ErrorBaseTest extends TestCase
{
    public function testShouldHasNoErrorsWhenInitialized()
    {
        $entity = new FakeEntity();
        
        $this->assertEmpty($entity->getErrors());
    }

    public function testShouldHasErrorsWhenAdded()
    {
        $entity = new FakeEntity();
        
        $entity->addAnError();

        $this->assertNotEmpty($entity->getErrors());
    }
}