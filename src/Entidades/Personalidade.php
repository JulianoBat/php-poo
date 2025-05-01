<?php 
declare(strict_types=1);

namespace Juliano\Pooteste\Entidades;

abstract class Personalidade extends Entidade{
    protected String $sobreNome;
    protected String $diaNasc;
    protected String $encargo;
    protected int $idade;

}

?>