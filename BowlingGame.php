<?php

require "ScoreBoard.php";

class BowlingGame
{
    private $scoreboard;
    private $players = [];
    private $round = 1;


    public function __construct()
    {
        $aantal = readline("Met hoeveel spelers wil je spelen: ");
        for ($i = 0; $i < $aantal; $i++) {
            $name = readline("Wat is jou naam: ");
            $this->addPlayer($name);
        }
        $this->ScoreBoard = new ScoreBoard($this->players);
    }

    private function addPlayer($name)
    {
        $playerob = new Player($name);
        $this->players[] = $playerob;   
    }

    private function playRound()
    { 
        foreach ($this->players as $player) {
            $throw1 = readline("worp 1 van {$player->getName()}: ");
            $throw2 = readline("worp 2 van {$player->getName()}: ");
            $total = $throw1 + $throw2;
            $player->throwPins($throw1, $throw2);
        }
        $this->round = $this->round + 1;
    }

    private function playLastRound()
    {
        foreach ($this->players as $player) {
            $lastthrow = readline("laatste worp van {$player->getName()}: ");
        }
    }
    public function play()
    {
        for ($d = 0; $d < 10; $d++) {
            $this->playRound();
            $this->ScoreBoard->displayScores();
            echo "ronde $this->round" . PHP_EOL;
        }
        $this->playLastRound();
        $this->ScoreBoard->displayScores();
        $this->ScoreBoard->displayWinner();
    }  
}

