<?php

class hourly
{
    public function __construct($data)
    {
        $time = intval($data['timeHour']) * 60 + intval($data['timeMin']);
        if ($time < 60) {
            $time = 60;
        }
        $price = round($time * 200 / 60);
        if ($data['gps']) {
            $price += round($time / 60 * 15);
        }
        if ($data['driver']) {
            $price += 100;
        }
        echo $price;
        return $price;
    }
}