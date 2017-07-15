<?php
namespace BrainEven;

const MESSAGE = 'Answer "yes" if number even otherwise answer "no".';
function isEven($number)
{
    return ($number % 2) == 0;
}

function runEvenGame()
{
    $getTask = function () {
        $minNumber = 1;
        $maxNumber = 100;
        $number1 = \GameLib\getNumber($minNumber, $maxNumber);
        return [$number1];
    };
    $getRightAnswer = function ($numbers) {
        return (isEven($numbers[0])) ? 'yes' : 'no';
    };
    
    \GameLib\runGame(MESSAGE, $getTask, $getRightAnswer);
}
