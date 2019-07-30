<?php

namespace Facade;

use Facade\{ModuleStock, ModuleClients, ModuleEmail, ModuleApiSms};
use mysql_xdevapi\Exception;

class LibraryFacade
{
    public function makeWithdrawal(string $bookCode, string $clientId): bool
    {
        $moduleStock = new ModuleStock();

        if (!$moduleStock->validateStock($bookCode)) {
            throw new Exception('Stock unavailable');
        }

        return $moduleStock->registerWithdrawal($bookCode, $clientId);
    }

    public function triggerMessages(
        string $bookCode,
        string $clientId,
        string $apiKey,
        string $apiPassword
    ): bool
    {
        $moduleApiSms = new ModuleApiSms();
        $moduleClients = new ModuleClients();
        $moduleEmail = new ModuleEmail();

        $client = $moduleClients->searchClient($clientId);

        if ($moduleEmail->validateEmailServer()) {
            $moduleEmail->sendMessage(
                "Library Test",
                $client['name'],
                $client['email'],
                "Rented book code: {$bookCode}"
            );
        }

        $token = $moduleApiSms->generateTokenApi($apiKey, $apiPassword);

        $moduleApiSms->sendSms(
            $token,
            "Library Test",
            $client['name'],
            $client['phone'],
            "Rented book code: {$bookCode}"
        );

        return true;
    }
}