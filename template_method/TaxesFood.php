<?php

namespace TemplateMethod;

class TaxesFood extends TaxesAbstract
{
    protected function calculateTaxVariable(float $productPrice): float
    {
        // No variable taxes

        return $productPrice;
    }
}