<?php

namespace BrainGames\GameCore;

use function \cli\line;

function run($scenario = null)
{
    $gamesCount = 3;
    $logics = [];
    for ($i = 0; $i < $gamesCount; $i++) {
        $logics[] = $scenario();
    }
    line('Welcome to the Brain Game!');
    $hello = $logics[0]['hello'];
    line($hello);
    line();
    $name = \cli\prompt('May I have your name?');
    line("Hello, %s!", $name);

    foreach ($logics as $logic) {
        $correct = $logic['correct'];
        $quest = $logic['quest'];
        line("Question: %s", $quest);
        $ans = \cli\prompt("Your answer");
        if ($correct == $ans) {
              line("Correct!");
        } else {
              line("%s is wrong answer ;(. Correct answer was %s. Let's try again, %s!", $ans, $correct, $name);
              return;
        }
    }
    line("Congratulations, %s", $name);
}
