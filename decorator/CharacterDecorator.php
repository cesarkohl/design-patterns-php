<?php

namespace Decorator;

abstract class CharacterDecorator extends Character
{
    protected $character;

    public function __construct(Character $character)
    {
        $this->character = $character;
    }

    public function getName(): string
    {
        return $this->character->getName();
    }

    public function getAttack(): float
    {
        return $this->character->getAttack() + $this->attack;
    }
}