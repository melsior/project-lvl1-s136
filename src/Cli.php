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

use function \cli\line;

/**
 * This function for output user greetin in console.
 *
 * @return nothing
 **/
function run()
{
    line('Welcome to the Brain Game!');
    line('Answer "yes" if number even otherwise answer "no".\n');
    $name = \cli\prompt('May I have your name?');
    line("Hello, %s!", $name);
}
