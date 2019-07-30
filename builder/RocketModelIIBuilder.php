<?php

namespace Builder;

class RocketModelIIBuilder extends RocketBuilder
{
    public function buildFuelTank()
    {
        $this->rocket->setFuelTank(850);
    }

    public function buildModel()
    {
        $this->rocket->setModel('Rocket Model II');
    }

    public function buildMotorAmount()
    {
        $this->rocket->setMotorAmount(2);
    }

    public function buildSeatAmount()
    {
        $this->rocket->setSeatAmount(6);
    }
}
