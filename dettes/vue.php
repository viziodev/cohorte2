<?php 

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

