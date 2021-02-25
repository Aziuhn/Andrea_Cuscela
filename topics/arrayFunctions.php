<?php

$names=["Mario", "Luigi", "Beppe"];

//metodo esteso per cercare un valore in una stringa
$toFind = "Mario";
$found=false;
$found=findValue($toFind,$names);
$present=" non è presente";
if($found==true){
    $present=" è presente";
}
echo 'All\'interno di $names '.$toFind.$present;
echo "\n\n";

//in una funzione in PHP non è necessario dichiarare il tipo di parametro passato
//o il tipo di ciò che è restituito, ma è possibile farlo se lo si sa già in anticipo
function findValue(string $valueToFind, array $array):bool{
    foreach ($array as $value) {
        if($value == $valueToFind){
            //qualora una funzione trovi un return esce automaticamente (alternativa a quel che facevamo
            //in javascript usando il ciclo while con doppia condizione legata da &&)
            return true;
        }
    }
    return false;
}

//in_array controlla se all'interno di un array c'è un determinato valore, passandogli
//il valore da cercare e l'array in cui cercarlo. Restituisce un booleano.
$toFind = "Mario";
$found=false;
$present=" non è presente";
$found=in_array($toFind,$names );
if($found==true){
    $present=" è presente";
}
echo 'All\'interno di $names '.$toFind.$present;

?>