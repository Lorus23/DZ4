<?php

class student extends aMain
{
    use additional;

    public function calc($data)
    {
        if (intval($data['age']) <= 25) {
            $time = intval($data['timeHour']) * 60 + intval($data['timeMin']);
            $price = intval($data['distance']) * 4 + $time * 1;
            if ($data['gps']) {
                $price += gpsServices($time, $price);
            }
            if ($data['driver']) {
                echo "В выбранном тарифе дополнительный водитель не предусмотрен.";
                echo '<br>';
            }
            if ($data['age'] >= 18 && $data['age'] <= 21) {
                $price += $this->ageRatio($price);
            }
            return $price;
        } else {
            echo 'Для вашего возраста студенческий тариф не предусмотрен!';
            echo '<br>';
        }
    }
}