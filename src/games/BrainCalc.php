<?php
namespace BrainCalc;

use function \cli\line;

const MESSAGE = 'What is the result of the expression?';
function getNumber()
{
    return rand(1, 10);
}
function getOperator()
{
    $num = rand(0, 2);
    switch ($num) {
        case '0':
            $result = '+';
            break;
        case '1':
            $result = '-';
            break;
        case '2':
            $result = '*';
            break;
    }
    return $result;
}
function calcOperator($num1, $operator, $num2)
{
    switch ($operator) {
        case '+':
            $result = $num1 + $num2;
            break;
        case '-':
            $result = $num1 - $num2;
            break;
        case '*':
            $result = $num1 * $num2;
            break;
    }
    return $result;
}
function runCalcGame()
{
    $getTask = function () {
        $operator = getOperator();
        $number1 = getNumber();
        $number2 = getNumber();
        return [$number1, $operator, $number2];
    };
    $getRightAnswer = function ($expression) {
        return calcOperator($expression[0], $expression[1], $expression[2]);
    };
    \GameLib\runGame(MESSAGE, $getTask, $getRightAnswer);
}
