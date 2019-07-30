<?php

namespace Strategy;

class CompressTar extends CompressStrategy
{
    public function compress(string $filesDirectory): bool
    {
        echo 'File compressed in .TAR.';
        return true;
    }
}