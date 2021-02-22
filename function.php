<?php

function romano2int($romano)
{
  $romano = strtoupper($romano);
  $n = 0;

  $numeros =[
 'I' => 1,
 'V' => 5,
 'X' => 10,
 'L' => 50,
 'C' =>100,
 'D' =>500,
 'M' => 1000
  ];

  $letras = strlen($romano);

  for($i=0;$i<$letras;$i++){
     $actual = $romano[$i]; 
     $prox = $romano[$i+1] ?? false;

     if($prox && $numeros[$prox] > $numeros[$actual]){
       $n -= $numeros[$actual];
     }else{
         $n += $numeros[$actual];
     }

  }
  return $n;
}