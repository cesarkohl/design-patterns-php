<?php

namespace Facade;

class ModuleStock
{
    public function registerWithdrawal(string $bookCode, int $clientId): bool
    {
        return true;
    }

    public function validateStock(string $bookCode): bool
    {
        echo "Stock validation done successfully\n";
        return true;
    }
}