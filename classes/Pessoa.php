<?php

namespace classes;

abstract class Pessoa{
  private $nome, $idade, $peso, $altura;
    
  public function __construct($nome, $idade, $peso=null, $altura=null) {
    $this->nome = $nome;
    $this->idade = $idade;
    $this->peso = $peso;
    $this->altura = $altura;
  }

  // setter
  public function __set($name, $value){  
    $this->$name = $value;
  }

  //getter
  public function __get($name){
    return $this->$name;
  }

  public abstract function __toString();
}




