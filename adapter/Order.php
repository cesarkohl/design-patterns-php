<?php

class Order
{
    protected $orderNumber;
    protected $totalValue;
    protected $products;

    public function addProduct(string $product): Order
    {
        $this->products[] = $product;
        return $this;
    }

    public function getTotalValue(): float
    {
        return $this->totalValue ?? 0;
    }

    public function setTotalValue(float $totalValue): Order
    {
        $this->totalValue = $totalValue;
        return $this;
    }

    public function getOrderNumber(): float
    {
        return $this->orderNumber;
    }

    public function setOrderNumber(float $orderNumber): Order
    {
        $this->orderNumber = $orderNumber;
        return $this;
    }

    public function getProducts(): array
    {
        return $this->products;
    }

    public function setProducts(float $products): Order
    {
        $this->products = $products;
        return $this;
    }


}