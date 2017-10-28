<?php

namespace BrainGames\Prime;

function isPrime($num)
{
    if ($num < 2) {
        return 'no';
    }
    $i = 2;
    while ($i <= $num / 2) {
        if ($num % $i == 0) {
            return 'no';
        }
        $i += 1;
    }
    return 'yes';
}

function brain_isPrime()
{
    return function () {
        $hello = "Answer 'yes' if number is prime otherwise answer 'no'.";
        $num = rand(1, 1000);
        $quest = "$num";
        $correct = isPrime($num);
        return ['hello' => $hello, 'quest' => $quest, 'correct' => $correct];
    };
}
