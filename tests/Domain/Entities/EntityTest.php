<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

class FakeEntity extends Entity {}

final class EntityTest extends TestCase
{
    public function testShouldSetAnIdWhenBuilded()
    {
        $entity = new FakeEntity();
        
        $this->assertNotEmpty($entity->getId());
    }
}