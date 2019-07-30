<?php

namespace Decorator;

class Archer extends Character
{
    public function __construct()
    {
        $this->name = 'Archer';
        $this->attack = 9;
    }
}