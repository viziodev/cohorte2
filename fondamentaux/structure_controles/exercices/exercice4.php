<?php 
/**
 *   Calculatrice
 *     '+'
 *     * 
 *     / 
 *     %
 * 
 */

//&& ou and 
//|| ou or
//!  negation

//Operateurs 
/**
 *  = ==> affectation
 *  == comparaison de valeur  2=='2'  ==>True
 *  === comparaison de valeur et de type   2==='2'  ==>False
 *  != different 
 *  
 */
 $a=(int) readline("Entrer le premier nombre : ");
 do {
    $op=readline("Entrer un Operateur: ");
 } while ($op!= '+' && $op!= '-' && $op!= '*' && $op!= '/' && $op!= '%');

 $b=(int) readline("Entrer le deuxieme nombre : ");
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


    if ($result!=null) {
        //1+2=3
       // printf($a.' '.$op.' '.$b.' = '.$result);
          printf("$a $op $b =$result");
    }else {
        printf("Erreur");
    }

