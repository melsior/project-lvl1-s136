<?php

namespace GameLib;

function runGame($message, $getTask, $getRightAnswer)
{
    \CliMessage\printGreeting($message);
    $name = \CliMessage\askUserName();
    \CliMessage\printHelloUser($name);
    $isQuitGame = false;
    $count = 3;
    for ($i = 0; $i < $count; $i++) {
        $gameTask = $getTask();
        \CliMessage\printTask($gameTask);
        $answer = \CliMessage\getAnswer();
        //var_dump($answer);
        $rightAnswer = $getRightAnswer($gameTask);
        if ($answer != $rightAnswer) {
            \CliMessage\printRightAnswer($answer, $rightAnswer);
            $isQuitGame = true;
            break;
        }
        \CliMessage\printCorrect();
    }
    if ($isQuitGame) {
        \CliMessage\printLoseMessage($name);
    }
    \CliMessage\printWinMessage($name);
    }
}
