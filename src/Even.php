<?php

namespace BrainGames\Even;

use function \cli\line;

function run_brain_even($name)
{
    for ($i = 0; $i < 3; $i++) {
        $num = rand(1, 100);
        line("Question: %s", $num);
        $ans = \cli\prompt("Your answer");
        if ($num % 2 == 0 && $ans == 'yes') {
            echo "Correct!" . "\n";
        } elseif ($num % 2 == 1 && $ans == 'no') {
            echo "Correct!" . "\n";
        } else {
            $correct = ($num % 2 == 0) ? 'yes' : 'no';
            line("%s is wrong answer ;(. Correct answer was %s. Let's try again, %s!", $ans, $correct, $name) . "\n";
            return;
        }
    }
    line("Congratulations, %s!", $name);
}
