<?php
namespace BrainGcd;

const MESSAGE = 'Find the greatest common divisor of given numbers.';

function gcd($first, $second)
{
    return $second ? gcd($second, ($first % $second)) : $first;
}

function runGcdGame()
{
    $getTask = function () {
        $number1 = \GameLib\getNumber();
        $number2 = \GameLib\getNumber();
        return [$number1, $number2];
    };
    $getRightAnswer = function ($numbers) {
        return gcd($numbers[0], $numbers[1]);
    };
    \GameLib\runGame(MESSAGE, $getTask, $getRightAnswer);
}
