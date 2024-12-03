<?php 
 /*
   Realiser une application qui contient les use case suivants : 
      1.Ajouter client avec  option ajouter un user(login,password)
      2.Lister les clients 
      3.Ajouter une dette(date,montant,montantAvance) a un client
      4.Lister les dettes un client
      5.Lister toutes  les dettes
  */
//Matrice 


/*
    

        $uneDette=[
          "date"=>date("d-m-Y H:i:s");                     ,
          "montant"=>20000,
          "montantAvance"=>0,
        ];


         $uneDette1=[
          "date"=>date("d-m-Y H:i:s");                     ,
          "montant"=>2000,
          "montantAvance"=>1000,
        ];


         $client = [
         "telephone"=>"771001010",
          "nom"=>"Wane",
          "prenom"=>"Baila",
          "adresse"=>"OF",
          "user"=>[
              "login"=>"client1",
              "password"=>"passer",
          ],
          "dettes"=>[]
        
        ];

         $client["user"]  ==>  [
              "login"=>"client1",
              "password"=>"passer",
          ]
         $client["user"]["login"]==> client1
         $client["user"]["password"]==> passer

         $client1 = [
         "telephone"=>"771001010",
          "nom"=>"Wane",
          "prenom"=>"Baila",
          "adresse"=>"OF",
          "user"=>null,
          "dettes"=>[
                [
                 "date"=>date("d-m-Y H:i:s");                     ,
                 "montant"=>20000,
                 "montantAvance"=>0,
                ],
                [
                 "date"=>date("d-m-Y H:i:s");                     ,
                 "montant"=>20000,
                 "montantAvance"=>0,
                ]

          ]

        ];

         $client1["dettes"] 
         [
                [
                 "date"=>date("d-m-Y H:i:s");                     ,
                 "montant"=>20000,
                 "montantAvance"=>0,
                ],
                [
                 "date"=>date("d-m-Y H:i:s");                     ,
                 "montant"=>2000,
                 "montantAvance"=>1000,
                ]

          ]
        $client1["dettes"][0]
              [
                 "date"=>date("d-m-Y H:i:s");                     ,
                 "montant"=>20000,
                 "montantAvance"=>0,
              ]
        //Montant   ==>   $client1["dettes"][0]["montant"]
        //montantAvance   ==>   $client1["dettes"][0]["montantAvance"]
       
        $client1["dettes"][1]
                [
                 "date"=>date("d-m-Y H:i:s");                     ,
                 "montant"=>2000,
                 "montantAvance"=>1000,
                ]

        $client1["dettes"][1]["date"]
         //Afficher les dettes d'un client
         foreach ($client1["dettes"] as  $v) {
             echo "Date : ". $v["date"]."\t";
             echo "Montant : ". $v["montant"]."\t";
             echo "Montant Avance : ". $v["montantAvance"]."\t";
        


         $




          $clients[0]["nom"] ==> Wane
          $clients[0]["adresse"] ==> Wane

          $clients[1]["telephone"] ==> 771001011
          foreach ($clients as  $client) {
                echo "Telephone : ". $client["telephone"]."\t";
                echo "Nom : ". $client["nom"]."\t";
                echo "Prenom : ". $client["prenom"]."\t";
                echo "Adresse : ". $client["adresse"]."\t";
                echo"---------------------------------------"."\n";
          }
 */
//Use Case 
function ajouterClient(array &$clients,array $client){
    $clients[]=$client;
}
//Use Case Interne 
function estVide(string $value):bool{
    //$value=="" ou empty($value)
    if (empty($value)) {
       return true;
    }
    return false;
}
function rechercherClientParTel(array $clients,string $telephone):array|null{
    foreach ($clients as  $client) {
        if ($client["telephone"] == $telephone) {
            return $client;
        }
     }
     return null;
}

function getPosClientParTel(array $clients,string $telephone):int{
    foreach ($clients as $index=>  $client) {
        if ($client["telephone"] == $telephone) {
            return $index;
        }
     }
     return -1;
}



//Fonction Affichage et de saisie
function saisieChampObligatoire(string $sms):string{
    do {
        $value= readline($sms);
    } while (estVide($value));
   return $value;
}
function telephoneIsUnique(array $clients,string $sms):string{
    do {
        $value= readline($sms);
    } while (estVide($value) || rechercherClientParTel($clients,$value)!=null);
    return $value;
   
}

function estPositif(string $sms):string{
    do {
        $value=(float) readline($sms);
    } while ($value<=0);
    return $value;
}


function saisieUser(){
       return [
              "login"=>saisieChampObligatoire(" Entrer le Login: "),
              "password"=>saisieChampObligatoire(" Entrer le password: "),
       ];
}

//$avance==false ou !$avance
function saisieDette(bool $avance=false):array{
    return [
        "date"=>date("d-m-Y H:i:s"),
        "montant"=>estPositif("Veuillez entre le montant de la dette"),
        "montantAvance"=>!$avance?0:estPositif("Veuillez entre l'avance  de la dette"),
    ];
}


function saisieClient(array $clients):array{
    return [
        "telephone"=>telephoneIsUnique($clients,"Entrer le Telephone: "),
         "nom"=>saisieChampObligatoire(" Entrer le Nom: "),
         "prenom"=>saisieChampObligatoire(" Entrer le Prenom: "),
         "adresse"=>saisieChampObligatoire(" Entrer l'Adresse: "),
         "user"=>null,
         "dettes"=>[]
    ] ; 

}
function afficheDettes(array $dettes):void{
    echo"\n -------Les dettes-----------------\n";
    foreach ($dettes as  $v) {
        echo "Date : ". $v["date"]."\t";
        echo "Montant : ". $v["montant"]."\t";
        echo "Montant Avance : ". $v["montantAvance"]."\t";
    }
}
function afficheUnClient(array $client):void{
    echo"\n-----------------------------------------\n";
    echo "Telephone : ". $client["telephone"]."\t";
    echo "Nom : ". $client["nom"]."\t";
    echo "Prenom : ". $client["prenom"]."\t";
    echo "Adresse : ". $client["adresse"]."\t";
    if ($client["user"]!=null) {
        echo "Login : ".  $client["user"]["login"]."\t";
        echo "Password : ".  $client["user"]["password"]."\t";
        
    }
    if (count($client["dettes"])!=0) { {
        afficheDettes($client["dettes"]);
    }
  }
}

function afficheClient(array $clients):void{
    if (count($clients)==0) {
        echo "Pas de client a affiche";
    }else {
        foreach ($clients as  $client) {
            afficheUnClient($client);
       }
 }
}


 function menu(){
     echo "
      1.Ajouter client avec  option ajouter un user\n
      2.Lister les clients\n 
      3.Ajouter une dette a un client\n
      4.Lister les dettes un client\n
      5.Lister toutes  les dettes\n
      6.Quitter\n";
     return (int)readline(" Faites votre choix: ");
 }




 function principal(){
    $clients=[];
    do {
       $choix= menu();
       switch ($choix) {
        case 1:
           $client= saisieClient($clients);
           do {
               $rep= readline("Voulez vous ajouter un compte a ce Client O/N");
           } while ( $rep!="O" && $rep!="N" );
            if ($rep=="O") {
                $client["user"]=saisieUser();
            }
           ajouterClient($clients,$client);
            # code...
        break;
        case 2:
            afficheClient( $clients);
        break;
        case 3:
           $telephone= saisieChampObligatoire(" Entrer le Telephone: ");
           $pos=getPosClientParTel($clients,$telephone);
           if ($pos==-1) {
             echo "Le numero $telephone ne correspond pas a un client";
           }else{
             $dette= saisieDette();
           //  array_push( $client["dettes"],$dette);
             $clients[$pos]["dettes"][]=$dette;
           }
        break;
        case 4:
            $telephone= saisieChampObligatoire(" Entrer le Telephone: ");
            $client=rechercherClientParTel($clients,$telephone);
            if ($client==null) {
              echo "Le numero $telephone ne correspond pas a un client";
            }else{
                afficheUnClient($client);
            }
        break;
        case 5:
            # code...
        break;
        
        default:
           echo "Veullez faire un bon choix: ";
            break;
       }

    } while ($choix!=6);
 }
 principal();
