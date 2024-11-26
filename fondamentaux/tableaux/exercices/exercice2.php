<?php 
/*
   Ecrire un algo qui permet de saisir 
   un nombre de notes,
   saisie du tableau de notes 
   affiche les notes 
   Determine la note max, 
   Determine la note min et 
   transfère dans un autre tableau  toutes les notes<10
*/


//fonction saisie nombre notes
function saisieNombreNote():int{
    do {
        $nbreNote=(int )readline("Entrer le nombre de notes: ");
    } while ($nbreNote<=0);
    return $nbreNote;
}
//fonction saisie note
function saisieNote():float{
    do {
        $note=(float)readline("Entrer une Note: ");
    } while ($note <0 || $note>20);
    return $note;
}
//fonction saisie du tableau de notes 
  
function sasieTab(array &$tabNotes,int $n):void{
   for ($i=0; $i <$n ; $i++) { 
       $tabNotes[$i] =saisieNote();
   }
}


//NB:Php peut retourner un tableau ==>array
function sasieTab1(int $n):array{
    $tabNotes = [];
    for ($i=0; $i <$n ; $i++) { 
        $tabNotes[$i] =saisieNote();
    }
    return $tabNotes;
}

//fonction affiche du tableau de notes 
function afficheTab1(array $tabNotes,int $n):void{

    for ($i=0; $i <$n ; $i++) {
        echo($tabNotes[$i]."\t");
    }
}

function afficheTab2(array $tabNotes):void{
    for ($i=0; $i <count($tabNotes) ; $i++) {
        echo($tabNotes[$i]."\t");
    }
}

function afficheTab(array $tabNotes):void{
    //$tabNotes[$i]  ==>   $value
    foreach ($tabNotes as  $i => $value) {
         echo($value."\n");
     } 
   
}


//fonction a Determine la note max et min
function minMax(array $tabNotes,float &$min,float &$max):void{
    //$tabNotes[$i]  ==>   $value=
    foreach ($tabNotes as   $value) {
          if ($min>$value) {
            $min=$value;
          }
          if ($max<$value) {
            $max=$value;
          }
     } 
   
}

function minMax1(array $tabNotes):array{
    //$tabNotes[$i]  ==>   $value
    $min=20;
    $max=0;
    foreach ($tabNotes as   $value) {
          if ($min>$value) {
            $min=$value;
          }
          if ($max<$value) {
            $max=$value;
          }
     }   
        //0    1
      //[$min,$max];
     return ["min"=>$min,"max"=>$max];
   
}
//fonction transfère dans un autre tableau  toutes les notes<10

function transfert(array $tabNotes):array{
     $result=[];
     $k=0;
    foreach ($tabNotes as   $value) {
          if ($value<10) {
          
            //$result[$k]=$value;
            ///$k=$k+1;
            //$k++;
            $result[$k++]=$value; //post increment =Affection + incrementation
            /**
             * $k=0 
             * $result[0]=$value;
             * $k=0+1=1
             */
             // $result[++$k]=$value;  //pre increment =incrementation + Affection  
            /**
             * $k=0 
             * $k=0+1=1
             * $result[1]=$value;
             */

          }
     } 
     return $result;
}

function transfert1(array $tabNotes):array{
    $result=[];
   foreach ($tabNotes as  $value) {
         if ($value<10) { 
          //array_push($tabNotes,$value); //  $result[$k++]=$value; 
          $result[]=$value;
         }
    } 
    return $result;
}

function principal(){
     $nbre= saisieNombreNote();
     $tabNote= sasieTab1($nbre);
     echo "\nAffichage du Tableau\n";
     afficheTab( $tabNote);
     $min=20;
     $max=0;
    // minMax($tabNote,$min,$max);
    $result= minMax1($tabNote);
        echo "\nMin=". $result["min"];
        echo "\Max=".  $result["max"];
     $tabTrans=transfert1($tabNote);
     echo "\nAffichage du Tableau de Transfert\n";
     afficheTab($tabTrans);
}

principal();


  
