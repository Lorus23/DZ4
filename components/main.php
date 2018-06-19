<?php

abstract class A_Main implements I_Calculation
{
    public function ageRatio($price)
    {
        $price *= 1.1;
        return $price;
    }
}