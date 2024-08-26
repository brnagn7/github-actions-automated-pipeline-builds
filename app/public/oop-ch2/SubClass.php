<?php

class SubClass extends BaseClass
{
    public function getParentProtectedProperty(): string
    {
        return $this->getProtectedProperty();
    }
}