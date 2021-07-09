<?php

namespace Kodeas\Publicise\Tests\Support;

class DummyParentClass
{
    public string $parentPublicProperty;

    protected string $parentProtectedProperty;

    public function parentPublicMethod(): string
    {
        return 'parentPublicMethod';
    }

    protected function parentProtectedMethod(): string
    {
        return 'parentProtectedMethod';
    }
}
