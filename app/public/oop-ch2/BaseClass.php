<?php

class BaseClass
{
    public $publicProperty = 'Public accessed anywhere';
    protected $protectedProperty = 'Protected accessed only within declaring class or subclass';

    private $privateProperty = 'only accessed in declaring class';

    public function getProtectedProperty(): string
    {
        return $this->protectedProperty;
    }

    public function getPrivateProperty(): string
    {
        return $this->privateProperty;
    }
}