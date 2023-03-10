<?php

namespace classes;

class IMC {
  public static function calc(Paciente $paciente) {
    $imc = $paciente->peso / $paciente->altura ** 2;
    $paciente->setImc($imc);
    return $imc;
  }

  public static function classifica(Paciente $paciente) {
    $imc = $paciente->peso / $paciente->altura ** 2;

    if ($imc < 18.5) {
      echo $paciente->nome.": abaixo do peso.\n";
    } 
    else if ($imc >= 18.5 && $imc < 25) {
      echo $paciente->nome.": saudável.\n";
    }
    else if ($imc >= 25 && $imc < 30) {
      echo $paciente->nome.": sobrepeso.\n";
    }
    else {
      echo $paciente->nome.": obesidade.\n";
    }
  }
}