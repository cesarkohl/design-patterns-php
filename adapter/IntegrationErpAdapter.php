<?php

class IntegrationErpAdapter implements IErpAdapter
{
    private $integrationErp;

    public function __construct(IntegrationErp $integrationErp)
    {
        $this->integrationErp = $integrationErp;
    }

    public function generateToken(string $apiKey, string $user): string
    {
        return $this->integrationErp->token($apiKey);
    }

    public function sendOrder(Order $order, string $token): bool
    {
        $orderArray = [
            'total_value' => $order->getTotalValue(),
            'code' => $order->getOrderNumber()
        ];

        foreach ($order->getProducts() as $product) {
            $orderArray['products'][] = $product;
        }

        return $this->integrationErp->order($orderArray, $token);
    }
}