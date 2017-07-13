<?php
namespace BrainEven;

use function \cli\line;

function runEvenGame()
{
    line('Welcome to the Brain Game!');
    line('Answer "yes" if number even otherwise answer "no".');
    line();
    $name = \cli\prompt('May I have your name?');
    line("Hello, %s!", $name);
    line();
    for ($i = 0; $i < 3; $i++) {
        $number = \GameLib\getRand();
        line('Question: %s', $number);
        $answer = \cli\prompt('Your answer');
        if ($answer !== \GameLib\getRightAnswer($number)) {
            $message = "'%s' is wrong answer ;(. Correct answer was '%s'.";
            line($message, $answer, \GameLib\getRightAnswer($number));
            line('Let\'s try again, %s!', $name);
            exit;
        }
        line('Correct!');
    }
    line('Congratulations, %s!', $name);
}
