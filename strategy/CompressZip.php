<?php

namespace Strategy;

class CompressZip extends CompressStrategy
{
    public function compress(string $filesDirectory): bool
    {
        echo 'File compressed in .ZIP.';
        return true;
    }
}