<?php 
function ajouterClient(array &$clients,array $client){
    $clients[]=$client;
}
//Use Case Interne 
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
