<?php

namespace FactoryMethod\Product;

class TeslaModelX implements CarProduct
{
    public function accelerate() {
        echo "Accelerating Tesla Model X\n";
    }

    public function brake() {
        echo "Braking Tesla Model X\n";
    }

    public function shiftGear() {
        echo "Shifting gear of Tesla Model X\n";
    }
}