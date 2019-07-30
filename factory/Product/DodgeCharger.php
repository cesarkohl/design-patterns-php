<?php

namespace FactoryMethod\Product;

class DodgeCharger implements CarProduct
{
    public function accelerate() {
        echo "Accelerating Dodge Charger\n";
    }

    public function brake() {
        echo "Braking Dodge Charger\n";
    }

    public function shiftGear() {
        echo "Shifting gear of Dodge Charger\n";
    }
}