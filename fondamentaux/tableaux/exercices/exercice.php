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
//index  0  1  2  3 
   $tab=[1, 4, 6, 34];
foreach ( $tab as $index => $value) {
    echo "$index => $value";
}

//0=>1
//1=>4
//2=>6
//2=>34


$tab=[1, 4, 6, 34];

$x=&$tab[0]; //$x=1
$x=2;

 //array_push($tab,4);//$tab=[1, 4, 6, 34,4];
 $tab[]=11;//$tab=[1, 4, 6, 34,11];


