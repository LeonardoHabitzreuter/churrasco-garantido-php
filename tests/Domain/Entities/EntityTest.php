<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

class FakeEntity extends Entity 
{
    public function addAnError()
    {
        $this->addError("The entity should has a valid name");
    }
}

final class EntityTest extends TestCase
{
    public function testShouldHasNoErrorsWhenInitialized()
    {
        $entity = new FakeEntity();
        
        $this->assertEmpty($entity->errors);
    }

    public function testShouldHasErrorsWhenAdded()
    {
        $entity = new FakeEntity();
        
        $entity->addAnError();

        $this->assertNotEmpty($entity->errors);
    }
}