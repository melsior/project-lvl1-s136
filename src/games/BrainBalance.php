<?php

namespace BrainBalance;

const MESSAGE = "Balance the given number.";
function getBalancedNumber($strNumber)
{
    $arrNumber = [];
    $arrNumber = array_map('intval', str_split($strNumber));
    $arrLength = count($arrNumber);
    $sumOfDigit = array_sum($arrNumber);
    $averNum = floor($sumOfDigit / $arrLength);
    $remNum = $sumOfDigit % $arrLength;
    $arrBalanced = [];
    for ($i = 0; $i < $arrLength; $i++) {
        $arrBalanced[$i] = $averNum;
        if ($remNum > 0) {
            $arrBalanced[$i] += 1;
            $remNum--;
        }
    }
    sort($arrBalanced);
    $balancedNumber = implode('', $arrBalanced);
    return $balancedNumber;
}
function runBalanceGame()
{
    $getTask = function () {
        $minNumber = 10;
        $maxNumber = 1000;
        $number = \GameLib\getNumber($minNumber, $maxNumber);
        return [$number];
    };
    $getRightAnswer = function ($numbers) {
        return getBalancedNumber($numbers[0]);
    };
    \GameLib\runGame(MESSAGE, $getTask, $getRightAnswer);
}
