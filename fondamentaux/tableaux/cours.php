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

 //Tableau association
    //Gestion des Dettes : 
       //Entite ==> 
        //Client(telephone,nom,prenom,adresse)
        //Dette(id,date,montant,montantVerser) 
        //Payement (id,date,montant)
        //Article(id,nomArticle,qteStok,prix)

     //Occurence ou tuple ou Enregistrement 
       //Client1("771001010","Wane","Baila","OF")
       //Client2("771001011","Kane","Fatoumata","OF")
       //Client2("771001012","Faye","Aissatou","PE")
    //Realisation Occurence ==>Tableau associatif
     $client1=[
         "telephone"=>"771001010",
          "nom"=>"Wane",
          "prenom"=>"Baila",
          "adresse"=>"OF"
     ];
       echo $client1["nom"];//Wane;

     $client2=[
        "telephone"=>"771001011",
         "nom"=>"Kane",
         "prenom"=>"Fatoumata",
         "adresse"=>"OF"
    ];
    echo $client1["adresse"];//Wane;
    


