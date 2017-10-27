<?php

namespace BrainGames\GameCore;

use function \cli\line;

function game($scenario = null)
{
    $gamesCount = 3;
    line('Welcome to the Brain Game!');
    if ($scenario) {
        $logic = $scenario($gamesCount);
        line($logic['hello']);
        line();
    }
    $name = \cli\prompt('May I have your name?');
    line("Hello, %s!", $name);
    if (!$scenario) {
        return;
    }

    $correct = $logic['correct'];
    $question = $logic['quest'];
    for ($i = 0; $i < $gamesCount; $i++) {
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
