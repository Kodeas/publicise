<?php

namespace Kodeas\Publicise\Tests;

use Kodeas\Publicise\Tests\Support\DummyClass;
use Kodeas\Publicise\WithPublicise;
use PHPUnit\Framework\TestCase;

class PubliciseTest extends TestCase
{
    use WithPublicise;

    /** @test */
    public function can_call_public_method()
    {
        $dummyClass = $this->publicise(new DummyClass());

        $this->assertEquals('publicMethod', $dummyClass->publicMethod());
    }

    /** @test */
    public function can_call_protected_method()
    {
        $dummyClass = $this->publicise(new DummyClass());

        $this->assertEquals('protectedMethod', $dummyClass->protectedMethod());
    }

    /** @test */
    public function can_call_private_method()
    {
        $dummyClass = $this->publicise(new DummyClass());

        $this->assertEquals('protectedMethod', $dummyClass->protectedMethod());
    }

    /** @test */
    public function can_set_and_get_public_property()
    {
        $dummyClass = $this->publicise(new DummyClass());

        $dummyClass->publicProperty = 'publicProperty';

        $this->assertEquals('publicProperty', $dummyClass->publicProperty);
    }

    /** @test */
    public function can_set_and_get_protected_property()
    {
        $dummyClass = $this->publicise(new DummyClass());

        $dummyClass->protectedProperty = 'protectedProperty';

        $this->assertEquals('protectedProperty', $dummyClass->protectedProperty);
    }

    /** @test */
    public function can_set_and_get_private_property()
    {
        $dummyClass = $this->publicise(new DummyClass());

        $dummyClass->privateProperty = 'privateProperty';

        $this->assertEquals('privateProperty', $dummyClass->privateProperty);
    }

    /** @test */
    public function can_call_parent_public_method()
    {
        $dummyClass = $this->publicise(new DummyClass());

        $this->assertEquals('parentPublicMethod', $dummyClass->parentPublicMethod());
    }

    /** @test */
    public function can_call_parent_protected_method()
    {
        $dummyClass = $this->publicise(new DummyClass());

        $this->assertEquals('parentProtectedMethod', $dummyClass->parentProtectedMethod());
    }

    /** @test */
    public function can_set_and_get_parent_public_property()
    {
        $dummyClass = $this->publicise(new DummyClass());

        $dummyClass->parentPublicProperty = 'parentPublicProperty';

        $this->assertEquals('parentPublicProperty', $dummyClass->parentPublicProperty);
    }

    /** @test */
    public function can_set_and_get_parent_protected_property()
    {
        $dummyClass = $this->publicise(new DummyClass());

        $dummyClass->parentProtectedProperty = 'parentProtectedProperty';

        $this->assertEquals('parentProtectedProperty', $dummyClass->parentProtectedProperty);
    }

    /** @test */
    public function the_class_is_instantiated()
    {
        $dummyClass = $this->publicise(new DummyClass(true));

        $this->assertTrue($dummyClass->isConstructed);
    }
}
