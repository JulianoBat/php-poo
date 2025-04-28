<?php 
declare(strict_types=1);

namespace Juliano\Pooteste;

abstract class Personalidade extends Entidade{
    public String $sobreNome;
    public String $diaNasc;
    public String $encargo;
    public int $idade;

    public function mostraNome(){
        echo $this->nome;
    }

    abstract public function getEncargo(): String;

}

?>