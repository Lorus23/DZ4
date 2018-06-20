<?php

class daily extends aMain
{
    use additional;

    public function calc($data)
    {
        $time = intval($data['timeHour']) * 60 + intval($data['timeMin']);
        if ($time < 60 * 24) {
            $time = 60 * 24;
        }
        $price = round($time * 1000 / 60 * 24);

        if ($data['gps']) {
            $price += gpsServices($time, $price);
        }
        if ($data['driver']) {
            $price += driverServices($price);
        }
        if ($data['age'] >= 18 && $data['age'] <= 23) {
            $price += $this->ageRatio($price);
        }
        return $price;
    }
}