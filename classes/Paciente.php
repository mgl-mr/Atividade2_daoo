<?php

namespace classes;

class Paciente extends Pessoa {
  private $imc;

  public function __construct($nome, $idade, $peso, $altura) {
    parent::__construct($nome, $idade, $peso, $altura);
  }

  public function showIMC() {
    if($this->imc) {
      echo "IMC ".$this->nome.": ".number_format($this->imc, 2)."\n";
    } else {
      echo "IMC não calculado, informar peso e altura.\n";
    }   
  }

  public function setImc($imc){  
    $this->imc = $imc;
  }

  public function getImc(){
    return $this->imc;
  }

  public function __toString(){
		$className = self::class;
		return 	"\n===Dados de $className ==="
			. "\nNome: $this->nome"
			. ($this->idade ? "\nIdade: $this->idade" : "")
			. "\nPeso: $this->peso"
			. "\nAltura: $this->altura"
			. "\nIMC: " . number_format($this->imc, 2) . "\n";
	}
}


