<?php

namespace GameLib;

function getNumber($minNumber, $maxNumber)
{
    return rand($minNumber, $maxNumber);
}

function runGame($message, $getTask, $getRightAnswer)
{
    \CliMessage\printGreeting($message);
    $name = \CliMessage\askUserName();
    \CliMessage\printHelloUser($name);
    $isQuit = false;
    $count = 3;
    for ($i = 0; $i < $count; $i++) {
        $gameTask = $getTask();
        \CliMessage\printTask($gameTask);
        $answer = \CliMessage\getAnswer();
        $rightAnswer = $getRightAnswer($gameTask);
        if ($answer != $rightAnswer) {
            \CliMessage\printRightAnswer($answer, $rightAnswer);
            $isQuit = true;
            break;
        }
        \CliMessage\printCorrect();
    }
    \CliMessage\printQuitGame($isQuit, $name);
}
