<?php

namespace GameLib;

function runGame($getTask, $getRightAnswer, $count, $name)
{
    $isQuitGame = false;
    for ($i = 0; $i < $count; $i++) {
        $gameTask = $getTask();
        \CliMessage\printTask($gameTask);
        $answer = \CliMessage\getAnswer();
        $rightAnswer = $getRightAnswer($gameTask);
        if ($answer !== $rightAnswer) {
            \CliMessage\printRightAnswer($answer, $rightAnswer);
            $isQuitGame = true;
            break;
        }
        \CliMessage\printCorrect();
    }
    if ($isQuitGame) {
        \CliMessage\printLoseMessage($name);
    } else {
        \CliMessage\printWinMessage($name);
    }
}
