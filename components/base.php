<?php

class base extends main
{
    public function __construct($data)
    {
        $time = intval($data['timeHour']) * 60 + intval($data['timeMin']);
        $price = intval($data['distance']) * 10 + $time * 3;

        if ($data['gps']) {
            if ($time < 60) {
                $time = 60;
                $price += (round($time) / 60 * 15);
            } else {
                $price += (round($time) / 60 * 15);
            }
        }
        if ($data['driver']) {
            echo "В выбранном тарифе дополнительный водитель не предусмотрен.";
        }
        echo $price;
        return $price;
    }
}

