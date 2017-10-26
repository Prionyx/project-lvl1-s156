<?php

namespace BrainGames\Cli;

use function \cli\line;

function run($logic = null)
{
    line('Welcome to the Brain Game!');
    line($logic['hello']);
    line();
    $name = \cli\prompt('May I have your name?');
    line("Hello, %s!", $name);
    if ($logic == null) {
        return;
    }

    $correct = $logic['correct'];
    $question = $logic['quest'];
    for ($i = 0; $i < 3; $i++) {
        line($question[$i]);
        $ans = \cli\prompt("Your answer");
        if ($correct[$i] == $ans) {
            line("Correct!");
        } else {
            line("%s is wrong answer ;(. Correct answer was %s. Let's try again, %s!", $ans, $correct[$i], $name);
            return;
        }
    }
    line("Congratulations, %s", $name);
}
