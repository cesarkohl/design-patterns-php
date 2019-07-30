<?php

interface IErpAdapter
{
    public function generateToken(string $apiKey, string $user): string;

    public function sendOrder(Order $order, string $token): bool;
}