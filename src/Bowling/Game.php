<?php

namespace Braddle\Bowling;

class Game
{
    public function score(string $game): int
    {
        $frames = explode(' ', $game);
        $score = 0;
        
        foreach ($frames as $frame) {
            if ($frame === '1-') {
                $score++;
            }

            if ($frame === '11') {
                $score + 2;
            }
        }

        return $score;
    }
}