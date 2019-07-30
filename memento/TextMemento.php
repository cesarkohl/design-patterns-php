<?php

namespace Memento;

class TextMemento
{
    protected $textState;

    public function __construct(string $textState)
    {
        $this->textState = $textState;
    }

    public function getText(): string
    {
        return $this->textState;
    }
}