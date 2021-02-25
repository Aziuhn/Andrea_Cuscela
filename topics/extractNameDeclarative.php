<?php

$people = [
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


function extractName($item){
    return $item['name'];
}

$filterMario = function ($person){
    return $person['surname']=='Mario';
};

$names = array_map('extractName',$people);

print_r($names);

$marios = array_filter($people,function($person){
    return $person['surname']=='Mario'; 
});

$marios = array_filter($people,$filterMario);

print_r($marios);

?>


