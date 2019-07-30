<?php

namespace FactoryMethod;

use FactoryMethod\Product\CarProduct;

interface CarFactory
{
    public function createCar(string $carModel): CarProduct;
}