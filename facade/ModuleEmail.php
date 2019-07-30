<?php

namespace Facade;

class ModuleEmail
{
    public function validateEmailServer(): bool
    {
        return true;
    }

    public function sendMessage(
        string $senderName,
        string $receiverAddress,
        string $receiverEmail,
        string $message
    ): bool
    {
        echo "Email sent successfully\n";
        return true;
    }
}