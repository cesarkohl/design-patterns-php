<?php

namespace Facade;

class ModuleApiSms
{
    public function generateTokenApi(string $apiKey, string $apiPassword): string
    {
        return 'TOKEN';
    }

    public function sendSms(
        string $tokenApi,
        string $senderName,
        string $receiverName,
        string $receiverPhone,
        string $message
    ): bool
    {
        echo "SMS sent successfully\n";
        return true;
    }
}