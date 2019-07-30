<?php

namespace FactoryMethod\Product;

class TeslaModelS implements CarProduct
{
    public function accelerate() {
        echo "Accelerating Tesla Model S\n";
    }

    public function brake() {
        echo "Braking Tesla Model S\n";
    }

    public function shiftGear() {
        echo "Shifting gear of Tesla Model S\n";
    }
}