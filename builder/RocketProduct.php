<?php

namespace Builder;

class RocketProduct
{
    protected $fuelTank;
    protected $model;
    protected $motorAmount;
    protected $seatAmount;

    public function __toString(): string
    {
        $result  = "Rocket Model: {$this->getModel()}\n";
        $result .= "Fuel Tank: {$this->getFuelTank()}\n";
        $result .= "Motor Amount: {$this->getMotorAmount()}\n";
        $result .= "Seat Amount: {$this->getSeatAmount()}\n";

        return $result;
    }

    public function getFuelTank(): float
    {
        return $this->fuelTank;
    }

    public function setFuelTank(float $fuelTank): RocketProduct
    {
        $this->fuelTank = $fuelTank;
        return $this;
    }

    public function getModel(): string
    {
        return $this->model;
    }

    public function setModel(string $model): RocketProduct
    {
        $this->model = $model;
        return $this;
    }

    public function getMotorAmount(): float
    {
        return $this->motorAmount;
    }

    public function setMotorAmount(float $motorAmount): RocketProduct
    {
        $this->motorAmount = $motorAmount;
        return $this;
    }

    public function getSeatAmount(): float
    {
        return $this->seatAmount;
    }

    public function setSeatAmount(float $seatAmount): RocketProduct
    {
        $this->seatAmount = $seatAmount;
        return $this;
    }

}
