<?php

namespace Prototype;

class PhpBookPrototype extends BookPrototype
{
    public function __construct()
    {
        $this->setSubject('PHP');
    }

    public function __clone()
    {
        echo "PHP Book Cloned\n";
    }
}