<?php 
declare(strict_types=1);

namespace Juliano\Pooteste\Entidades;
use Juliano\Pooteste\Contratos\PilotoInterface;

class Piloto extends Personalidade implements PilotoInterface{
    private int $idPiloto;
    private String $abrNome;
    private int $num;

    public function __construct(
        int $idPiloto,
        String $nome,
        String $sobreNome,
        String $diaNasc,
        String $abrNome,
        int $num,
        String $encargo
    )
    { 
        $this->idPiloto = $idPiloto;
        $this->nome = $nome;
        $this->sobreNome = $sobreNome;
        $this->diaNasc = $diaNasc;
        $this->abrNome = $abrNome;
        $this->num = $num;
        $this->encargo = $encargo;
    }
    
    public function getNome(): string
    {
        return $this->nome;
    }

    public function getEncargo(): string
    {
        return $this->encargo;
    }

}



?>