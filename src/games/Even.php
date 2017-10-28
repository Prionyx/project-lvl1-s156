<?php

namespace BrainGames\Even;

function brain_even()
{
    return function () {
        $hello = "Answer 'yes' if number even otherwise answer 'no'.";
        $num = rand(1, 100);
        $quest = "$num";
        if ($num % 2 == 0) {
            $correct = 'yes';
        } else {
            $correct = 'no';
        }
        return ['hello' => $hello, 'quest' => $quest, 'correct' => $correct];
    };
}

function run()
{
    \BrainGames\Cli\run(brain_even());
}
