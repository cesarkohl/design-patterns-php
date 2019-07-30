<?php

namespace Memento;

class Text
{
    protected $text;
    protected $textCareTaker;

    public function __construct()
    {
        $this->textCareTaker = new TextCareTaker();
        $this->text = '';
    }

    public function writeText(string $text)
    {
        $this->textCareTaker->addMemento(new TextMemento($this->text));
        $this->text .= $text;
    }

    public function undoWrite()
    {
        $this->text = $this
            ->textCareTaker
            ->returnLastStateSaved()
            ->getText();
    }

    public function returnText(): string
    {
        return $this->text;
    }

}