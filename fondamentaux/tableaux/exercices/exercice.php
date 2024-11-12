<?php

function saisieNombre(string $sms):int{
    return (int) readline($sms);
}

function saisieOperateur():string{
     do {
       $op=readline("Entrer un Operateur: ");
      } while (!valideOperateur($op));
      return  $op;
}

//$x==false  ==> !$x
//$x==true  ==> $x
function valideOperateur(string $op):bool{
    $tabOp=["+","-","*","/","%"];
    foreach ($tabOp as $key => $value) {
        if ($op===$value) return true;
    }
    return false;
}

function calcul(int $a,string $op,int $b,&$result){
   $result=null;
   switch ($op) {
           case '+':
             $result=$a+$b;
           break;
           case '-':
               $result=$a-$b;
           break;
           case '*':
               $result=$a*$b;
           break;
           case '/':
               if ($b!=0) {
                   $result=$a/$b;
               }
           break;
           case '%':
               if ($b!=0) {
                   $result=$a%$b;
               }
           break;
   }
}
function principal(){
   do {
          $a=saisieNombre("Entrer le premier nombre : ");
          $op=saisieOperateur();
          $b=saisieNombre("Entrer le deuxieme nombre : ");
       calcul($a,$op,$b,$result);
       if ($result!=null) {
           //1+2=3
          // printf($a.' '.$op.' '.$b.' = '.$result);
             printf("$a $op $b =$result");
         }else {
           printf("Erreur/n");
        }
       $rep=readline("Entrer Q pour quitter: "); 
   } while ($rep != "Q");
}

principal();
