<?php

class base extends aMain
{
    use additional;

    public function calc($data)
    {
        $time = intval($data['timeHour']) * 60 + intval($data['timeMin']) + intval($data['daily'] * 24 * 60);
        $price = intval($data['distance']) * 10 + $time * 3;
        if ($data['age'] >= 18 && $data['age'] <= 21) {
            $price = $this->ageRatio($price);
        }
        if ($data['gps']) {
            $price = $this->gpsServices($time, $price);
        }
        if ($data['driver']) {
            echo "В выбранном тарифе дополнительный водитель не предусмотрен.";
            echo '<br>';
        }

        return $price;
    }
}