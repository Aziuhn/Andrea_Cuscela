<?php

$persons = [
    [
        "name" => "Mario",
        "surname" => "Mario"
    ],
    [
        "name" => "Luigi",
        "surname" => "Mario"
    ],
    [
        "name" => "Beppe",
        "surname" => "Bianchi"
    ]
];


$names = [];
foreach ($persons as $person){
    $names[]=$person["name"];
}

$marios =[];
foreach($persons as $person) {
    if($person['surname']=='Mario'){
        array_push($marios, $person);
    }
}

print_r($marios);

?>


