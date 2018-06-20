<?php

abstract class aMain implements iCalculation
{
    public function ageRatio($price)
    {
        $price *= 1.1;
        return $price;
    }
}