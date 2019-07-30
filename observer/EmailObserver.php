<?php

namespace Observer;

class EmailObserver implements Observer
{
    public function updated(string $code)
    {
        $this->sendEmailStockZero($code);
    }

    public function sendEmailStockZero(string $productCode)
    {
        echo "Email sent to Purchasing Sector";
    }

}