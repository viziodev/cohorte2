<?php
/**
 *  Fonction   => Type de Retour !void
 * function nomFonction(type $arg1, type1 $arg2): int|string|null|boolean{
 *    return $resultat;
 * }
 *  Procedure   => Type de Retour =void(vide)
 *   function nomFonction(type $arg1, type1 $arg2): void{
 *   }
 */
function saisieNombre(string $sms):int{
     return (int) readline($sms);
}

function saisieOperateur():string{
      do {
        $op=readline("Entrer un Operateur: ");
       } while ($op!= '+' && $op!= '-' && $op!= '*' && $op!= '/' && $op!= '%');
       return  $op;
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





