<?php

require_once 'autoloader.php';

$libraryFacade = new Facade\LibraryFacade();

$bookCode = '10';
$clientId = '99';

$madeWithdrawal = $libraryFacade->makeWithdrawal($bookCode, $clientId);

if ($madeWithdrawal) {
    $libraryFacade->triggerMessages($bookCode, $clientId, 'API_KEY', 'API_PASSWORD');
}