<?php

trait additional
{
    public function gpsServices($time, $price)
    {
        if ($time < 60) {
            $time = 60;
            $price += $time / 60 * 15;
        } else {
            $price += $time / 60 * 15;
        }
        return $price;
    }

    public function driverServices($price)
    {
        $price += 100;
        return $price;
    }
}