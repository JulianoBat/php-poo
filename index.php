<?php

use Juliano\Pooteste\ChefeEquipe;
use Juliano\Pooteste\Escuderia;
use Juliano\Pooteste\Piloto;

require __DIR__.'/vendor/autoload.php';

$piloto1 = new Piloto(1, "Lewis", "Hamilton", "07/01/1985", "HAM", 44);
$piloto2 = new Piloto(2, "Lando", "Norris", "13/11/1999", "NOR", 4);

$chefe1 = new ChefeEquipe(1, "Andre", "Stella", "22/02/1971");

$equipe = new Escuderia;

$piloto1->encargo = 'Piloto';
$chefe1->encargo = 'Chefe de equipe';

$equipe->piloto1 = $piloto1;
$equipe->piloto2 = $piloto2;
$equipe->chefe_equipe = $chefe1;

dump($equipe);

// echo $piloto1->getEncargo();
// echo $chefe1->getEncargo();

// dump($chefe1);
// dump($piloto1);
// dump($piloto2);
?>