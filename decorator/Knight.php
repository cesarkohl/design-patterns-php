<?php

namespace Decorator;

class Knight extends Character
{
    public function __construct()
    {
        $this->name = 'Knight';
        $this->attack = 13;
    }
}