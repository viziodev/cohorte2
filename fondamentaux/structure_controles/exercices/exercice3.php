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
if ($op=='+') {
   $result=$a+$b;
}elseif ($op=='-') {
    $result=$a-$b;
    }elseif ($op=='*') {
        $result=$a*$b;
    }elseif ($op=='/') {
        if ($b!=0) {
            $result=$a/$b;
        }
    }
    elseif ($op=='%') {
        if ($b!=0) {
            $result=$a%$b;
        }
    }

    if ($result!=null) {
        //1+2=3
       // printf($a.' '.$op.' '.$b.' = '.$result);
          printf("$a $op $b =$result");
    }else {
        printf("Erreur");
    }



