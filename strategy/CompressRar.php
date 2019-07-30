<?php

namespace Strategy;

class CompressRar extends CompressStrategy
{
    public function compress(string $filesDirectory): bool
    {
        echo 'File compressed in .RAR.';
        return true;
    }
}