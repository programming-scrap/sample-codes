<?php
require_once(__dir__.'/../tire/abstract_tire.php');

class Car
{
    private int $driveDistance = 0;
    private AbstractTire $tire;

    public function __construct(
        AbstractTire $tire,
    ) {
        $this->tire = $tire;
    }

    public function drive(int $distance)
    {
        $this->driveDistance += $distance;
        $this->tire->consume($distance);
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
        return $this->tire->check();
    }

    public function changeTire(AbstractTire $tire): AbstractTire
    {
        $tmp        = $this->tire;
        $this->tire = $tire;

        return $tmp;
    }
}
