<?php

namespace GameLib;

function isEven($number)
{
    if (($number % 2) == 0) {
            return true;
    }
    return false;
}

function getRightAnswer($number)
{
    if (\GameLib\isEven($number)) {
        return 'yes';
    }
    return 'no';
}

function getRand()
{
    $min = 1;
    $max = 100;
    return rand($min, $max);
}
