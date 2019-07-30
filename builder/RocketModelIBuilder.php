<?php

namespace Builder;

class RocketModelIBuilder extends RocketBuilder
{
    public function buildFuelTank()
    {
        $this->rocket->setFuelTank(1000);
    }

    public function buildModel()
    {
        $this->rocket->setModel('Rocket Model I');
    }

    public function buildMotorAmount()
    {
        $this->rocket->setMotorAmount(3);
    }

    public function buildSeatAmount()
    {
        $this->rocket->setSeatAmount(8);
    }
}
