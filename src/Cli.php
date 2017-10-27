<?php

namespace BrainGames\Cli;

function run($scenario = null)
{
    return \BrainGames\GameCore\game($scenario);
}
