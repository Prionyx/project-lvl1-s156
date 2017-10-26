<?php

namespace BrainGames\Even;

function brain_even()
{
    $hello = "Answer 'yes' if number even otherwise answer 'no'.";
    $quest = [];
    $correct = [];
    for ($i = 0; $i < 3; $i++) {
        $num = rand(1, 100);
        $quest[$i] = "Question: $num";
        if ($num % 2 == 0) {
            $correct[] = 'yes';
        } else {
            $correct[] = 'no';
        }
    }
    return ['game_hello' => $game_hello, 'quest' => $quest, 'correct' => $correct];
}
