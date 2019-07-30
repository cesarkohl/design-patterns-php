<?php

namespace Prototype;

abstract class BookPrototype {

    protected $title;
    protected $subject;
    protected $writerName;

    abstract public function __clone();

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): BookPrototype
    {
        $this->title = $title;
        return $this;
    }

    public function getSubject(): string
    {
        return $this->subject;
    }

    public function setSubject(string $subject): BookPrototype
    {
        $this->subject = $subject;
        return $this;
    }

    public function getWriterName(): string
    {
        return $this->writerName;
    }

    public function setWriterName(string $writerName): BookPrototype
    {
        $this->writerName = $writerName;
        return $this;
    }

}