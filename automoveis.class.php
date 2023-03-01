<?php
//Classe com o nome pessoa
class Automoveis{
//objetos com visibilidade privada
      private $nome;
      private $Tipo;
      private $cor;
      private $placa;
      private $Numerodeportas;
//método de captura de valor do objeto
      public function getNome(){
           return $this->nome;
    }//método de alteração de valor de objeto
      public function setNome($nome){
           $this->nome = $nome;
    }
      public function getTipo(){
           return $this->Tipo;
    }
      public function setTipo($tipo){
           $this->Tipo = $tipo;
    }
     public function getCor(){
           return $this->cor;
    }
      public function setCor($Cor){
           $this->cor = $Cor;
    }
      public function getPlaca(){
           return $this->placa;
    }
      public function setPlaca($Placa){
           $this->placa = $Placa;
    }
    public function getNumerodeportas(){
           return $this->Numerodeportas;
    }
      public function setNumerodeportas($Numerodeportas){
           $this->Numerodeportas = $Numerodeportas;
    }

}

?>