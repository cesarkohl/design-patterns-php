<?php

namespace Observer;

class ControlStockSubject implements Subject
{
    private $observers;

    public function updateProductStock(string $productCode, int $newAmount): bool
    {
        if ($newAmount == 0)
        {
            $this->notifyObservers($productCode);
        }
    }

    public function addObserver(Observer $observer)
    {
        $this->observers[] = $observer;
    }

    public function removeObserver(Observer $observerToRemove): bool
    {
        foreach ($this->observers as $index => $observer)
        {
            if ($observer === $observerToRemove) {
                unset($this->observers[$index]);
                return true;
            }
        }

        return false;
    }

    public function notifyObserver(string $productCode)
    {
        foreach($this->observers as $observer) {
            $observer->updated($productCode);
        }
    }
}