<?php

namespace TemplateMethod;

class TaxesElectric extends TaxesAbstract
{
    protected function calculateTaxVariable(float $productPrice): float
    {
        return $productPrice * 1.2;
    }

    protected function calculateTaxAdditional(float $productPrice): float
    {
        return $productPrice - ($productPrice * 0.1);
    }
}