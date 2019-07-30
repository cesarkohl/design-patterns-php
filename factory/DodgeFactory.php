<?php

use FactoryMethod\CarFactory;
use FactoryMethod\Product\{CarProduct, DodgeCharger, DodgeDart};

class DodgeFactory implements CarFactory
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
            case 'charger':
                return new DodgeCharger();
                break;
            case 'dart':
                return new DodgeDart();
                break;
            default:
                throw new \Exception("Car model $carModel does not exist");
                break;
        }
    }
}