<?php 
require_once "model.php";
require_once "validator.php";
require_once "vue.php";


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
