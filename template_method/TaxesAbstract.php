<?php

namespace TemplateMethod;

abstract class TaxesAbstract
{
    private function calculateFirstTaxFixed(float $productPrice): float
    {
        return $productPrice * 1.3;
    }

    private function calculateSecondTaxFixed(float $productPrice): float
    {
        return $productPrice * 1.1;
    }

    abstract protected function calculateTaxVariable(float $productPrice): float;

    protected function calculateTaxAdditional(float $productPrice): float
    {
        return $productPrice;
    }

    public function calculateProductTaxes(float $productPrice): float
    {
        $productPrice = $this->calculateFirstTaxFixed($productPrice);
        $productPrice = $this->calculateSecondTaxFixed($productPrice);
        $productPrice = $this->calculateTaxVariable($productPrice);
        $productPrice = $this->calculateTaxAdditional($productPrice);

        return $productPrice;
    }
}