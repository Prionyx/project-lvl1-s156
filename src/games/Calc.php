<?php

namespace BrainGames\Calc;

function brain_calc()
{
    return function () {
        $hello = "What is the result of the expression?";
        $num1 = rand(0, 100);
        $num2 = rand(0, 100);
        $rand = rand(0, 2);
        if ($rand == 0) {
            $oper = '+';
        } elseif ($rand == 1) {
            $oper = '-';
        } else {
            $oper = '*';
        }
        $quest = "$num1 $oper $num2";
        switch ($oper) {
            case '+':
                $correct = $num1 + $num2;
                break;
            case '-':
                $correct = $num1 - $num2;
                break;
            case '*':
                $correct = $num1 * $num2;
                break;
        }
        return ['hello' => $hello, 'quest' => $quest, 'correct' => $correct];
    };
}


function run()
{
    \BrainGames\Cli\run(brain_calc());
}
