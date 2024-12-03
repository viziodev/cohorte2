<?php 
//Type 
    /** Elementaire 
     * int ==> entier   1,4,6
     * float ==> reel   1.5 ,4.6
     * string ==> chaine  "Bonjour",'Au Revoir'
     * boolean ==> boolean true,false
     * null ==> absence de valeur  null
     */

    /** Compose 
     * array ==> tableau  [1,2,3,4]
     * class 
     * Objet
     * Ressource
     */
  //Variables => $nomVariable

     /** Typage Statique  
        * type  $nomVariable
        * Exple==> int $a , float $b, array $tab
        * Exple==> $a=1 ,  $b="Bonjour" ==>Erreur, array $tab
        * Utilisation sur les argument d'une fonction 
        * Union de Type ==> type|type  $nomVariable
        * float|string $b; 
        * $b="Bonjour" , $b=12.4;
     */
      /** Typage Dynamique(Typage par defaut)  ==> la variable n'a pas de type statique,son type correspond au type de la valeur contenu
         * $nomVariable=valeur
         * $x=2;//int 
         * $x=3.3;//float
     */
    
   



   $x=(int)readline("Entrer une valeur");
   $bool=false;

   if ($bool) {
      $ok="True";
   }else{
      $ok="False";
   }

   //Operateur Ternaire
   $ok=$bool?"True":"False";



?>