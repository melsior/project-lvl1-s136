<?php
namespace BrainGames;

function run()
{
    \CliMessage\printGreeting();
    $name = \CliMessage\askUserName();
    \CliMessage\printHelloUser($name);
}
