<?php

namespace Decorator;

abstract class Character
{
    protected $attack;
    protected $name;

    public function getName(): string
    {
        return $this->name;
    }

    public function getAttack(): float
    {
        return $this->attack;
    }
}