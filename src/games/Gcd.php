<?php

namespace BrainGames\Gcd;

use function \cli\line;

function gcd($a, $b)
{
    return (!$b) ? $a : gcd($b, $a % $b);
}

function brain_gcd()
{
    $hello = "Find the greatest common divisor of given numbers.";
    $quest = [];
    $correct = [];
    for ($i = 0; $i < 3; $i++) {
        $num1 = rand(2, 100);
        $num2 = rand(2, 100);
        $quest[] = "Question: $num1, $num2";
        $correct[] = gcd($num1, $num2);
    }
    return ['hello' => $hello, 'quest' => $quest, 'correct' => $correct];
}
