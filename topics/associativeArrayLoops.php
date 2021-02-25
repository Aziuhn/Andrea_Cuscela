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

//inizializziamo $result per creare una stringa vuota nella quale aggiungeremo stringhe col ciclo foreach
$result = "";
foreach ($persons as $person){
    // utilizzare .= è una scorciatoia per concatenare stringhe come += per sommare valori
    $result .= $person["name"]."\n";
}

echo $result;