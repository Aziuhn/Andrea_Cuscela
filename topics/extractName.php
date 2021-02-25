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

//dichiariamo un array vuoto da riempire coi soli nomi estratti da $persons
$names = [];
foreach ($persons as $person){
    //non serve dichiarare l'indice di names perché in PHP dire $arr[]=$variabile aggiunge la variabile
    //al fondo automaticamente
    $names[]=$person["name"];
}

//print_r è una funzione per stampare velocemente un array per controllo
print_r($names);
echo "\n";

//metodo tradizionale di stampa di un array
foreach ($names as $name){
    echo $name."\n";
}
echo "\n";

//implode è una funzione a cui si passa un array e una stringa separatrice da porre alla fine di ogni
//variabile, restituendo una singola stringa in cui le variabili e le stringhe separatrici sono concatenate.
//Essendo una singola stringa la si può comodamente stampare con echo. Non mette la stringa separatrice dopo
//l'ultima variabile
echo implode("\n",$names);
echo implode(" | ",$names);

?>


