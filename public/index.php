<?php
//echo "Hello";

include "../vendor/autoload.php";

use Classes\Cube;
use Classes\Roulette;

$cube = new Cube();
$roulette = new Roulette();

echo "move Player summa {$cube->player()}  =   <img width='50' height='50' src='images/{$cube->getCubeOne()}.png'> + <img width='50' height='50' src='images/{$cube->getCubeTwo()}.png'>" . "<br><br><br>";
echo "move Computer summa {$cube->computer()}  =   <img width='50' height='50' src='images/{$cube->getCubeOne()}.png'> + <img width='50' height='50' src='images/{$cube->getCubeTwo()}.png'>" . "<br><br><br>";
$cube->checkWinner();


//print_r($roulette->random()) . "<br><br><br>";
echo $roulette->showRandomImage() . "<br><br><br>";
//foreach ($roulette->random() as $img) {
//   echo "<img width='50' height='50' src='img/$img.png'>";
//}
echo $roulette->checkWinner();

