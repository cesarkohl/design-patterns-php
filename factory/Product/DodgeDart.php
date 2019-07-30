<?php

namespace FactoryMethod\Product;

class DodgeDart implements CarProduct
{
    public function accelerate() {
        echo "Accelerating Dodge Dart\n";
    }

    public function brake() {
        echo "Braking Dodge Dart\n";
    }

    public function shiftGear() {
        echo "Shifting gear of Dodge Dart\n";
    }
}