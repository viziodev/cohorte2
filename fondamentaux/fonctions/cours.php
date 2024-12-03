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


/* 
  Fonctions avec arguments par defaut
   1. Les arguments par defaut doivent etre toujours a droite des arguments obligatoires
*/

function somme(int $a, int $b,int $c=0):int {
    return $a + $b+$c;
}

somme(2,5);//somme(2,5,0)
somme(2,5,6);//somme(2,5,6)


/* 
  Fonctions avec arguments par defaut
   2.Arguments array par defaut
*/

function somme1(int $a, int $b,array ...$args):int {
    $s=$a + $b;
    foreach ($args as  $value) {
        $s+=$value;
    }
    return $s;
}

somme1(2,5);

somme1(2,5,5,5,7);//somme1(2,5,[5,5,7])
 



