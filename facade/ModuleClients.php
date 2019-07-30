<?php

namespace Facade;

class ModuleClients
{
    public function searchClient(string $idClient): array
    {
        return [
            'name'  => 'Johnny Silverhand',
            'phone' => '999-999-999',
            'email' => 'john@cyber.punk',
        ];
    }
}