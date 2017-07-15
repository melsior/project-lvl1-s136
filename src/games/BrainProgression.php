<?php
namespace BrainProgression;

const MESSAGE = 'What number is missing in this progression?';
function getProgression()
{
    $tempNumber = \GameLib\getNumber(1, 10);
    $stepNumber = \GameLib\getNumber(1, 10);
    for ($i = 0; $i < 10; $i++) {
        $numbers[$i] = $tempNumber + $stepNumber;
        $tempNumber = $numbers[$i];
    }
    return $numbers;
}
function findNumber($arrNumber)
{
    $arrKey = array_search('..', $arrNumber);
    if ($arrKey > 1) {
        $step = $arrNumber[1] - $arrNumber[0];
        $result = $arrNumber[0] + $step * $arrKey;
    } else {
        $step = $arrNumber[9] - $arrNumber[8];
        $result = $arrNumber[9] - $step * (9 - $arrKey);
    }
    return $result;
}
function runProgressionGame()
{
    $getTask = function () {
        $numbers = [];
        $randKey = \GameLib\getNumber(0, 9);
        $numbers = \BrainProgression\getProgression();
        $numbers[$randKey] = '..';
        return $numbers;
    };
    $getRightAnswer = function ($numbers) {
        return findNumber($numbers);
    };
    
    \GameLib\runGame(MESSAGE, $getTask, $getRightAnswer);
}
