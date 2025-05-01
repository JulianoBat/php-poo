<?php 
declare(strict_types=1);

namespace Juliano\Pooteste\Entidades;

use Juliano\Pooteste\Contratos\EscuderiaInterface;

class Escuderia extends Entidade implements EscuderiaInterface{
    public ChefeEquipe $chefe_equipe;
    public Piloto $piloto1;
    public Piloto $piloto2;

    public function __construct(
        $nome
    ) 
    {
        $this->nome = $nome;
    }

    public function getNome(): string
    {
        return $this->nome;
    }
}

?>