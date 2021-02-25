<?php
$classe =[
    ["Mario","Rossi"],
    ["Luigi","Mario"],
    ["Mario","Mario"]
];

foreach ($classe as $key => $studente) {
    $nome = $studente[0];
    $cognome = $studente[1];
    echo "Il numero $key sul registro è $nome $cognome\n";
}