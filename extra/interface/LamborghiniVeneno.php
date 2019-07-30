<?php

namespace InterfaceTutorial;

class LamborghiniVeneno implements CarProduct
{
    public function accelerate() {
        echo "Accelerating my Lambo\n";
    }

    public function brake() {
        echo "Braking my Lambo\n";
    }

    public function shiftGear() {
        echo "Shifting gear of my Lambo\n";
    }
}