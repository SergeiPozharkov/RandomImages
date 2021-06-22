<?php

include "../vendor/autoload.php";

use Classes\Cube;
use Classes\Roulette;

$cube = new Cube();
$roulette = new Roulette();

$cube->renderResults();
$cube->checkWinner();
//print_r($roulette->random()) . "<br><br><br>";
echo $roulette->showRandomImage() . "<br><br><br>";
//foreach ($roulette->random() as $img) {
//   echo "<img width='50' height='50' src='img/$img.png'>";
//}
//echo $roulette->checkWinner();

