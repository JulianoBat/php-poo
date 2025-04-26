<?php 

namespace Juliano\Pooteste;

class Piloto{
    private int $id;
    private String $nome;
    private String $sobreNome;
    private String $abrNome;
    private int $num;

    public function __construct(
        int $id,
        String $nome,
        String $sobreNome,
        String $abrNome,
        int $num
    )
    { 
        $this->setId($id);
        $this->setNome($nome);
        $this->setSobreNome($sobreNome);
        $this->setAbrNome($abrNome);
        $this->setNum($num);

    }

    private function setId(int $id){
            if ($id <= 0){
                throw new \InvalidArgumentException("ID menor que 0");
            }
            $this->id = $id;
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

}



?>