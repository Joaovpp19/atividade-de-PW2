<?php
//importação
require_once("automoveis.class.php");

class Teste{
     private $automoveis;
     //objeto chamado automoveis recebe a classe automoveis
     public function __construct(){
        //passar um valor
         $automovel1 = new Automoveis();
         $automovel2 = new Automoveis();
         
         $automovel1->setNome("Carro 1</br>");
         echo $automovel1->getNome();

         $automovel1->setTipo("Tipo: Porsche</br>");
         echo $automovel1->getTipo();

         $automovel1->setCor("Cor: Cinza</br>");
         echo $automovel1->getCor();

         $automovel1->setPlaca("Placa: MHZ-4345</br>");
         echo $automovel1->getPlaca();
         
         $automovel1->setNumerodeportas("Número de portas: 2</br></br>");
         echo $automovel1->getNumerodeportas();

         $automovel2->setNome("Carro 2</br>");
         echo $automovel2->getNome();

         $automovel2->setTipo("Tipo: Ferrari</br>");
         echo $automovel2->getTipo();

         $automovel2->setCor("Cor: Vermelho</br>");
         echo $automovel2->getCor();

         $automovel2->setCor("Placa: JKL-0001</br>");
         echo $automovel2->getCor();
         
         $automovel2->setNumerodeportas("Número de portas: 4</br>");
         echo $automovel2->getNumerodeportas();
    }
    //Instancia
}new Teste();

?>