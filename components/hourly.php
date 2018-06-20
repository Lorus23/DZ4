<?php

class hourly extends aMain
{
    use additional;

    public function calc($data)
    {
        $time = intval($data['timeHour']) * 60 + intval($data['timeMin']);
        if ($time < 60) {
            $time = 60;
        }
        $price = round($time * 200 / 60);
        if ($data['gps']) {
            $price += gpsServices($time, $price);
        }
        if ($data['driver']) {
            $price += driverServices($price);
        }
        if ($data['age'] >= 18 && $data['age'] <= 21) {
            $price = $this->ageRatio($price);
        }
        return $price;
    }
}