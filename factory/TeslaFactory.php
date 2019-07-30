<?php

use FactoryMethod\CarFactory;
use FactoryMethod\Product\{CarProduct, TeslaModelS, TeslaModelX};

class TeslaFactory implements CarFactory
{
    /**
     * Create Car
     *
     * @param string $carModel
     * @return CarProduct
     * @throws Exception
     */
    public function createCar(string $carModel): CarProduct
    {
        switch ($carModel)
        {
            case 'model_x':
                return new TeslaModelX();
                break;
            case 'model_s':
                return new TeslaModelS();
                break;
            default:
                throw new \Exception("Car model $carModel does not exist");
                break;
        }
    }
}