<?php

namespace Strategy;

abstract class CompressStrategy
{
    public function renameFilesInOrder()
    {
        echo 'Files renamed.';
    }

    abstract public function compress(string $filesDirectory): bool;
}