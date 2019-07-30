<?php

namespace Builder;

class FactoryRocketDirector
{
    protected $rocketBuilder;

    public function __construct(RocketBuilder $rocketBuilder)
    {
        $this->rocketBuilder = $rocketBuilder;
    }

    public function getRocket(): RocketProduct
    {
        return $this->rocketBuilder->getRocket();
    }

    public function buildRocket()
    {
        $this->rocketBuilder->buildModel();
        $this->rocketBuilder->buildMotorAmount();
        $this->rocketBuilder->buildFuelTank();
        $this->rocketBuilder->buildSeatAmount();
    }

}