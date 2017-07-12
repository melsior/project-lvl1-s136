<?php
/**
 * This file contains logic for work with console
 *
 * PHP version 7
 *
 * @category Function
 * @package  BrainGames
 * @author   Alexander Vasilyev <melsior@gmail.com>
 * @license  https://github.com/project-lvl1-s136/LICENSE MIT
 * @link     https://github.com/project-lvl1-s136
 **/
namespace BrainGames;

use \cli\line;

/**
 * This function for output user greetin in console.
 *
 * @return nothing
 **/
function run()
{
    line('Welcome to the Brain Game!');
    $name = \cli\prompt('May I have your name?');
    line("Hello, %s!", $name);
}
/**
 * This function make even game in console.
 *
 * @return nothing
 **/
function runEvenGame()
{
    line('Welcome to the Brain Game!');
    line('Answer "yes" if number even otherwise answer "no".');
    line();
    $name = \cli\prompt('May I have your name?');
    line();
    for ($i = 0; $i < 3; $i++) {
        $number = getRand();
        line('Question: %s', $number);
        $answer = \cli\prompt('Your answer: ');
        if ($answer !== getRightAnswer($number)) {
            line('\'%s\' is wrong answer ;(. Correct answer was \'%s\'.', $answer, getRightAnswer($number));
            line('Let\'s try again, %s!', $name);
            exit;
        } else {
            line('Correct!');
        }
    }
    line('Congratulation, %s!', $name);
}
