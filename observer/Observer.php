<?php

namespace Observer;

interface Observer
{
    public function updated(string $code);
}