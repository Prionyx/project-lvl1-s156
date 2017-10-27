<?php

namespace BrainGames\Progression;

function progression()
{
    $progressionCount = 10;
    $minNum = rand(0, 10);
    $step = rand(1, 100);
    $result = [];
    $num = $minNum;
    for ($i = 0; $i < $progressionCount; $i++) {
        $result[] = $num;
        $num += $step;
    }

      return ['progr' => $result, 'step' => $step, 'progrCount' => $progressionCount];
}

function brain_progression()
{
    return function ($gamesCount) {
        $hello = "Find the greatest common divisor of given numbers.";
        $quest = [];
        $correct = [];
        for ($i = 0; $i < 3; $i++) {
            $progression = progression();
            $progr = $progression['progr'];
            $progrCount = $progression['progrCount'];
            $randNum = rand(1, $progrCount);
            $progr[$randNum] = '..';
            $quest[] = implode(', ', $progr);
            $correct[] = $progr[0] + ($randNum) * $progression['step'];
        }
        return ['hello' => $hello, 'quest' => $quest, 'correct' => $correct];
    };
}
