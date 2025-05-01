<?php 

declare(strict_types=1);

namespace Juliano\Pooteste\Contratos;

interface PilotoInterface{
    public function getNome(): String;
    public function getEncargo(): String;
}

?>