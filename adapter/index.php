<?php

require_once 'autoloader.php';

$integrationErp = new IntegrationErp();
$integrationErpAdapter = new IntegrationErpAdapter($integrationErp);

$token = $integrationErpAdapter->generateToken('ABC', 'username');

$order = new Order();
$order->setOrderNumber(10)
    ->addProduct('iPhone');

$orderSentSuccessfully = $integrationErpAdapter->sendOrder($order, $token);
if ($orderSentSuccessfully)
    echo 'Order sent successfully';