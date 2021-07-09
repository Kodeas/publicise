<?php

namespace Kodeas\Publicise;

use ReflectionClass;
use ReflectionException;

class Publicise
{
    private ReflectionClass $reflection;
    private object $instance;

    public function __construct(object $instance)
    {
        $this->reflection = new ReflectionClass($instance);
        $this->instance = $instance;
    }

    /**
     * @param  string  $name
     * @param  array  $arguments
     * @return mixed
     * @throws ReflectionException
     */
    public function __call(string $name, array $arguments): mixed
    {
        $method = $this->reflection->getMethod($name);
        $method->setAccessible(true);

        return $method->invoke($this->instance, ...$arguments);
    }

    /**
     * @param  string  $name
     * @return mixed
     * @throws ReflectionException
     */
    public function __get(string $name): mixed
    {
        $property = $this->reflection->getProperty($name);
        $property->setAccessible(true);

        return $property->getValue($this->instance);
    }

    /**
     * @param  string  $name
     * @param $value
     * @throws ReflectionException
     */
    public function __set(string $name, $value): void
    {
        $property = $this->reflection->getProperty($name);
        $property->setAccessible(true);

        $property->setValue($this->instance, $value);
    }
}
