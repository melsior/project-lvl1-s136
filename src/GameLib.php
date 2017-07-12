<?php
/**
 * This file contains function for use in game with even number
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

/**
 * This function for get right answer for even or odd number.

 * @param interger $number random number
 *
 * @return string answer 'yes' or 'no'
 **/
function getRightAnswer($number)
{
    if (($number % 2) == 0) {
            return 'yes';
    }
    return 'no';
}
/**
 * This function generation random number.
 *
 * @return random number
 **/
function getRand()
{
    $min = 1;
    $max = 100;
    return rand($min, $max);
}
