<?php

use Juliano\Pooteste\Entidades\ChefeEquipe;
use Juliano\Pooteste\Entidades\Escuderia;
use Juliano\Pooteste\Entidades\Piloto;

require __DIR__.'/vendor/autoload.php';

$piloto1 = new Piloto(1, "Lewis", "Hamilton", "07/01/1985", "HAM", 44, "Piloto");
$piloto2 = new Piloto(2, "Lando", "Norris", "13/11/1999", "NOR", 4, "Piloto");

$chefe1 = new ChefeEquipe(1, "Andre", "Stella", "22/02/1971", "Chefe de Equipe");

$equipe = new Escuderia("McLaren");


$equipe->piloto1 = $piloto1;
$equipe->piloto2 = $piloto2;
$equipe->chefe_equipe = $chefe1;


dump($equipe->getNome());

// dump($chefe1);
// dump($piloto1);
// dump($piloto2);


?>