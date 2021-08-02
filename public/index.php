<?php

include "../vendor/autoload.php";

use Classes\Dices;
use Classes\ShowDices;

//
//use Classes\Dices;
//use Classes\Roulette;
//use Classes\ShowRoulette;
//
//$cube = new Dices();
//$showRoulette = new ShowRoulette(new Roulette(2));
//
//echo $showRoulette->showImage();
//echo $showRoulette->showWinner();
//$cube->renderResults();
//$cube->checkWinner();

//echo $roulette->showRandomImage() . "<br><br><br>";

//echo $roulette->checkWinner();


$dices = new Dices();

$dices->turnComputer();
$dices->turnPlayer();
$showDices = new ShowDices($dices);
echo "Computer<br>";
echo $showDices->showDicesComputer();
echo "Player<br>";
echo $showDices->showDicesPlayer();
echo $showDices->showWinner();
