<?php
//in un associative array gli indici sono stringhe

//le [] sono uno shortcut per dichiarare un array invece di, ad esempio, arr=Array("blue","red","yellow");
$task = [
    //quando si associa una variabile al suo indice stringato si usa => invece di =
    "taskName" => "Comprare il latte",
    "date" => "2021-02-11",
    "id" => 4212
];

//si richiama la variabile usando $arr["stringa"] invece di $arr[i];
echo $task["date"]."\n";

$person = array(
    "name" => "Mario",
    "surname" => "Rossi",
    "age" => 25,
    "cf" => "HDGSYE86AHIB32G",
    //si può dentro un indice assegnare dei sotto-indici creando un sotto-array
    "address" => [
        "street" => "Via Ormea",
        "number" => "22/2",
        "postalCode" => "10100 "
    ]
);

//per richiamare una variabile come "Via Ormea" si chiama arr[stringIndex][subStringIndex]
echo $person["name"]." abita in ".$person["address"]["street"]." ".$person["address"]["number"]."\n";

?>

