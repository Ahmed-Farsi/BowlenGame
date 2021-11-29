<?php

require "ScoreBoard.php";
$player1 = new Player("Ahmed");
$player2 = new Player("Robin");
$score = new ScoreBoard([$player1, $player2]);
$player1->throwPins(rand(1, 10), rand(1, 10));
$player1->throwPins(rand(1, 10), rand(1, 10));
$player2->throwPins(rand(1, 10), rand(1, 10));
$player2->throwPins(rand(1, 10), rand(1, 10));
$score->displayScores();