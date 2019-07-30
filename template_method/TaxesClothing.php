<?php

namespace TemplateMethod;

class TaxesClothing extends TaxesAbstract
{
    protected function calculateTaxVariable(float $productPrice): float
    {
        return $productPrice * 1.15;
    }
}