<?php

namespace traits;

trait imc {
  protected $imc;

  public function calcIMC() {
    if($this->idade && $this->peso) {
      $this->imc = $this->peso / $this->altura ** 2;
    } else {
      echo "o IMC de ".$this->nome.": ERRO, informe o peso e altura primeiro.\n";
    } 
  }

  public function classifica() {
    $this->calcIMC();
    if ($this->imc){
      if ($this->imc < 18.5) {
        echo $this->nome.": abaixo do peso.\n";
      } 
      else if ($this->imc >= 18.5 && $this->imc < 25) {
        echo $this->nome.": saudável.\n";
      }
      else if ($this->imc >= 25 && $this->imc < 30) {
        echo $this->nome.": sobrepeso.\n";
      }
      else {
        echo $this->nome.": obesidade.\n";
      }
    }
  }

  public function isNormal() {
    $this->calcIMC();
    if ($this->imc){
      if (
        ($this->idade >= 19 && $this->idade < 25 && $this->imc >= 19 && $this->imc <= 24) 
        || ($this->idade >= 25 && $this->idade < 35 && $this->imc >= 20 && $this->imc <= 25)
        || ($this->idade >= 35 && $this->idade < 45 && $this->imc >= 21 && $this->imc <= 26)
        || ($this->idade >= 45 && $this->idade < 55 && $this->imc >= 22 && $this->imc <= 27)
        || ($this->idade >= 55 && $this->idade <65 && $this->imc >= 23 && $this->imc <= 28)
        || ($this->idade >= 65 && $this->imc >= 24 && $this->imc <= 29)
      ) {
        return true;
      } 
      else {
        return false;
      }
    }
  }


}