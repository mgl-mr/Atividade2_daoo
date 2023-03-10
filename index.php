<?php

include 'autoload.php';

use classes\Atleta;

$atleta = new Atleta("Ana", 30, 80, 1.70);

echo $atleta->nome."\n";

$atleta->calcIMC();
$atleta->classifica();

echo "dados:\n".$atleta;

if ($atleta->isNormal()){
  echo $atleta->nome." possui IMC normal de acordo com a idade.\n";
} 
else {
  echo $atleta->nome." não possui IMC normal de acordo com a idade.\n";
}

$atleta2 = new Atleta("Bia", 30, 70, 1.70);

if ($atleta2->isNormal()){
  echo $atleta2->nome." possui IMC normal de acordo com a idade.\n";
} 
else {
  echo $atleta2->nome." não possui IMC normal de acordo com a idade.\n";
}