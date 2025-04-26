<?php

use Juliano\Pooteste\Piloto;

require __DIR__.'/vendor/autoload.php';

$piloto1 = new Piloto(1, "Lewis", "Hamilton", "HAM", 44);

$piloto2 = new Piloto(2, "Lando", "Norris", "NOR", 4);

dump($piloto1);
dump($piloto2);
?>