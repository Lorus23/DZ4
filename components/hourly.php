<?php

class hourly extends aMain
{
    use additional;

    public function calc($data)
    {
        $time = intval($data['timeHour']) * 60 + intval($data['timeMin']) + intval($data['daily'] * 24 * 60);
        if ($time < 60) {
            $time = 60;
        }
        $price = round($time * 200 / 60);

        if ($data['age'] >= 18 && $data['age'] <= 21) {
            $price = $this->ageRatio($price);
        }

        if ($data['gps']) {
            $price = $this->gpsServices($time, $price);
        }

        if ($data['driver']) {
            $price = $this->driverServices($price);
        }

        return $price;
    }
}