<?php

namespace Kodeas\Publicise\Tests\Support;

class DummyClass extends DummyParentClass
{
    public mixed $publicProperty;

    protected mixed $protectedProperty;

    private mixed $privateProperty;

    private bool $isConstructed = false;

    public function __construct(bool $isConstructed = false)
    {
        $this->isConstructed = $isConstructed;
    }

    public function publicMethod(): string
    {
        return 'publicMethod';
    }

    protected function protectedMethod(): string
    {
        return 'protectedMethod';
    }

    private function privateMethod(): string
    {
        return 'privateMethod';
    }
}
