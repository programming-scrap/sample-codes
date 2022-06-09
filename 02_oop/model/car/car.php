<?php
require_once(__dir__.'/../tire/tire.php');

class Car
{
    private int $driveDistance = 0;
    private Tire $frontLeftTire;
    private Tire $frontRightTire;
    private Tire $backLeftTire;
    private Tire $backRightTire;

    public function __construct(
        Tire $frontLeftTire,
        Tire $frontRightTire,
        Tire $backLeftTire,
        Tire $backRightTire
    ) {
        $this->frontLeftTire  = $frontLeftTire;
        $this->frontRightTire = $frontRightTire;
        $this->backLeftTire   = $backLeftTire;
        $this->backRightTire  = $backRightTire;
    }

    public function drive(int $distance)
    {
        $this->driveDistance += $distance;
        $this->frontLeftTire->consume($distance);
        $this->frontRightTire->consume($distance);
        $this->backLeftTire->consume($distance);
        $this->backRightTire->consume($distance);
    }

    // 車を点検して問題がないかを調べます
    public function check(): void
    {
        if ($this->checkTire() === false) {
            echo "はしれません\n";

            return;
        }

        echo "はしれます\n";
    }

    // タイヤの点検を行います
    public function checkTire(): bool
    {
        return $this->frontLeftTire->check() &&
            $this->frontRightTire->check() &&
            $this->backLeftTire->check() &&
            $this->backRightTire->check();
    }

    public function changeFrontLeftTire(Tire $tire): void
    {
        $this->frontLeftTire = $tire;
    }

    public function changeFrontRightTire(Tire $tire): void
    {
        $this->frontRightTire = $tire;
    }

    public function changeBackLeftTire(Tire $tire): void
    {
        $this->backLeftTire = $tire;
    }

    public function changeBackRightTire(Tire $tire): void
    {
        $this->backRightTire = $tire;
    }
}
