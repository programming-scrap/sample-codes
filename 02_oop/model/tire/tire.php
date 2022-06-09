<?php

abstract class Tire
{
    // 走行距離
    private int $driveDistance = 0;

    // 引数の距離（キロメートル）だけ走行したので、その分タイヤを消費します
    function consume(int $distance)
    {
        $this->driveDistance += $distance;
    }

    // タイヤの状態に問題がないかを調べます
    function check(): bool
    {
        if ($this->driveDistance > $this->getRunnableDistance()) {
            return false;
        }

        return true;
    }

    // 残りのミゾの深さをミリメートル単位で返却します
    abstract function getRunnableDistance(): int;
}
