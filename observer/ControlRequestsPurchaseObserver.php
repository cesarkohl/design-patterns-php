<?php

namespace Observer;

class ControlRequestsPurchaseObserver implements Observer
{
    public function updated(string $code)
    {
        $this->addListRequestsPurchase($code);
    }

    public function addListRequestsPurchase(string $productCode)
    {
        echo 'Product added to list of purchase requests';
    }
}