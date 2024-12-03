<?php 

function estVide(string $value):bool{
    //$value=="" ou empty($value)
    if (empty($value)) {
       return true;
    }
    return false;
}

function estTelephone(string $value):bool{
    return true;
}