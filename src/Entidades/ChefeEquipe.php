<?php 
declare(strict_types=1);

namespace Juliano\Pooteste\Entidades;
use Juliano\Pooteste\Contratos\ChefeEquipeInterface;

class ChefeEquipe extends Personalidade implements ChefeEquipeInterface{
    private int $idChefeEquipe;

    function __construct(
        int $idChefeEquipe,
        String $nome,
        String $sobreNome,
        String $diaNasc,
        String $encargo
    )
    {
        $this->idChefeEquipe = $idChefeEquipe;
        $this->nome = $nome;
        $this->sobreNome = $sobreNome;
        $this->diaNasc = $diaNasc; 
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