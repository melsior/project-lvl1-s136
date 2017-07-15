<?php
namespace BrainPrime;

const MESSAGE = 'Answer "yes" if number is prime otherwise answer "no".';
function isPrime($number)
{
    for($i = 2; $i < $number / 2; $i++) {
        if ($number % $i === 0) {
            return false;
        }
    }
    return true;
}

function runPrimeGame()
{
    $getTask = function () {
        $minNumber = 1;
        $maxNumber = 1000;
        $number = \GameLib\getNumber($minNumber, $maxNumber);
        return [$number];
    };
    $getRightAnswer = function ($numbers) {
        return (isPrime($numbers[0])) ? 'yes' : 'no';
    };
    \GameLib\runGame(MESSAGE, $getTask, $getRightAnswer);
}
