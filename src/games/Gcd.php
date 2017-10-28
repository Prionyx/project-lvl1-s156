<?php

namespace BrainGames\Gcd;

function gcd($a, $b)
{
    return (!$b) ? $a : gcd($b, $a % $b);
}

function brain_gcd()
{
    return function () {
        $hello = "Find the greatest common divisor of given numbers.";
            $num1 = rand(2, 100);
            $num2 = rand(2, 100);
            $quest = "$num1, $num2";
            $correct = gcd($num1, $num2);
        return ['hello' => $hello, 'quest' => $quest, 'correct' => $correct];
    };
}

function run()
{
    \BrainGames\Cli\run(brain_gcd());
}
