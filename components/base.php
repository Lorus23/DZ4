<?php

class base extends aMain
{
    use additional;

    public function calc($data)
    {
        $time = intval($data['timeHour']) * 60 + intval($data['timeMin']);
        $price = intval($data['distance']) * 10 + $time * 3;

        if ($data['gps']) {
            $price += gpsServices($time, $price);
        }
        if ($data['driver']) {
            echo "В выбранном тарифе дополнительный водитель не предусмотрен.";
            echo '<br>';
        }
        if ($data['age'] >= 18 && $data['age'] <= 23) {
            $price = $this->ageRatio($price);
        }
        return $price;
    }
}

