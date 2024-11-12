<?php

/**
 *   $tab=[2,3,4,5] 
 *   $tab1=[2,3.4,true,"Bonjour"]  //index  0..3
 *   index 0..NbreValeur-1
 *   Acces aux $tab1[0] => 2  $tab1[3] => "Bonjour"
 */

 $tab=[2,3,4,5];
 //$i=$i+1; ==> $i++
 //Parcours on utilise lors qu'on connait le nbre de Valeur
 //count($tab):  nbre de Valeur
 for ($i=0; $i <count($tab) ; $i++) { 
    printf("\t".$tab[$i]);
 }
printf("\n");
 $tab1=[2,3.4,true,"Bonjour"] ;
 foreach ($tab1 as $index => $value) {
     printf("\t".$value);
 }