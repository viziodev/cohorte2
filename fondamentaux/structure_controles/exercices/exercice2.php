<?php 
/**
 *   Lire le rayon d'un cercle puis calcule
 *   La circonference 
 *   la surface
 */
 define("PI",3.14);
 $rayon=(float) readline("Entrer le  rayon : ");
 $circ=$rayon*2*PI;
 $surf=$rayon*pow(PI,2);
 printf("La circonference est ".$circ."\n");
 printf("La surface est ".$surf);