<?php 
declare(strict_types=1);

namespace Juliano\Pooteste;

class ChefeEquipe extends Personalidade{
    private int $idChefeEquipe;

    function __construct(
        int $idChefeEquipe,
        String $nome,
        String $sobreNome,
        String $diaNasc,
    )
    {
        $this->setidPiloto($idChefeEquipe);
        $this->setNome($nome);
        $this->setSobreNome($sobreNome);
        $this->setdiaNasc($diaNasc); 
    }

    private function setidPiloto(int $idChefeEquipe){
        if ($idChefeEquipe <= 0){
            throw new \InvalidArgumentException("ID menor que 0");
        }
        $this->idChefeEquipe = $idChefeEquipe;
}

    private function setNome(String $nome){
        if(empty(trim($nome))){
            throw new \InvalidArgumentException("Nome não pode estar vazio");
        }
        $this->nome = $nome;
    }

    private function setSobreNome(String $sobreNome){
        if(empty(trim($sobreNome))){
            throw new \InvalidArgumentException("Sobre nome não pode estar vazio");
        }
        $this->sobreNome = $sobreNome;
    }

    private function setdiaNasc(String $diaNasc){
        if(empty(trim($diaNasc))){
            throw new \InvalidArgumentException("Dia do nascimento deve ser preenchido");
        }
        $this->diaNasc = $diaNasc;
    }

    public function getEncargo():String
    {
        return $this->encargo;
    }
}

?>