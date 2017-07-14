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
        return rand(1, 100);
    };
    $getRightAnswer = function ($number) {
        return (isEven($number)) ? 'yes' : 'no';
    };
    \CliMessage\printGreeting(MESSAGE);
    $name = \CliMessage\askUserName();
    \CliMessage\printHelloUser($name);
    $count = 3;
    \GameLib\runGame($getTask, $getRightAnswer, $count, $name);
}
