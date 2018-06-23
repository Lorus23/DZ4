<?php

class daily extends aMain
{
    use additional;

    public function calc($data)
    {
        $time = intval($data['timeHour']) * 60 + intval($data['timeMin']) + intval($data['daily'] * 24 * 60);

        if ($time < 60 * 24) {
            $time = 60 * 24;
        }

        if ($time % (60 * 24) > 30) {
            $time -= $time % (60 * 24);
            $time += (60 * 24);
        } else {
            $time -= $time % (60 * 24);
        }

        $price = round($time / (60 * 24) * 1000);

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