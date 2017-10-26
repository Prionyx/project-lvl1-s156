<?php

namespace BrainGames\Calc;

function brain_calc()
{
    $hello = "What is the result of the expression?";
    $quest = [];
    $correct = [];
    for ($i = 0; $i < 3; $i++) {
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
        $quest[] = ("Question: $num1 $oper $num2");
        switch ($oper) {
            case '+':
                $correct[] = $num1 + $num2;
                break;
            case '-':
                $correct[] = $num1 - $num2;
                break;
            case '*':
                $correct[] = $num1 * $num2;
                break;
        }
    }
    return ['hello' => $hello, 'quest' => $quest, 'correct' => $correct];
}
