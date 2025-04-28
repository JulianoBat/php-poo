<?php 
declare(strict_types=1);

namespace Juliano\Pooteste;

class Piloto extends Personalidade{
    private int $idPiloto;
    private String $abrNome;
    private int $num;

    public function __construct(
        int $idPiloto,
        String $nome,
        String $sobreNome,
        String $diaNasc,
        String $abrNome,
        int $num
    )
    { 
        $this->setidPiloto($idPiloto);
        $this->setNome($nome);
        $this->setSobreNome($sobreNome);
        $this->setdiaNasc($diaNasc);
        $this->setAbrNome($abrNome);
        $this->setNum($num);

    }

    private function setidPiloto(int $idPiloto){
            if ($idPiloto <= 0){
                throw new \InvalidArgumentException("ID menor que 0");
            }
            $this->idPiloto = $idPiloto;
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

    private function setAbrNome(String $abrNome){
        if(empty(trim($abrNome))){
            throw new \InvalidArgumentException("Abreviação do nome não pode estar vazio");
        }
        $this->abrNome = $abrNome;
    }

    private function setNum(int $num){
        if($num <=0){
            throw new \InvalidArgumentException("Piloto deve possuir um número positivo");
        }
        $this->num = $num;
    }

    public function getEncargo():String
    {
        return $this->encargo;
    }

}



?>