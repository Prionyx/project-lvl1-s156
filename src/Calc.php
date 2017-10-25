<?php

namespace BrainGames\Calc;

use function \cli\line;

function run_brain_calc($name)
{
    for ($i = 0; $i < 3; $i++) {
        $num1 = rand(0, 100);
        $num2 = rand(0, 100);
        $rand = rand(0, 2);
        if ($rand == 0) {
            $oper = '+';
            $correct = $num1 + $num2;
        } elseif ($rand == 1) {
            $oper = '-';
            $correct = $num1 - $num2;
        } else {
            $oper = '*';
            $correct = $num1 * $num2;
        }
        line("Question: %s %s %s", $num1, $oper, $num2);
        $ans = \cli\prompt("Your answer");
        $wrong = "%s is wrong answer ;(. Correct answer was %s. Let's try again, %s!";
        switch ($oper) {
            case '+':
                if ($ans == ($num1 + $num2)) {
                    line("Correct!");
                } else {
                    line($wrong, $ans, $correct, $name);
                    return;
                }
                break;
            case '-':
                if ($ans == ($num1 - $num2)) {
                    line("Correct!");
                } else {
                    line($wrong, $ans, $correct, $name);
                    return;
                }
                break;
            case '-':
                if ($ans == ($num1 * $num2)) {
                    line("Correct!");
                } else {
                    line($wrong, $ans, $correct, $name);
                    return;
                }
                break;
        }
    }
}
