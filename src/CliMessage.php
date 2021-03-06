<?php
namespace CliMessage;

use function \cli\line;

function printGreeting($message = '')
{
    line('Welcome to the Brain Game!');
    line($message);
    line();
}
function askUserName()
{
    return \cli\prompt('May I have your name?');
}
function printHelloUser($name)
{
    line("Hello, %s!", $name);
    line();
}
function printTask($message)
{
    line('Question: %s', implode(' ', $message));
}
function getAnswer()
{
    return \cli\prompt('Your answer', '0');
}
function printCorrect()
{
    line('Correct!');
}
function printRightAnswer($wrongAnswer, $rightAnswer)
{
    $message = "'%s' is wrong answer ;(. Correct answer was '%s'.";
    line($message, $wrongAnswer, $rightAnswer);
}
function printLoseMessage($name)
{
    line("Let's try again, %s!", $name);
}
function printWinMessage($name)
{
    line("Congratulations %s!", $name);
}
function printQuitGame($isQuit, $name)
{
    if ($isQuit) {
        \CliMessage\printLoseMessage($name);
    } else {
        \CliMessage\printWinMessage($name);
    }
}
