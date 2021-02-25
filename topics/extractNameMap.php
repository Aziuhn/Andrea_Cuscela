<?php

$persons = [
    [
        "name" => "Mario",
        "surname" => "Rossi"
    ],
    [
        "name" => "Luigi",
        "surname" => "Verdi"
    ],
    [
        "name" => "Beppe",
        "surname" => "Bianchi"
    ]
];

function extractName($item){
    return $item["name"];
}

//map è una funzione che prende in argomento un'altra funzione e un array. Cicla automaticamente l'array
//applicando la funzione ad ogni elemento. Restituisce poi un array contenente i risultati della funzione
//interna applicati ad ogni singolo valore del primo array
$names = array_map("extractName",$persons);

print_r($names);

?>