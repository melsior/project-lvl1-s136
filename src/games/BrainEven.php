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
        $number = rand(1, 100);
        return $number;
    };
    $getRightAnswer = function ($number) {
        return (isEven($number)) ? 'yes' : 'no';
    };
    
    \GameLib\runGame($getTask, $getRightAnswer);
}
