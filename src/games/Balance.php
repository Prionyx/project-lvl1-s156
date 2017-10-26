<?php

namespace BrainGames\Balance;

function numToArray($num)
{
    $str = (string)$num;
    $int = preg_split('//', $str);
    array_pop($int);
    array_shift($int);
    return $int;
}

function balance($arr)
{
    sort($arr);
    if (($arr[count($arr)- 1] - $arr[0]) > 1) {
        $arr[0] = $arr[0] + 1;
        $arr[count($arr) - 1] = $arr[count($arr) - 1] - 1;
        return balance($arr);
    }
    return $arr;
}

function brain_balance()
{
    $hello = "Balance the given number.";
    $quest = [];
    $correct = [];

    for ($i = 0; $i < 3; $i++) {
        $num = rand(1, 1000000);
        $question[] = $quest[] = "Question: $num";
        $correct[] = implode('', balance(numToArray($num)));
    }
    return ['hello' => $hello, 'quest' => $quest, 'correct' => $correct];
}
